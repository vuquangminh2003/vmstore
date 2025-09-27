<div class="ibox">
    <div class="ibox-title">
        <h5>Cài đặt thông tin chi tiết voucher</h5>
    </div>
    <div class="ibox-content">
        <div class="form-row voucher">
            <div class="fix-label" for="">Chọn hình thức áp dụng voucher</div>
            <select name="method" class="setupSelect2 promotionMethod " id="">
                <option value="none">Chọn hình thức</option>
                <?php $__currentLoopData = __('module.voucher'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($key); ?>"> <?php echo e($val); ?> </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="promotion-container">
            
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/voucher/component/detail.blade.php ENDPATH**/ ?>