
<?php $__env->startSection('content'); ?>
    <div class="forgotpassword-container">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-medium">
                <div class="uk-width-large-1-3"></div>
                <div class="uk-width-large-1-3">
                    <div class="register-form">
                        <form action="<?php echo e(route($route)); ?>" method="get">
                            <?php echo csrf_field(); ?>
                                <div class="form-heading">Quên mật khẩu</div>
                                <p>Nhập địa chỉ email của bạn và mật khẩu của bạn sẽ được đặt lại và gửi qua email cho bạn.</p>
                                <div class="form-row">
                                    <input 
                                        type="text" 
                                        class="input-text" 
                                        name="email"
                                        value="<?php echo e(old('email')); ?>" 
                                        placeholder="Email"
                                    >
                                    <?php if($errors->has('email')): ?>
                                        <span class="error-message">* <?php echo e($errors->first('email')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <button id ="reset-pass" type="submit" class="btn block full-width m-b">Gửi mật khẩu mới</button>  
                        </form>
                        <p class="m-t mt5">
                            <small><?php echo e($system['homepage_brand']); ?> © 2025</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.homepage.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/auth/components/forgotPassword.blade.php ENDPATH**/ ?>