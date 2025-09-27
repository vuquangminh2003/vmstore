<form action="<?php echo e(route('product.catalogue.index')); ?>">
    <div class="filter-wrapper">
        <div class="uk-flex uk-flex-middle uk-flex-space-between">
            <?php echo $__env->make('backend.dashboard.component.perpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="action">
                <div class="uk-flex uk-flex-middle">
                    
                    <?php echo $__env->make('backend.dashboard.component.keyword', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <a href="<?php echo e(route('product.catalogue.create')); ?>" class="btn btn-danger"><i class="fa fa-plus mr5"></i><?php echo e(__('messages.productCatalogue.create.title')); ?></a>
                </div>
            </div>
        </div>
    </div>
</form>

<?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/product/catalogue/component/filter.blade.php ENDPATH**/ ?>