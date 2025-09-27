<form action="<?php echo e(route('attribute.index')); ?>">
    <div class="filter-wrapper">
        <div class="uk-flex uk-flex-middle uk-flex-space-between">
            <?php echo $__env->make('backend.dashboard.component.perpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="action">
                <div class="uk-flex uk-flex-middle">
                    
                    <?php
                        $attributeCatalogueId = request('attribute_catalogue_id') ?: old('attribute_catalogue_id');
                    ?>
                    <select name="attribute_catalogue_id" class="form-control setupSelect2 ml10">
                        <?php $__currentLoopData = $dropdown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e(($attributeCatalogueId == $key)  ? 'selected' : ''); ?> value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php echo $__env->make('backend.dashboard.component.keyword', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <a href="<?php echo e(route('attribute.create')); ?>" class="btn btn-danger"><i class="fa fa-plus mr5"></i><?php echo e(__('messages.attribute.create.title')); ?></a>
                </div>
            </div>
        </div>
    </div>
</form>

<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/attribute/attribute/component/filter.blade.php ENDPATH**/ ?>