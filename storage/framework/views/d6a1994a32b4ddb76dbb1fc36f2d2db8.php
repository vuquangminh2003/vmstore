


<?php $__env->startSection('content'); ?>
    <div id="buyer-signup"> 
        <div class="page-breadcrumb background">      
            <div class="uk-container uk-container-center">
                <ul class="uk-list uk-clearfix uk-flex uk-flex-middle">
                    <li>
                        <a href="/"><i class="fi-rs-home mr5"></i>Trang chủ</a>
                        <span><i class="fi-rs-angle-right"></i></span>
                    </li>
                    <li><a href="<?php echo e(route('customer.profile')); ?>" title="">Danh sách đơn hàng</a></li>
                </ul>
            </div>
        </div>
        <div class="profile-container buyer-page">
            <div class="uk-container uk-container-center">
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-width-large-1-4">
                        <?php echo $__env->make('frontend.auth.customer.components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="uk-width-large-3-4">
                        <div class="profile-content buyer-wrapper">
                            <div class="panel-head">
                                <div class="heading-2"><span>Danh sách đơn hàng</span></div>
                                <div class="description">Quản lý thông tin đơn hàng của bạn</div>
                            </div>
                            <div class="panel-body">
                                <table class="order-table">
                                    <tbody>
                                        <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $name = $val->pivot->name;
                                            $qty = $val->pivot->qty;
                                            $price = convert_price($val->pivot->price, true);
                                            $priceOriginal = convert_price($val->pivot->priceOriginal, true);
                                            $subtotal = convert_price($val->pivot->price * $qty, true);
                                            $image = image($val->image);
                                        ?>
                                        <tr class="order-item">
                                            <td>
                                               <div class="image">
                                                    <span class="image img-scaledown"><img src="<?php echo e($image); ?>" alt=""></span>
                                                </div> 
                                            </td>
                                            <td style="width:285px;">
                                                <div class="order-item-name" title=""<?php echo e($name); ?>"><?php echo e($name); ?></div>
                                                
                                            </td>
                                            <td>
                                                <div class="order-item-price"><?php echo e($price); ?> ₫</div>
                                            </td>
                                            <td>
                                                <div class="order-item-times">x</div>
                                            </td>
                                            <td>
                                                <div class="order-item-qty"><?php echo e($qty); ?></div>
                                            </td>
                                            <td>
                                                <div class="order-item-subtotal">
                                                    <?php echo e($subtotal); ?> ₫
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td colspan="5" class="text-right">Tổng tạm</td>
                                            <td class="text-right"><?php echo e(convert_price($order->cart['cartTotal'], true)); ?> ₫</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="text-right">Giảm giá</td>
                                            <td class="text-right">- <?php echo e(convert_price($order->promotion['discount'], true)); ?> ₫</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="text-right">Vận chuyển</td>
                                            <td class="text-right"><?php echo e(convert_price($order->shipping, true)); ?> ₫</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="text-right" ><strong>Tổng cuối</strong></td>
                                            <td class="text-right" style="font-size:18px;"><strong style="color:blue;"><?php echo e(convert_price($order->cart['cartTotal'] - $order->promotion['discount'] + $order->shipping, true)); ?> ₫</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.homepage.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/auth/customer/order-detail.blade.php ENDPATH**/ ?>