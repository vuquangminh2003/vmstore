<?php $__env->startSection('content'); ?>
    <div id="buyer-signup"> 
        <div class="page-breadcrumb background">      
            <div class="uk-container uk-container-center">
                <ul class="uk-list uk-clearfix uk-flex uk-flex-middle">
                    <li>
                        <a href="/"><i class="fi-rs-home mr5"></i>Trang chủ</a>
                        <span><i class="fi-rs-angle-right"></i></span>
                    </li>
                    <li><a href="<?php echo e(route('buyer.profile')); ?>" title="">Thông tin tài khoản</a></li>
                </ul>
            </div>
        </div>
        <div class="profile-container buyer-page">
            <div class="uk-container uk-container-center">
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-width-large-1-4">
                        <?php echo $__env->make('buyer.buyer.component.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="uk-width-large-3-4">
                        <div class="profile-content buyer-wrapper">
                            <div class="panel-head">
                                <div class="heading-2"><span>Hồ sơ của tôi</span></div>
                                <div class="description">Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
                            </div>
                            <div class="panel-body">
                                <?php echo $__env->make('backend.dashboard.component.formError', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <form action="<?php echo e(route('buyer.profile.update')); ?>" method="post" class="uk-form form">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-row">
                                        <span class="label-name">Họ Tên:</span>
                                        <span class="label-value">
                                            <input 
                                                type="text"
                                                name="name"
                                                value="<?php echo e($customerAuth->name); ?>"
                                                class="input-text"
                                            >
                                        </span>
                                    </div>
                                    <div class="form-row">
                                        <span class="label-name">Số điện thoại:</span>
                                        <span class="label-value">
                                            <input 
                                                type="text"
                                                name="phone"
                                                value="<?php echo e($customerAuth->phone); ?>"
                                                placeholder=" <?php echo e($customerAuth->phone ?? 'Chưa cập nhật'); ?>"
                                                class="input-text"
                                            >
                                        </span>
                                    </div>
                                    <div class="form-row">
                                        <span class="label-name">Email:</span>
                                        <span class="label-value"><?php echo e($customerAuth->email); ?></span>
                                    </div>

                                    
                                    <div class="form-row">
                                        <span class="label-name">Quận/Huyện:</span>
                                        <span class="label-value">
                                            <select name="district_id" class="input-text district">
                                                <option value="0">[Chọn Quận/Huyện]</option>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="form-row">
                                        <span class="label-name">Chọn Phường Xã:</span>
                                        <span class="label-value">
                                            <select name="ward_id" class="input-text ward">
                                                <option value="0">[Chọn Phường/Xã]</option>
                                            </select>
                                        </span>
                                    </div>

                                    <div class="form-row">
                                        <span class="label-name">Địa chỉ:</span>
                                        <span class="label-value">
                                            <input 
                                                type="text"
                                                name="address"
                                                value="<?php echo e($customerAuth->address); ?>"
                                                placeholder=" <?php echo e($customerAuth->address ?? 'Chưa cập nhật'); ?>"
                                                class="input-text"
                                            >
                                        </span>
                                    </div>

                                    <div class="form-row">
                                        <span class="label-name">Tài khoản ViettelPost:</span>
                                        <span class="label-value">
                                            <input 
                                                type="text"
                                                name="viettelpost_email"
                                                value="<?php echo e($customerAuth->viettelpost_email); ?>"
                                                placeholder=" <?php echo e($customerAuth->viettelpost_email ?? 'Chưa cập nhật'); ?>"
                                                class="input-text"
                                            >
                                        </span>
                                    </div>

                                    <div class="form-row">
                                        <span class="label-name">Mật khẩu ViettelPost:</span>
                                        <span class="label-value">
                                            <input 
                                                type="text"
                                                name="viettelpost_password"
                                                value="<?php echo e($customerAuth->viettelpost_password); ?>"
                                                placeholder=" <?php echo e($customerAuth->viettelpost_password ?? 'Chưa cập nhật'); ?>"
                                                class="input-text"
                                            >
                                        </span>
                                    </div>
                                   
                                    <button type="submit" href="" class="button-shop change-info">Thay đổi thông tin</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var province_id = '<?php echo e((isset($customerAuth->province_id)) ? $customerAuth->province_id : old('province_id')); ?>'
        var district_id = '<?php echo e((isset($customerAuth->district_id)) ? $customerAuth->district_id : old('district_id')); ?>'
        var ward_id = '<?php echo e((isset($customerAuth->ward_id)) ? $customerAuth->ward_id : old('ward_id')); ?>'
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.homepage.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/buyer/buyer/profile.blade.php ENDPATH**/ ?>