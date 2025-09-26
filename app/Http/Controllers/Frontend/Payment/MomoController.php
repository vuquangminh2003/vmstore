<?php

namespace App\Http\Controllers\Frontend\Payment;

use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\OrderRepositoryInterface  as OrderRepository;
use App\Services\Interfaces\OrderServiceInterface  as OrderService;


class MomoController extends FrontendController
{
  
    protected $orderRepository;
    protected $orderService;

    public function __construct(
        OrderRepository $orderRepository,
        OrderService $orderService,
    ){
       
        $this->orderRepository = $orderRepository;
        $this->orderService = $orderService;
        parent::__construct();
    }


    public function momo_return(Request $request)
    {
        $momoConfig = momoConfig();
    
        $secretKey = $momoConfig['secretKey']; 
        $partnerCode = $momoConfig['partnerCode']; 
        $accessKey = $momoConfig['accessKey']; 
    
        if (!empty($_GET)) {
            $rawData = "accessKey=".$accessKey;
            $rawData .= "&amount=".$_GET['amount'];
            $rawData .= "&extraData=".$_GET['extraData'];
            $rawData .= "&message=".$_GET['message'];
            $rawData .= "&orderId=".$_GET['orderId'];
            $rawData .= "&orderInfo=".$_GET['orderInfo'];
            $rawData .= "&orderType=".$_GET['orderType'];
            $rawData .= "&partnerCode=".$_GET['partnerCode'];
            $rawData .= "&payType=".$_GET['payType'];
            $rawData .= "&requestId=".$_GET['requestId'];
            $rawData .= "&responseTime=".$_GET['responseTime'];
            $rawData .= "&resultCode=".$_GET['resultCode'];
            $rawData .= "&transId=".$_GET['transId'];
    
            $partnerSignature = hash_hmac("sha256", $rawData, $secretKey);
            $m2signature = $_GET['signature'];
    
            // ✅ Kiểm tra chữ ký bảo mật
            if ($partnerSignature !== $m2signature) {
                return redirect()->route('cart.checkout')->with('error', 'Xác thực thất bại, vui lòng thử lại.');
            }
    
            // ✅ Kiểm tra trạng thái thanh toán Momo
            if ($_GET['resultCode'] != '0') {
                return redirect()->route('cart.checkout')->with('error', 'Giao dịch bị từ chối: ' . $_GET['message']);
            }
    
            // ✅ Nếu giao dịch thành công, xử lý đơn hàng
            $orderId = $_GET['orderId'];
            $order = $this->orderRepository->findByCondition([
                ['code', '=', $orderId],
            ], false, ['products']);
    
            if (!$order) {
                return redirect()->route('cart.checkout')->with('error', 'Không tìm thấy đơn hàng.');
            }
    
            // ✅ Cập nhật đơn hàng nếu chưa được thanh toán
            if ($order->payment !== 'paid') {
                $payload['payment'] = 'paid';
                $payload['confirm'] = 'confirm';
                $this->orderService->updatePaymentOnline($payload, $order);

                \Cart::instance('shopping')->destroy();
    session()->forget('order_id');
    session()->forget('products');
    \Cookie::queue(\Cookie::forget('cart'));
    \Cookie::queue(\Cookie::forget('guest_cart'));
            }
    
            // ✅ Trả về trang xác nhận thanh toán
            $momo = [
                'm2signature' => $m2signature,
                'partnerSignature' => $partnerSignature,
                'message' => $_GET['message'],
            ];
    
            $system = $this->system;
            $seo = [
                'meta_title' => 'Thông tin thanh toán mã đơn hàng #'.$orderId,
                'meta_keyword' => '',
                'meta_description' => '',
                'meta_image' => '',
                'canonical' => write_url('cart/success', TRUE, TRUE),
            ];
    
            $template = 'frontend.cart.component.momo';
            return view('frontend.cart.success', compact(
                'seo',
                'system',
                'order',
                'template',
                'momo'
            ));
        }
    
        return redirect()->route('cart.checkout')->with('error', 'Dữ liệu phản hồi không hợp lệ.');
    }
    

    public function momo_ipn(){
        http_response_code(200); //200 - Everything will be 200 Oke

        $momoConfig = momoConfig();

        $secretKey = $momoConfig['secretKey']; //Put your secret key in there
        if (!empty($_POST)) {
            $response = array();
            try {
               
                //Checksum 
                $rawData = "accessKey=".$accessKey;
                $rawData .= "&amount=".$_POST['amount'];
                $rawData .= "&extraData=".$_POST['extraData'];
                $rawData .= "&message=".$_POST['message'];
                $rawData .= "&orderId=".$_POST['orderId'];
                $rawData .= "&orderInfo=".$_POST['orderInfo'];
                $rawData .= "&orderType=".$_POST['orderType'];
                $rawData .= "&partnerCode=".$_POST['partnerCode'];
                $rawData .= "&payType=".$_POST['payType'];
                $rawData .= "&requestId=".$_POST['requestId'];
                $rawData .= "&responseTime=".$_POST['responseTime'];
                $rawData .= "&resultCode=".$_POST['resultCode'];
                $rawData .= "&transId=".$_POST['transId'];

                $partnerSignature = hash_hmac("sha256", $rawHash, $secretKey);

                if ($m2signature == $partnerSignature) {

                    $order = $this->orderRepository->findByCondition([
                        ['code', '=', $orderId],
                    ], false, ['products']);

                    // $payload['payment'] = 'paid';
                    // $payload['confirm'] = 'confirm';
                    if ($_POST['resultCode'] == 0) { // Thành công
                        $payload['payment'] = 'paid';
                        $payload['confirm'] = 'confirm';
                    } elseif ($_POST['resultCode'] == 1006) { // Hủy giao dịch
                        $payload['payment'] = 'unpaid';
                        $payload['confirm'] = 'pending';
                    } else { // Các lỗi khác
                        $payload['payment'] = 'failed';
                        $payload['confirm'] = 'pending';
                    }
                    $flag = $this->orderService->updatePaymentOnline($payload, $order);

                } else {
                    $result = '<div class="alert alert-danger">This transaction could be hacked, please check your signature and returned signature</div>';
                }

            } catch (Exception $e) {
                echo $response['message'] = $e;
            }

            $debugger = array();
            $debugger['rawData'] = $rawHash;
            $debugger['momoSignature'] = $m2signature;
            $debugger['partnerSignature'] = $partnerSignature;

            if ($m2signature == $partnerSignature) {
                $response['message'] = "Received payment result success";
            } else {
                $response['message'] = "ERROR! Fail checksum";
            }
            $response['debugger'] = $debugger;
            echo json_encode($response);
        }
    }




}
