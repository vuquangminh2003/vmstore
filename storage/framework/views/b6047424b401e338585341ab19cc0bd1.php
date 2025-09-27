
<?php $__env->startSection('content'); ?>

<div class="post-detail">
    <?php if(!empty($postCatalogue->image)): ?>
    <span class="image img-cover"><img src="<?php echo e(image($postCatalogue->image)); ?>" alt=""></span>
    <?php endif; ?>
    <?php echo $__env->make('frontend.component.breadcrumb', ['model' => $postCatalogue, 'breadcrumb' => $breadcrumb], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="uk-container uk-container-center">
        <div class="uk-grid uk-grid-medium">
            <div class="uk-width-large-3-4">
                <div class="detail-wrapper">
                    <h1 class="post-title"><?php echo e($post->name); ?></h1>
                    <div class="description">
                        <?php echo $post->description; ?>

                    </div>
                    <div class="content">
                        <?php echo $post->content; ?>

                    </div>
                </div>
            </div>
            <div class="uk-width-large-1-4">
                <?php echo $__env->make('frontend.component.post-aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.homepage.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/post/post/index.blade.php ENDPATH**/ ?>