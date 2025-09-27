<form action="<?php echo e(route('customer.catalogue.index')); ?>">
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
                    <div class="uk-flex uk-flex-middle">
                        
                        <a href="<?php echo e(route('customer.catalogue.create')); ?>" class="btn btn-danger"><i class="fa fa-plus mr5"></i>Thêm mới nhóm thành viên</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/customer/catalogue/component/filter.blade.php ENDPATH**/ ?>