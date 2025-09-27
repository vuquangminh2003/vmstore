<?php echo $__env->make('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['delete']['title']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('backend.dashboard.component.formError', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<form action="<?php echo e(route('product.catalogue.destroy', $productCatalogue->id)); ?>" method="post" class="box">
    <?php echo $__env->make('backend.dashboard.component.destroy', ['model' => ($productCatalogue) ?? null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</form>
<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/product/catalogue/delete.blade.php ENDPATH**/ ?>