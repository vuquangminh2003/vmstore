
<?php $__env->startSection('content'); ?>
    <div class="register-container">
        <div class="uk-container uk-container-center">
            <div class="register-page">
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-width-large-2-3">
                        <div class="register-wrapper">
                        </div>
                    </div>
                    <div class="uk-width-large-1-2">
                        <div class="register-form">
                            <form action="<?php echo e(route('customer.reg')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                    <div class="form-heading">Đăng ký</div>
                                    <div class="form-row">
                                        <input 
                                            type="text" 
                                            class="input-text" 
                                            name="name"
                                            value="<?php echo e(old('name')); ?>"  
                                            placeholder="Họ tên"
                                        >
                                        <?php if($errors->has('name')): ?>
                                            <span class="error-message">* <?php echo e($errors->first('name')); ?></span>
                                        <?php endif; ?>
                                    </div>
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
                                    <div class="form-row">
                                        <input 
                                            type="password" 
                                            name="password" 
                                            class="input-text" 
                                            placeholder="Mật khẩu"
                                            autocomplete="off"
                                        >
                                        <?php if($errors->has('password')): ?>
                                            <span class="error-message">* <?php echo e($errors->first('password')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-row">
                                        <input 
                                            type="password" 
                                            class="input-text" 
                                            name="re_password"
                                            placeholder="Nhập lại mật khẩu"
                                            autocomplete="off"
                                        >
                                        <?php if($errors->has('re_password')): ?>
                                            <span class="error-message">* <?php echo e($errors->first('re_password')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-row">
                                        <input 
                                            type="text" 
                                            class="input-text" 
                                            name="phone"
                                            value="<?php echo e(old('phone')); ?>" 
                                            placeholder="Số điện thoại"
                                        >
                                    </div>
                                    <div class="form-row">
                                        <input 
                                            type="text" 
                                            class="input-text" 
                                            name="address"
                                            value="<?php echo e(old('address')); ?>" 
                                            placeholder="Địa chỉ"
                                        >
                                        <input type="hidden" name="customer_catalogue_id" value="1">
                                    </div>
                                    <button type="submit" class="btn btn-primary block full-width m-b">Đăng ký</button>  
                            </form>
                             
                            
                            
                            
                            <div class="form-row uk-text-center" style="margin-top: 10px;">
                                <a style="color: #d32f2f" href="<?php echo e(route('fe.auth.login')); ?>">Đăng nhập nếu có tài khoản</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.homepage.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/auth/customer/register.blade.php ENDPATH**/ ?>