
<?php if(isset($customerAuth)): ?>
    <div class="header-top__widget wow fadeInUp" data-wow-delay="0.2s">
        <div class="uk-flex uk-flex-middle">
            <i class="fi-rs-user"></i>
            <a href="<?php echo e(route('buyer.profile')); ?>" title="" class="widget-link">Xin chào: <?php echo e($customerAuth->name); ?></a>
        </div>
    </div>
<?php else: ?>
    <div class="header-top__widget wow fadeInUp" data-wow-delay="0.2s">
        <div class="uk-flex uk-flex-middle">
            <i class="fi-rs-user"></i>
            <a href="<?php echo e(route('buyer.login')); ?>" title="" class="widget-link">Đăng nhập</a>
            <span>hoặc</span>
            <a href="<?php echo e(route('buyer.signup')); ?>" title="" class="widget-link">Tạo tài khoản</a>
        </div>
    </div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/component/auth.blade.php ENDPATH**/ ?>