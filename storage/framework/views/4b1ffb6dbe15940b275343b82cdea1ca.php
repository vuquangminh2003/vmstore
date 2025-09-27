<form action="<?php echo e(route('post.index')); ?>">
    <div class="filter-wrapper">
        <div class="uk-flex uk-flex-middle uk-flex-space-between">
            <?php echo $__env->make('backend.dashboard.component.perpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="action">
                <div class="uk-flex uk-flex-middle">
                    
                    <?php
                        $postCatalogueId = request('post_catalogue_id') ?: old('post_catalogue_id');
                    ?>
                    <select name="post_catalogue_id" class="form-control setupSelect2 ml10">
                        <?php $__currentLoopData = $dropdown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e(($postCatalogueId == $key)  ? 'selected' : ''); ?> value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php echo $__env->make('backend.dashboard.component.keyword', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <a href="<?php echo e(route('post.create')); ?>" class="btn btn-danger"><i class="fa fa-plus mr5"></i><?php echo e(__('messages.post.create.title')); ?></a>
                </div>
            </div>
        </div>
    </div>
</form>

<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/post/post/component/filter.blade.php ENDPATH**/ ?>