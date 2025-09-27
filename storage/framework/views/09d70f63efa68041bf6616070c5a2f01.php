<div class="buyer-task">
    <ul class="uk-list uk-clearfix">
        <?php $__currentLoopData = __('buyer.module'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <span><?php echo e($val['title']); ?></span>
            <?php if(isset($val['subModule'])): ?>
            <ul class="uk-list uk-clearfix main-task">
                <?php $__currentLoopData = $val['subModule']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="<?php echo e($module['route']); ?>">
                        <i class="<?php echo e($module['icon']); ?>"></i>
                        <span><?php echo e($module['title']); ?></span>
                    </a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <?php endif; ?>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div><?php /**PATH C:\xampp\htdocs\vphome\resources\views/buyer/buyer/component/aside.blade.php ENDPATH**/ ?>