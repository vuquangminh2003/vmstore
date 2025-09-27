<div class="wrapper wrapper-content">
    <?php echo $__env->make('backend.dashboard.component.statistic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('backend.dashboard.component.chart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('backend.dashboard.component.order', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/dashboard/home/index.blade.php ENDPATH**/ ?>