<form action="<?php echo e(route('order.index')); ?>">
    <div class="filter-wrapper">
        <div class="uk-flex uk-flex-middle uk-flex-space-between">
            <div class="uk-flex uk-flex-middle">
                <?php echo $__env->make('backend.dashboard.component.perpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="date-item-box">
                    <input 
                        type="type" 
                        name="created_at" 
                        readonly 
                        value="<?php echo e(request('created_at') ?: old('created_at')); ?>" class="rangepicker form-control"
                        placeholder="Click chọn ngày"
                    >
                </div>
            </div>
            <div class="action">
                <div class="uk-flex uk-flex-middle">
                    <div class="mr10">
                        <?php $__currentLoopData = __('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            ${$key} = request($key) ?: old($key);
                        ?>
                        <select name="<?php echo e($key); ?>" class="form-control setupSelect2 ml10">
                            <?php $__currentLoopData = $val; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php echo e((${$key} == $index)  ? 'selected' : ''); ?> value="<?php echo e($index); ?>"><?php echo e($item); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php echo $__env->make('backend.dashboard.component.keyword', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>
</form><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/order/component/filter.blade.php ENDPATH**/ ?>