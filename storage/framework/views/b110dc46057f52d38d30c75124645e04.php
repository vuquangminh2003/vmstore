<div class="ibox w">
    <div class="ibox-title">
        <h5><?php echo e(__('messages.parent')); ?></h5>
    </div>
    <div class="ibox-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-row">
                    <span class="text-danger notice" >*<?php echo e(__('messages.parentNotice')); ?></span>
                    <select name="parent_id" class="form-control setupSelect2" id="">
                        <?php $__currentLoopData = $dropdown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e($key == old('parent_id', (isset($productCatalogue->parent_id)) ? $productCatalogue->parent_id : '') ? 'selected' : ''); ?> value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ibox w">
    <div class="ibox-title">
        <h5>Icon Danh mục</h5>
    </div>
    <div class="ibox-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-row">
                    <input 
                        type="text" 
                        name="icon" 
                        value="<?php echo e(old('icon', ($productCatalogue->icon) ?? '' )); ?>"
                        class="upload-image form-control"
                    >
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('backend.dashboard.component.publish', ['model' => ($productCatalogue) ?? null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/product/catalogue/component/aside.blade.php ENDPATH**/ ?>