

<?php $__env->startSection('content'); ?>
    <div id="homepage" class="homepage">
        <div class="panel-main-slide">
            <div class="uk-container uk-container-center">
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-width-large-2-3">
                        <?php echo $__env->make('frontend.component.slide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="uk-width-large-1-3">
                        <?php if(count($slides['banner']['item'])): ?>
                        <div class="banner-wrapper">
                            <div class="uk-grid uk-grid-small">
                                <?php $__currentLoopData = $slides['banner']['item']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="uk-width-small-1-2 uk-width-medium-1-1">
                                        <div class="banner-item">
                                            <a href="<?php echo e($val['canonical']); ?>" title="<?php echo e($val['description']); ?>"><img src="<?php echo e($val['image']); ?>" alt="<?php echo e($val['image']); ?>"></a>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php if(isset($widgets['flash-sale'])): ?>
            <div class="panel-flash-sale" id="#flash-sale">
                <div class="uk-container uk-container-center">
                    <div class="main-heading">
                        <div class="panel-head">
                            <h2 class="heading-1"><span><?php echo e($widgets['flash-sale']->name); ?></span></h2>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="uk-grid uk-grid-medium">
                            <?php $__currentLoopData = $widgets['flash-sale']->object; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="uk-width-1-2 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-5 mb20">
                                    <?php echo $__env->make('frontend.component.product-item', ['product' => $product], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="panel-general page">
            <div class="uk-container uk-container-center">
                <?php if(isset($widgets['product']->object) && count($widgets['product']->object)): ?>
                    <?php $__currentLoopData = $widgets['product']->object; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $catName = $category->languages->first()->pivot->name;
                        $catCanonical = write_url($category->languages->first()->pivot->canonical)
                    ?>
                    <div class="panel-product">
                        <div class="main-heading"> 
                            <div class="panel-head">
                                <div class="uk-flex uk-flex-middle uk-flex-space-between">
                                    <h2 class="heading-1"><a href="<?php echo e($catCanonical); ?>" title="<?php echo e($catName); ?>"><?php echo e($catName); ?></a></h2>
                                    <a href="<?php echo e($catCanonical); ?>" class="readmore">Tất cả sản phẩm</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <?php if(count($category->products)): ?>
                            <div class="uk-grid uk-grid-medium">
                                <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="uk-width-1-2 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-5 mb20">
                                    <?php echo $__env->make('frontend.component.product-item', ['product' => $product], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>

        <?php if(isset($widgets['posts']->object)): ?>
            <?php $__currentLoopData = $widgets['posts']->object; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $catName = $val->languages->first()->pivot->name;
                $catCanonical = write_url($val->languages->first()->pivot->canonical);
            ?>
            <div class="panel-news">
                <div class="uk-container uk-container-center">
                    <div class="panel-head">
                        <h2 class="heading-2"><span><?php echo $catName ?></span></h2>
                    </div>
                    <div class="panel-body">
                        <?php if(count($val->posts)): ?>
                        <div class="uk-grid uk-grid-medium">
                            <?php $__currentLoopData = $val->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $name = $post->languages->first()->pivot->name;
                                $canonical = write_url($post->languages->first()->pivot->canonical);
                                $createdAt = convertDateTime($post->created_at, 'd/m/Y');
                                $description = cutnchar(strip_tags($post->languages->first()->pivot->description), 100);
                                $image = $post->image;
                            ?>
                            <div class="uk-width-1-2 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-5">
                                <div class="news-item">
                                    <a href="<?php echo e($canonical); ?>" class="image img-cover"><img src="<?php echo e($image); ?>" alt="<?php echo e($name); ?>"></a>
                                    <div class="info">
                                        <h3 class="title"><a href="<?php echo e($canonical); ?>" title="<?php echo e($name); ?>"><?php echo e($name); ?></a></h3>
                                        <div class="description"><?php echo $description; ?></div>
                                        <div class="uk-flex uk-flex-middle uk-flex-space-between">
                                            <a href="<?php echo e($canonical); ?>" class="readmore">Xem thêm</a>
                                            <span class="created_at"><?php echo e($createdAt); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.homepage.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/homepage/home/index.blade.php ENDPATH**/ ?>