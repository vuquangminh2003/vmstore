
<?php $__env->startSection('content'); ?>
    <div class="profile-container pt20 pb20">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-medium">
                <div class="uk-width-large-1-4">
                    <?php echo $__env->make('frontend.auth.customer.components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="uk-width-large-2-4">
                    <div class="panel-profile">
                        <div class="panel-head">
                            <h2 class="heading-2"><span>Hồ sơ của tôi</span></h2>
                            
                        </div>
                        <div class="panel-body">
                            <?php echo $__env->make('backend/dashboard/component/formError', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <form action="<?php echo e(route('customer.profile.update')); ?>" method="post" class="uk-form uk-form-horizontal login-form profile-form">
                                <?php echo csrf_field(); ?>
                                <div class="uk-form-row form-row">
                                    <label class="uk-form-label" for="form-h-it">Tài khoản đăng nhập</label>
                                    <div class="uk-form-controls">
                                        <?php echo e($customer->email); ?>

                                    </div>
                                </div>
                                
                                <div class="uk-form-row form-row">
                                    <label class="uk-form-label" for="form-h-it">Họ Tên</label>
                                    <div class="uk-form-controls">
                                        <input 
                                            type="text" 
                                            class="input-text"
                                            placeholder="Họ Tên"
                                            name="name"
                                            value="<?php echo e(old('name', $customer->name)); ?>"
                                        >
                                    </div>
                                </div>
                                <div class="uk-form-row form-row">
                                    <label class="uk-form-label" for="form-h-it">Email</label>
                                    <div class="uk-form-controls">
                                        <input 
                                            type="email" 
                                            class="input-text"
                                            placeholder="Email"
                                            name="email"
                                            value="<?php echo e(old('email', $customer->email)); ?>"
                                        >
                                    </div>
                                </div>
                                <div class="uk-form-row form-row">
                                    <label class="uk-form-label" for="form-h-it">Số điện thoại</label>
                                    <div class="uk-form-controls">
                                        <input 
                                            type="tel" 
                                            class="input-text"
                                            placeholder="Số điện thoại"
                                            pattern="^0[0-9]{9}$" 
                                            title="Số điện thoại phải bắt đầu bằng số 0 và đủ 10 chữ số"
                                            name="phone"
                                            value="<?php echo e(old('phone', $customer->phone)); ?>"
                                        >
                                    </div>
                                </div>
                                <div class="uk-form-row form-row">
                                    <label class="uk-form-label" for="form-h-it">Địa chỉ</label>
                                    <div class="uk-form-controls">
                                        <input 
                                            type="text" 
                                            class="input-text"
                                            placeholder="Địa chỉ"
                                            name="address"
                                            value="<?php echo e(old('address', $customer->address)); ?>"
                                        >
                                    </div>
                                </div>
                                <button type="submit" name="send" value="create">Lưu thông tin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('frontend.homepage.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/auth/customer/profile.blade.php ENDPATH**/ ?>