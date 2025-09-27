<?php if(isset($voucher_product) && $price['price'] !== 0): ?>
    <div class="product-info_voucher mb10">
        <div class="text_voucher">
            Mã giảm giá 
        </div>
        <div class="list-voucher">
            <?php $__currentLoopData = $voucher_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="mini-coupon-item">
                    <a 
                        href="" 
                        class="info-voucher <?php echo e($v->is_active == true ? 'active' : ''); ?>" 
                        data-voucher="<?php echo e($v->id); ?>" 
                    >
                        Giảm <?php echo e($v->discount_value); ?><?php echo e($v->discount_type == App\Enums\VoucherEnum::FIXED ? 'đ' : '%'); ?>

                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/product/product/component/voucher.blade.php ENDPATH**/ ?>