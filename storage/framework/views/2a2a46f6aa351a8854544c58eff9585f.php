<?php
    $publish = request('publish') ?: old('publish');
?>
<select name="publish" class="form-control setupSelect2 ml10">
    <?php $__currentLoopData = __('messages.publish'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option <?php echo e(($publish == $key)  ? 'selected' : ''); ?> value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/dashboard/component/filterPublish.blade.php ENDPATH**/ ?>