<div class="ibox">
    <div class="ibox-title">
        <h5>Cài đặt thông tin chi tiết khuyến mãi</h5>
    </div>
    <div class="ibox-content">
        <div class="form-row">
            <div class="fix-label" for="">Chọn hình thức khuyến mãi</div>
            <select name="method" class="setupSelect2 promotionMethod" id="">
                <option value="none">Chọn hình thức</option>
                <?php $__currentLoopData = __('module.promotion'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($key); ?>"> <?php echo e($val); ?> </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="promotion-container">
            
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/promotion/promotion/component/detail.blade.php ENDPATH**/ ?>