<base href="<?php echo e(config('app.url')); ?>" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=0">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<meta name="robots" content="index,follow"/>
<meta name="author" content="<?php echo e($system['homepage_company']); ?>"/>
<meta name="copyright" content="<?php echo e($system['homepage_company']); ?>" />
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<meta http-equiv="refresh" content="1800" />
<link rel="icon" href="<?php echo e($system['homepage_favicon']); ?>" type="image/png" sizes="30x30">
<!-- GOOGLE -->
<title><?php echo e($seo['meta_title']); ?></title>
<meta name="description"  content="<?php echo e($seo['meta_description']); ?>" />
<meta name="keyword"  content="<?php echo e($seo['meta_keyword']); ?>" />
<link rel="canonical" href="<?php echo e($seo['canonical']); ?>" />		
<meta property="og:locale" content="vi_VN" />
<!-- for Facebook -->
<meta property="og:title" content="<?php echo e($seo['meta_title']); ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php echo e($seo['meta_image']); ?>" />
<meta property="og:url" content="<?php echo e($seo['canonical']); ?>" />		
<meta property="og:description" content="<?php echo e($seo['meta_description']); ?>" />
<meta property="og:site_name" content="" />
<meta property="fb:admins" content=""/>
<meta property="fb:app_id" content="" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?php echo e($seo['meta_title']); ?>" />
<meta name="twitter:description" content="<?php echo e($seo['meta_description']); ?>" />
<meta name="twitter:image" content="<?php echo e($seo['meta_image']); ?>" />

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="<?php echo e(asset('frontend/resources/login.css')); ?>">
<!-- <link href="backend/css/bootstrap.min.css" rel="stylesheet"> -->
<?php
    $coreCss = [
        'backend/css/plugins/toastr/toastr.min.css',
        'frontend/resources/fonts/font-awesome-4.7.0/css/font-awesome.min.css',
        'frontend/resources/uikit/css/uikit.modify.css',
        'frontend/resources/library/css/library.css',
        'frontend/resources/plugins/wow/css/libs/animate.css',
        'frontend/core/plugins/jquery-nice-select-1.1.0/css/nice-select.css',
        'frontend/resources/style.css',
    ];
    if(isset($config['css'])){
        foreach($config['css'] as $key => $val){
            array_push($coreCss, $val);
        }
    }
?>
<?php $__currentLoopData = $coreCss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <link rel="stylesheet" href="<?php echo e(asset($item)); ?>">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<script src="<?php echo e(asset('frontend/resources/library/js/jquery.js')); ?>"></script>

<?php /**PATH C:\xampp\htdocs\vmstore\resources\views/frontend/component/head.blade.php ENDPATH**/ ?>