
<?php echo $__env->make('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['index']['title']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="row mt20">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo e($config['seo']['index']['table']); ?> </h5>
                <?php echo $__env->make('backend.dashboard.component.toolbox', ['model' => $config['model']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="ibox-content">
                <?php echo $__env->make('backend.promotion.promotion.component.filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('backend.promotion.promotion.component.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/promotion/promotion/index.blade.php ENDPATH**/ ?>