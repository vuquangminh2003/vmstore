<div class="table-responsive">
    <div class="form-group">
        <label >Mã đơn hàng:</label>

        <label><?php echo e($_GET['vnp_TxnRef']); ?></label>
    </div>    
    <div class="form-group">

        <label >Số tiền:</label>
        <label><?php echo e($_GET['vnp_Amount']); ?></label>
    </div>  
    <div class="form-group">
        <label >Nội dung thanh toán:</label>
        <label><?php echo e($_GET['vnp_OrderInfo']); ?></label>
    </div> 
    <div class="form-group">
        <label >Mã phản hồi (vnp_ResponseCode):</label>
        <label><?php echo e($_GET['vnp_ResponseCode']); ?></label>
    </div> 
    <div class="form-group">
        <label >Mã GD Tại VNPAY:</label>
        <label><?php echo e($_GET['vnp_TransactionNo']); ?></label>
    </div> 
    <div class="form-group">
        <label >Mã Ngân hàng:</label>
        <label><?php echo e($_GET['vnp_BankCode']); ?></label>
    </div> 
    <div class="form-group">
        <label >Thời gian thanh toán:</label>
        <label><?php echo e($_GET['vnp_PayDate']); ?></label>
    </div> 
    <div class="form-group">
        <label >Kết quả:</label>
        <label>
           
            <?php if($secureHash == $vnp_SecureHash): ?> 
                <?php if($_GET['vnp_ResponseCode'] == '00'): ?> 
                    <span style='color:blue'>Giao dịch qua cổng VNPAY Thành công</span>
                <?php else: ?> 
                    <span style='color:red'>Giao dịch qua cổng VNPAY Không thành công</span>
                <?php endif; ?>
            <?php else: ?> 
                <span style='color:red'>Chữ ký không hợp lệ</span>
            <?php endif; ?>
        </label>
    </div> 
</div><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/cart/component/vnpay.blade.php ENDPATH**/ ?>