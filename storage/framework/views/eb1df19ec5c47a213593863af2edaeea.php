<base href="<?php echo e(config('app.url')); ?>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<title>Trang quản lý</title>
<link href="backend/css/bootstrap.min.css" rel="stylesheet">
<link href="backend/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="backend/css/animate.css" rel="stylesheet">
<link href="backend/plugins/jquery-ui.css" rel="stylesheet">
<?php if(isset($config['css']) && is_array($config['css'])): ?>
    <?php $__currentLoopData = $config['css']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo '<link rel="stylesheet" href="'.$val.'"></script>'; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<link href="backend/css/plugins/toastr/toastr.min.css" rel="stylesheet">
<link href="backend/css/style.css" rel="stylesheet">
<link href="backend/css/customize.css" rel="stylesheet">
<script src="backend/js/jquery-3.1.1.min.js"></script>
<script>
    var BASE_URL = '<?php echo e(config('app.url')); ?>'
    var SUFFIX = '<?php echo e(config('apps.general.suffix')); ?>'
</script><?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/dashboard/component/head.blade.php ENDPATH**/ ?>