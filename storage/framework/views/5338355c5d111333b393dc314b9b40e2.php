<form action="<?php echo e(route('customer.index')); ?>">
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
                   
                    <select name="customer_catalogue_id" class="form-control mr10 setupSelect2">
                        <option value="0" selected="selected">Chọn Nhóm Thành Viên</option>
                        <?php $__currentLoopData = $customerCatalogues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($val->id); ?>"><?php echo e($val->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php echo $__env->make('backend.dashboard.component.keyword', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <a href="<?php echo e(route('customer.create')); ?>" class="btn btn-danger"><i class="fa fa-plus mr5"></i>Thêm mới thành viên</a>
                </div>
            </div>
        </div>
    </div>
</form><?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/customer/customer/component/filter.blade.php ENDPATH**/ ?>