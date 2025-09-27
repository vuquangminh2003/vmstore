

<?php $__env->startSection('content'); ?>
    <div class="forgotpassword-container">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-medium">
                <div class="uk-width-large-2-5">
                    <div class="register-wrapper">
                    </div>
                </div>
                <div class="uk-width-large-3-5">
                    <div class="register-form">
                        <form action="<?php echo e(route($route, $email)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                                <div class="form-heading">Cập nhật mật khẩu</div>
                                <div class="form-row">
                                    <input 
                                        type="password" 
                                        class="input-text" 
                                        name="password"
                                        placeholder="Mật khẩu"
                                    >
                                </div>
                                <div class="form-row">
                                    <input 
                                        type="password" 
                                        class="input-text" 
                                        name="re_password"
                                        placeholder="Nhập lại mật khẩu"
                                    >
                                </div>
                                <button type="submit" class="btn btn-primary block full-width m-b">Đổi mật khẩu</button>  
                        </form>
                        <p class="m-t mt5">
                            <small><?php echo e($system['homepage_brand']); ?> System 2025</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.homepage.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/auth/components/updatePassword.blade.php ENDPATH**/ ?>