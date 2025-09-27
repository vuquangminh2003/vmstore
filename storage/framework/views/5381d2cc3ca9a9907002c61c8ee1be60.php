<?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(session('app_locale') === $language->canonical): ?> 
        <?php continue; ?>
    <?php endif; ?>
<td class="text-center">

    <?php
        $translated = $model->languages->contains('id', $language->id);
    ?>
    <a 
        class="<?php echo e(($translated) ? '' : 'text-danger'); ?>"
        href="<?php echo e(route('language.translate', ['id' => $model->id, 'languageId' => $language->id, 'model' => $modeling])); ?>"><?php echo e(($translated) ? 'Đã dịch'  : 'Chưa dịch'); ?></a>
</td>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/dashboard/component/languageTd.blade.php ENDPATH**/ ?>