
<?php $__env->startSection('content'); ?>
    <div class="product-catalogue page-wrapper">
        <div class="uk-container uk-container-center mt20">
           
            <div class="panel-body">
                <h2 class="heading-1 mb20"><span><?php echo e($seo['meta_title']); ?></span></h2>
                <?php if(!is_null($products) && count($products)): ?>
                <div class="product-list">
                    <div class="uk-grid uk-grid-medium">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="uk-width-1-2 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-5 mb20">
                            <?php echo $__env->make('frontend.component.product-item', ['product'  => $product], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php else: ?>
                    <div class="pt20 pb20">
                        Không có sản phẩm phù hợp....
                    </div>

                <?php endif; ?>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.homepage.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vmstore\resources\views/frontend/product/catalogue/search.blade.php ENDPATH**/ ?>