
<?php $__env->startSection('content'); ?>
    <div class="login-container">
        <div class="uk-container uk-container-center">
            <div class="login-page">
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-width-large-2-3">
                        <div class="login-wrapper">
                            
                        </div>
                    </div>
                    <div class="uk-width-large-1-2">
                        <div class="login-form">
                            <form action="<?php echo e(route('fe.auth.dologin')); ?>" class="uk-form form">
                                <?php echo csrf_field(); ?>
                                <div class="form-heading">Đăng nhập</div>
                                <div class="form-row">
                                    <input 
                                        type="text"
                                        name="email"
                                        value=""
                                        placeholder="Email đăng nhập"
                                        class="input-text"
                                    >
                                </div>
                                <div class="form-row">
                                    <input 
                                        type="password"
                                        name="password"
                                        value=""
                                        placeholder="Mật khẩu"
                                        class="input-text"
                                    >
                                </div>
                                <button id="login-btn" type="submit" value="login" name="login">Đăng nhập</button>
                                <div class="form-row forgot-password">
                                    <div class="uk-flex uk-flex-middle">
                                        <a href="<?php echo e(route('forgot.customer.password')); ?>">Quên mật khẩu</a>
                                    </div>
                                </div>
                                <div class="register-box uk-text-center">
                                    Bạn mới biết đến <?php echo e($system['homepage_brand']); ?>? <a href="<?php echo e(route('customer.register')); ?>" class="s">Đăng ký</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('frontend.homepage.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/auth/index.blade.php ENDPATH**/ ?>