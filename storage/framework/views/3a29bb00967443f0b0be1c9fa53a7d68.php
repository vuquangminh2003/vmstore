<div class="ibox w">
    <div class="ibox-title">
        <h5><?php echo e(__('messages.parent')); ?></h5>
    </div>
    <div class="ibox-content">
        <div class="row mb15">
            <div class="col-lg-12">
                <div class="form-row">
                    <select name="attribute_catalogue_id" class="form-control setupSelect2" id="">
                        <?php $__currentLoopData = $dropdown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e($key == old('attribute_catalogue_id', (isset($attribute->attribute_catalogue_id)) ? $attribute->attribute_catalogue_id : '') ? 'selected' : ''); ?> value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
        <?php
            $catalogue = [];
            if(isset($attribute)){
                foreach($attribute->attribute_catalogues as $key => $val){
                    $catalogue[] = $val->id;
                }
            }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-row">
                    <label class="control-label"><?php echo e(__('messages.subparent')); ?></label>
                    <select multiple name="catalogue[]" class="form-control setupSelect2" id="">
                        <?php $__currentLoopData = $dropdown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option 
                            <?php if(is_array(old('catalogue', (
                                isset($catalogue) && count($catalogue)) ?   $catalogue : [])
                                ) && isset($attribute->attribute_catalogue_id) && $key !== $attribute->attribute_catalogue_id &&  in_array($key, old('catalogue', (isset($catalogue)) ? $catalogue : []))
                            ): ?>
                            selected
                            <?php endif; ?> value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('backend.dashboard.component.publish', ['model' => ($attribute) ?? null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/attribute/attribute/component/aside.blade.php ENDPATH**/ ?>