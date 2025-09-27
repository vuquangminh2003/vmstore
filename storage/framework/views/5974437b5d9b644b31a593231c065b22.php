
<?php $__env->startSection('content'); ?>
    <div class="product-catalogue page-wrapper">
        <?php echo $__env->make('frontend.component.breadcrumb', ['model' => $productCatalogue, 'breadcrumb' => $breadcrumb], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="uk-container uk-container-center mt20">
           
            <div class="panel-body">
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-width-large-1-4 uk-hidden-small">
                        <div class="aside">
                            <?php if(isset($categories['categories'])): ?>
                            <div class="aside-category">
                                <div class="aside-heading">Danh mục sản phẩm</div>
                                <div class="aside-body">
                                    <ul class="uk-list uk-clearfix">
                                        <?php $__currentLoopData = $categories['categories']->object; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $name = $category->languages->first()->pivot->name;
                                            $canonical = write_url($category->languages->first()->pivot->canonical);
                                        ?>
                                        <li><a href="<?php echo e($canonical); ?>" title="<?php echo e($name); ?>"><?php echo e($name); ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                            <?php endif; ?>

                            <div class="aside-category aside-product mt20">
                                <div class="aside-heading">Sản phẩm nổi bật</div>
                                <div class="aside-body">
                                    <?php $__currentLoopData = $widgets['products-hl']->object; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $name = $product->languages->first()->pivot->name;
                                        $canonical = write_url($product->languages->first()->pivot->canonical);
                                        $image  = $product->image;
                                        $price = getPrice($product);
                                    ?>
                                    <div class="aside-product uk-clearfix">
                                        <a href="" class="image img-cover"><img src="<?php echo e($image); ?>" alt="<?php echo e($name); ?>"></a>
                                        <div class="info">
                                            <h3 class="title"><a href="<?php echo e($canonical); ?>" title="<?php echo e($name); ?>"><?php echo e($name); ?></a></h3>
                                            <?php echo $price['html']; ?>

                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="uk-width-large-3-4">
                        <div class="wrapper ">
                            <div class="uk-flex uk-flex-middle uk-flex-space-between mb20">
                                <h1 class="heading-2"><span><?php echo e($productCatalogue->languages->first()->pivot->name); ?></span></h1>
                                <?php echo $__env->make('frontend.product.catalogue.component.filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <?php echo $__env->make('frontend.product.catalogue.component.filterContent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php if(!is_null($products)): ?>
                                <div class="product-list">
                                    <div class="uk-grid uk-grid-medium">
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="uk-width-1-2 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-4 mb20">
                                                <?php echo $__env->make('frontend.component.product-item', ['product'  => $product], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>

                                <div class="uk-flex uk-flex-center">
                                    <?php echo $__env->make('frontend.component.pagination', ['model' => $products], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endif; ?>
                            <?php if(!empty($productCatalogue->languages->first()->pivot->description)): ?>
                                <div class="product-catalogue-description">
                                    <?php echo $productCatalogue->languages->first()->pivot->description; ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.homepage.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vmstore\resources\views/frontend/product/catalogue/index.blade.php ENDPATH**/ ?>