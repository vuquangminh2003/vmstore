<!DOCTYPE html>
<html>

<head>
    <?php echo $__env->make('backend.dashboard.component.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

    <body>
        <div id="wrapper">
            <?php echo $__env->make('backend.dashboard.component.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div id="page-wrapper" class="gray-bg">
                <?php echo $__env->make('backend.dashboard.component.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make($template, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('backend.dashboard.component.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <?php echo $__env->make('backend.dashboard.component.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/dashboard/layout.blade.php ENDPATH**/ ?>