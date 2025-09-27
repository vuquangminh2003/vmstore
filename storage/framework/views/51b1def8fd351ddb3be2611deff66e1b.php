<?php
    $slideKeyword = App\Enums\SlideEnum::MAIN;
?>
<?php if(count($slides[$slideKeyword]['item'])): ?>
<div class="panel-slide page-setup" data-setting="<?php echo e(json_encode($slides[$slideKeyword]['setting'])); ?>">
    <div class="swiper-container">
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-wrapper">
            <?php $__currentLoopData = $slides[$slideKeyword]['item']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="swiper-slide">
                <div class="slide-item">
                    
                    <span class="image img-cover"><img src="<?php echo e($val['image']); ?>" alt="<?php echo e($val['name']); ?>"></span>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/component/slide.blade.php ENDPATH**/ ?>