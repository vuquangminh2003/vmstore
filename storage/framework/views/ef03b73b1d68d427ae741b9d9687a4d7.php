<?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if(session('app_locale') === $language->canonical): ?> 
    <?php continue; ?>
<?php endif; ?>
<th class="text-center"><span class="image img-scaledown laguange-flag"><img src="<?php echo e(image($language->image)); ?>" alt=""></span></th>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/dashboard/component/languageTh.blade.php ENDPATH**/ ?>