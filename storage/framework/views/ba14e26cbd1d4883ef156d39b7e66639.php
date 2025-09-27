


<?php $__env->startSection('content'); ?>
    <div id="buyer-signup"> 
        <div class="page-breadcrumb background">      
            <div class="uk-container uk-container-center">
                <ul class="uk-list uk-clearfix uk-flex uk-flex-middle">
                    <li>
                        <a href="/"><i class="fi-rs-home mr5"></i>Trang chủ</a>
                        <span><i class="fi-rs-angle-right"></i></span>
                    </li>
                    <li><a href="<?php echo e(route('customer.profile')); ?>" title="">Đơn hàng của bạn</a></li>
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
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã đơn hàng</th>
                                            <th>Ngày đặt</th>
                                            <th>Thành tiền</th>
                                            <th>Phí ship</th>
                                            <th>Tổng tiền</th>
                                            <th>Tình trạng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($order) && count($order)): ?>
                                            <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                // dd($val);
                                                $cartTotal = convert_price($val->cart['cartTotal'], true);
                                            ?>
                                            <tr>
                                                <td><?php echo e($val->id); ?></td>
                                                <td><a class="order-detail-link" href="<?php echo e(route('customer.order.detail', ['id' => $val->id])); ?>"><?php echo e($val->code); ?></a></td>
                                                <td><?php echo e(convertDateTime($val->created_at, 'd-m-Y')); ?></td>
                                                <td><?php echo e($cartTotal); ?>₫</td>
                                                <td><?php echo e(convert_price($val->shipping, true)); ?>₫</td>
                                                <td style="color: blue;"><?php echo e(convert_price($val->shipping + $val->cart['cartTotal'], true)); ?>₫</td>
                                                <td>
                                                    <?php echo ($val->confirm != 'cancle') ? __('cart.confirm')[$val->confirm] : '<span class="cancle-badge">'.__('cart.confirm')[$val->confirm].'</span>'; ?>

                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
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

<?php echo $__env->make('frontend.homepage.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/auth/customer/order.blade.php ENDPATH**/ ?>