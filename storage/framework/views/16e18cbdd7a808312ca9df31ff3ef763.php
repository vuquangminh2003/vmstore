<?php
    $modelName = $model->languages->first()->pivot->name;
?>
<div class="page-breadcrumb background">      
    <div class="uk-container uk-container-center">
        <ul class="uk-list uk-clearfix">
            <li><a href="/"><i class="fi-rs-home mr5"></i><?php echo e(__('frontend.home')); ?></a></li>
            <?php if(!is_null($breadcrumb)): ?>
                <?php $__currentLoopData = $breadcrumb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $name = $val->languages->first()->pivot->name;
                    $canonical = write_url($val->languages->first()->pivot->canonical, true, true);
                ?>
                <li><a href="<?php echo e($canonical); ?>" title="<?php echo e($name); ?>"><?php echo e($name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
    </div>
</div><?php /**PATH C:\xampp\htdocs\vmstore\resources\views/frontend/component/breadcrumb.blade.php ENDPATH**/ ?>