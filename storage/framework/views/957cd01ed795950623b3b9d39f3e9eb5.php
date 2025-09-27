
<?php $__env->startSection('content'); ?>

<div class="product-container">
    <?php echo $__env->make('frontend.component.breadcrumb', ['model' => $productCatalogue, 'breadcrumb' => $breadcrumb], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="uk-container uk-container-center mt30">
        <div class="panel-body">
            <?php echo $__env->make('frontend.product.product.component.detail', ['product' => $product, 'productCatalogue' => $productCatalogue], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<div id="qrcode" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <div class="qrcode-container">
            <?php echo $product->qrcode; ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.homepage.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vmstore\resources\views/frontend/product/product/index.blade.php ENDPATH**/ ?>