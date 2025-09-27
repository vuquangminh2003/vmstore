<?php echo $__env->make('backend.dashboard.component.breadcrumb', ['title' => $config['seo'][$config['method']]['title']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('backend.dashboard.component.formError', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
    $url = ($config['method'] == 'create') ? route('product.store') : route('product.update', [$product->id, $queryUrl ?? '']);
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
                        <?php echo $__env->make('backend.dashboard.component.content', ['model' => ($product) ?? null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
               <?php echo $__env->make('backend.dashboard.component.album', ['model' => ($product) ?? null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('backend.product.product.component.variant', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('backend.dashboard.component.seo', ['model' => ($product) ?? null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-lg-3">
                <?php echo $__env->make('backend.product.product.component.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <?php echo $__env->make('backend.dashboard.component.button', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</form>
<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/product/product/store.blade.php ENDPATH**/ ?>