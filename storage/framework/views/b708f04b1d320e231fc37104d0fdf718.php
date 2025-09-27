<div class="perpage">
    <?php
        $perpage = request('perpage') ?: old('perpage');
    ?>
    <div class="uk-flex uk-flex-middle uk-flex-space-between">
        <select name="perpage" class="form-control input-sm perpage filter mr10">
            <?php for($i = 20; $i<= 200; $i+=20): ?>
            <option <?php echo e(($perpage == $i)  ? 'selected' : ''); ?>  value="<?php echo e($i); ?>"><?php echo e($i); ?> <?php echo e(__('messages.perpage')); ?></option>
            <?php endfor; ?>
        </select>
    </div>
</div><?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/dashboard/component/perpage.blade.php ENDPATH**/ ?>