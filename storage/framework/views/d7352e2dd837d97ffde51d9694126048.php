
<?php $__env->startSection('content'); ?>
    <div class="cart-success">
        <div class="panel-head">
            <h2 class="cart-heading"><span>Đặt hàng thành công</span></h2>
            <div class="discover-text"><a href="<?php echo e(write_url('san-pham')); ?>">Khám phá thêm các sản phẩm khác tại đây</a></div>
        </div>
        <div class="panel-body">
            <h2 class="cart-heading"><span>Thông tin đơn hàng</span></h2>
            <div class="checkout-box">
                <div class="checkout-box-head">
                    <div class="uk-grid uk-grid-medium uk-flex uk-flex-middle">
                        <div class="uk-width-large-1-3"></div>
                        <div class="uk-width-large-1-3">
                            <div class="order-title uk-text-center">ĐƠN HÀNG #<?php echo e($order->code); ?></div>
                        </div>
                        <div class="uk-width-large-1-3">
                            <div class="order-date"><?php echo e(convertDateTime($order->created_at)); ?></div>
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
                            <?php
                                $carts = $order->products;
                            ?>
                            <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $name = $val->pivot->name;
                                $qty = $val->pivot->qty;
                                $price = convert_price($val->pivot->price, true);
                                $priceOriginal = convert_price($val->pivot->priceOriginal, true);
                                $subtotal = convert_price($val->pivot->price * $qty, true);
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
                                <td><strong><?php echo e($order->promotion['code']); ?></strong></td>
                            </tr>
                            <tr>
                                <td colspan="4">Tổng giá trị sản phẩm</td>
                                <td><strong><?php echo e(convert_price($order->cart['cartTotal'], true)); ?>đ</strong></td>
                            </tr>
                            <tr>
                                <td colspan="4">Tổng giá trị khuyến mãi</td>
                                <td><strong><?php echo e(convert_price($order->promotion['discount'], true)); ?>đ</strong></td>
                            </tr>
                            <tr>
                                <td colspan="4">Phí giao hàng</td>
                                <td><strong>0đ</strong></td>
                            </tr>
                            <tr class="total_payment">
                                <td colspan="4"><span>Tổng thanh toán</span></td>
                                <td><?php echo e(convert_price($order->cart['cartTotal'] - $order->promotion['discount'], true)); ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel-foot">
            <h2 class="cart-heading"><span>Thông tin nhận hàng</span></h2>
            <div class="checkout-box">
                <div>Tên người nhận: <?php echo e($order->fullname); ?><span></span></div>
                <!-- <div>Email: <?php echo e($order->email); ?><span></span></div> -->
                <div>Địa chỉ: <?php echo e($order->address); ?><span></span></div>
                <?php
                    $province = $order->provinces->first()->name;
                    $district = $order->provinces->first()->districts->where('code',$order->district_id)->first()->name;
                    $ward =$order->provinces->first()->districts->where('code',$order->district_id)->first()->wards->where('code',$order->ward_id)->first()->name;
                ?>
                <div>Phường/Xã: <span><?php echo e($ward); ?></span>
                </div>
                <div>Quận/Huyện: <span><?php echo e($district); ?></span></div>
                <div>Tỉnh/Thành phố: <span><?php echo e($province); ?></span></div>
                <div>Số điện thoại: <?php echo e($order->phone); ?><span></span></div>
                <div>Hình thức thanh toán: <?php echo e(array_column(__('payment.method'), 'title', 'name')[$order->method] ?? '-'); ?><span></span></div>

                <?php if(isset($template)): ?>
                    <?php echo $__env->make($template, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('frontend.homepage.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vmstore\resources\views/frontend/cart/success.blade.php ENDPATH**/ ?>