<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        

        <link href="<?php echo e(asset('backend/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('backend/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet">

        <link href="<?php echo e(asset('backend/css/animate.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('backend/css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('backend/css/customize.css')); ?>" rel="stylesheet">

    </head>

    <body class="gray-bg">

        <div class="loginColumns animated fadeInDown">
            <div class="row">

                <div class="col-md-6">
                    <h2 class="font-bold">Chào mừng đến với hệ thống quản lý VpHome!</h2>
                
                    <p>
                        Đây là nơi bạn có thể dễ dàng theo dõi và quản lý các sản phẩm, đơn hàng, cũng như thông tin khách hàng một cách nhanh chóng.
                    </p>
                
                    <p>
                        Giao diện thân thiện, trực quan giúp bạn làm việc hiệu quả mà không mất nhiều thời gian làm quen.
                    </p>
                
                    <p>
                        Mọi thao tác từ cập nhật sản phẩm, kiểm soát kho hàng đến xử lý đơn hàng đều được thực hiện chỉ với vài cú nhấp chuột.
                    </p>
                
                    <p>
                        <small>Hãy cùng VpHome đơn giản hóa quy trình quản lý và nâng cao hiệu suất làm việc!</small>
                    </p>
                </div>
                
                <div class="col-md-6">
                    <div class="ibox-content">
                      
                        <form method="post" class="m-t" role="form" action="<?php echo e(route('auth.login')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <input 
                                    type="text" 
                                    name="email"
                                    class="form-control" 
                                    placeholder="Email" 
                                    value="<?php echo e(old('email')); ?>"
                                >
                                <?php if($errors->has('email')): ?>
                                    <span class="error-message">* <?php echo e($errors->first('email')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <input 
                                    type="password" 
                                    name="password"
                                    class="form-control" 
                                    placeholder="Password" 
                                >
                                <?php if($errors->has('password')): ?>
                                    <span class="error-message">* <?php echo e($errors->first('password')); ?></span>
                                <?php endif; ?>
                            </div>
                            <button type="submit" class="btn btn-success block full-width m-b">Đăng nhập</button>

                            
                        </form>
                        
                    </div>
                </div>
            </div>
            <hr/>
            
        </div>

    </body>

</html>
<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/auth/login.blade.php ENDPATH**/ ?>