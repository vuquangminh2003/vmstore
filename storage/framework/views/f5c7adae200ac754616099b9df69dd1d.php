<form action="<?php echo e(route('slide.index')); ?>">
    <div class="filter-wrapper">
        <div class="uk-flex uk-flex-middle uk-flex-space-between">
            <div class="perpage">
                <?php
                    $perpage = request('perpage') ?: old('perpage');
                ?>
                <div class="uk-flex uk-flex-middle uk-flex-space-between">
                    <select name="perpage" class="form-control input-sm perpage filter mr10">
                        <?php for($i = 20; $i<= 200; $i+=20): ?>
                        <option <?php echo e(($perpage == $i)  ? 'selected' : ''); ?>  value="<?php echo e($i); ?>"><?php echo e($i); ?> bản ghi</option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="action">
                <div class="uk-flex uk-flex-middle">
                    
                    <?php echo $__env->make('backend.dashboard.component.keyword', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <a href="<?php echo e(route('slide.create')); ?>" class="btn btn-danger"><i class="fa fa-plus mr5"></i>Thêm mới slide</a>
                </div>
            </div>
        </div>
    </div>
</form><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/slide/slide/component/filter.blade.php ENDPATH**/ ?>