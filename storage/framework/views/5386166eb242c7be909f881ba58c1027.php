<!DOCTYPE html>
<html>
    <head>
        <style>
            .cart-success{
                padding: 30px 10px;
            }
            @media (min-width: 1220px){
                .cart-success{
                    width:800px;
                    margin:0 auto;
                }
            }
            .cart-success .cart-heading{
                text-align: center;
                margin-bottom:30px;
            }
            .cart-success .cart-heading > span{
                text-transform: uppercase;
                font-weight: 700;
            }
            .discover-text > *{
                display: inline-block;
                padding:10px 25px;
                background: #2f5acf;
                border-radius: 16px;
                cursor:pointer;
                color:#fff;
            }
            .discover-text{
                text-align: center;
            }
            .checkout-box{
                border:1px solid #000;
                padding:15px 20px;
                border-radius: 16px;
            }
            .cart-success .panel-body{
                margin-bottom:40px;
            }
            .checkout-box-head{
                margin-bottom:30px;
            }

            .checkout-box-head .order-title{
                border:1px solid #000;
                border-radius: 16px;
                padding:10px 15px;
                font-weight: 700;
                font-size:16px;
            }
            .checkout-box-head .order-date{
                display: flex;
                align-items: center;
                font-size:16px;
                font-weight: bold;
                text-align: center;
            }
            .cart-success .table{
                width:100%;
                border-spacing: 0;
                background: #d9d9d9;
                border-collapse: inherit;
            }
            .cart-success .table thead>tr th{
                color:#fff;
                background: #2f5acf;
                font-weight: 500;
                font-size:14px;
                vertical-align: middle;
                border-bottom: 2px solid #dee2e6;
                text-align: center;
                border:none;
                padding:12px 15px;
            }
            .cart-success tbody tr td{
                padding:12px 15px;
                vertical-align: middle;
                font-size: 14px;
                color:#000;
                border-bottom:1px solid #ccc;
            }
            .cart-success tfoot{
                background: #fff;
            }
            .cart-success tfoot tr td{
                padding:8px;
            }

            .cart-success .table td:last-child{
                text-align: right;
            }
            .cart-success .table tbody tr:nth-child(2n) td {
                background-color: #d9d9d9;
            }
            .total_payment{
                font-weight: bold;
                font-size:24px;
            }
            .panel-foot .checkout-box div{
                margin-bottom:15px;
                font-weight: 500;
            }
            .uk-text-left{
                text-align: left;
            }
            .uk-text-right{
                text-align: right;
            }
            .uk-text-center{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="cart-success">
            <div class="panel-body">
                <h2 class="cart-heading"><span>Thông tin đơn hàng</span></h2>
                <div class="checkout-box">
                    <div class="checkout-box-head">
                        <div class="uk-grid uk-grid-medium uk-flex uk-flex-middle">
                            <div class="uk-width-large-1-3"></div>
                            <div class="uk-width-large-1-3">
                                <div class="order-title uk-text-center">ĐƠN HÀNG #<?php echo e($data['order']->code); ?></div>
                            </div>
                            <div class="uk-width-large-1-3">
                                <div class="order-date"><?php echo e(convertDateTime($data['order']->created_at)); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-box-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="uk-text-left">Tên sản phẩm</th>
                                    <th class="uk-text-center">Số lượng</th>
                                    <th class="uk-text-right">Giá niêm yết</th>
                                    <th class="uk-text-right">Giá bán</th>
                                    <th class="uk-text-right">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data['carts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $name = $val->name;
                                    $qty = $val->qty;
                                    $price = convert_price($val->price, true);
                                    $priceOriginal = convert_price($val->priceOriginal, true);
                                    $subtotal = convert_price($val->price * $qty, true);
                                ?>
                                <tr>
                                    <td class="uk-text-left"><?php echo e($name); ?></td>
                                    <td class="uk-text-center"><?php echo e($qty); ?></td>
                                    <td class="uk-text-right"><?php echo e($priceOriginal); ?>đ</td>
                                    <td class="uk-text-right"><?php echo e($price); ?>đ</td>
                                    <td class="uk-text-right"><strong><?php echo e($subtotal); ?>đ</strong></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">Mã giảm giá</td>
                                    <td><strong><?php echo e($data['cartPromotion']['selectedPromotion']->code ?? '-'); ?></strong></td>
                                </tr>
                                <tr>
                                    <td colspan="4">Tổng giá trị sản phẩm</td>
                                    <td><strong><?php echo e(convert_price($data['cartCaculate']['cartDiscount'] + $data['cartCaculate']['cartTotal'], true)); ?>đ</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="4">Tổng giá trị khuyến mãi</td>
                                    <td><strong><?php echo e(convert_price($data['cartCaculate']['cartDiscount'], true)); ?>đ</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="4">Phí giao hàng</td>
                                    <td><strong>0đ</strong></td>
                                </tr>
                                <tr class="total_payment">
                                    <td colspan="4"><span>Tổng thanh toán</span></td>
                                    <td><?php echo e(convert_price($data['cartCaculate']['cartTotal'], true)); ?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel-foot">
                <h2 class="cart-heading"><span>Thông tin nhận hàng</span></h2>
                <div class="checkout-box">
                    <div>Tên người nhận: <?php echo e($data['order']->fullname); ?><span></span></div>
                    <div>Email: <?php echo e($data['order']->email); ?><span></span></div>
                    <div>Địa chỉ: <?php echo e($data['order']->address); ?><span></span></div>
                    <div>Số điện thoại: <?php echo e($data['order']->phone); ?><span></span></div>
                    <div>Hình thức thanh toán: <?php echo e(array_column(__('payment.method'), 'title', 'name')[$data['order']->method] ?? '-'); ?><span></span></div>
                </div>
            </div>
        </div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\vmstore\resources\views/mail/order.blade.php ENDPATH**/ ?>