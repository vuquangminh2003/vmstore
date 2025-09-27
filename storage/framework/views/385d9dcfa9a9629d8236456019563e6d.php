<?php echo $__env->make('backend.dashboard.component.breadcrumb', ['title' => $config['seo'][$config['method']]['title']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('backend.dashboard.component.formError', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
    $url = ($config['method'] == 'create') ? route('attribute.store') : route('attribute.update', [$attribute->id, $queryUrl ?? '']);
?>
<form action="<?php echo e($url); ?>" method="post" class="box">
    <?php echo csrf_field(); ?>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-9">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5><?php echo e(__('messages.tableHeading')); ?></h5>
                    </div>
                    <div class="ibox-content">
                        <?php echo $__env->make('backend.dashboard.component.content', ['model' => ($attribute) ?? null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
               <?php echo $__env->make('backend.dashboard.component.album', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('backend.dashboard.component.seo', ['model' => ($attribute) ?? null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-lg-3">
                <?php echo $__env->make('backend.attribute.attribute.component.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <?php echo $__env->make('backend.dashboard.component.button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</form>
<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/attribute/attribute/store.blade.php ENDPATH**/ ?>