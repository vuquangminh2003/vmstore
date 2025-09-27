
<?php $__env->startSection('content'); ?>
<div class="cart-container">
    <div class="page-breadcrumb background">      
        <div class="uk-container uk-container-center">
            <ul class="uk-list uk-clearfix">
                <li><a href="/"><i class="fi-rs-home mr5"></i>Trang chủ</a></li>
                <li><a href="http://127.0.0.1:8000/thanh-toan.html" title="Hệ thống phân phối">Thanh toán</a></li>
            </ul>
        </div>
    </div>
    <div class="uk-container uk-container-center">

        <?php if($errors->any()): ?>
        <div class="uk-alert uk-alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('cart.store')); ?>" class="uk-form form" method="post">
            <?php echo csrf_field(); ?>
            <h2 class="heading-1"><span>Thông tin đặt hàng</span></h2>
            <div class="cart-wrapper">
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-width-large-2-5">
                        <div class="panel-cart cart-left">
                            <?php echo $__env->make('frontend.cart.component.information', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('frontend.cart.component.method', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <div class="uk-width-large-3-5">
                        <div class="panel-cart">
                            <div class="panel-head">
                                <h2 class="cart-heading"><span>Đơn hàng</span></h2>
                            </div>
                            <?php echo $__env->make('frontend.cart.component.item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('frontend.cart.component.voucher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('frontend.cart.component.summary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <button type="submit" class="cart-checkout" value="create" name="create">Thanh toán đơn hàng</button>
                            <div class="box-info mt-3">
                                <div class="box-title">Thông tin bổ sung</div>
                                <div class="info">
                                    <div class="content-style">
                                        <h3><strong>Chính sách trả hàng, đổi hàng:</strong></h3>
                                        <p>Ngoại trừ lỗi do nhà sản xuất hoặc khác mẫu yêu cầu, những trường hợp còn lại Quý khách không được đổi-trả hàng.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<script>
    var province_id = '<?php echo e((isset($order->province_id)) ? $order->province_id : old('province_id')); ?>'
    var district_id = '<?php echo e((isset($order->district_id)) ? $order->district_id : old('district_id')); ?>'
    var ward_id = '<?php echo e((isset($order->ward_id)) ? $order->ward_id : old('ward_id')); ?>'
</script>
<?php echo $__env->make('frontend.homepage.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/cart/index.blade.php ENDPATH**/ ?>