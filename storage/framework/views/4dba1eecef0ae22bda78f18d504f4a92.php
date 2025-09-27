<?php if(!is_null($asidePost)): ?>
<aside class="aside">
    <div class="aside-news">
        <div class="aside-heading">Tin tức mới nhất</div>
        <div class="aside-body">
            <?php $__currentLoopData = $asidePost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $name = $post->languages->first()->pivot->name;
                $description = $post->languages->first()->pivot->description;
                $canonical = write_url($post->languages->first()->pivot->canonical);
                $image = image($post->image);
                if($key > 10) break;
            ?>
            <div class="aside-post-item uk-clearfix">
                <a href="<?php echo e($canonical); ?>" class="image img-cover"><img src="<?php echo e($image); ?>" alt="<?php echo e($name); ?>"></a>
                <div class="info">
                    <h3 class="title"><a href="<?php echo e($canonical); ?>" title="<?php echo e($name); ?>"><?php echo e($name); ?></a></h3>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</aside>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\vmstore\resources\views/frontend/component/post-aside.blade.php ENDPATH**/ ?>