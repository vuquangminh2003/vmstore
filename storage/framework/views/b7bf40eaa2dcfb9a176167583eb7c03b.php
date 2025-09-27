<div class="panel-foot">
    <h2 class="cart-heading"><span>Phương thức thanh toán</span></h2>
    <div class="cart-method mb30">
        <?php $__currentLoopData = __('payment.method'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <label for="<?php echo e($val['name']); ?>" class="uk-flex uk-flex-middle method-item">
            <input 
                type="radio"
                name="method"
                value="<?php echo e($val['name']); ?>"
                <?php if(old('method', '') == $val['name'] || (!old('method') && $key == 0)): ?> checked <?php endif; ?>
                id="<?php echo e($val['name']); ?>"
            >
            <span class="image"><img src="<?php echo e($val['image']); ?>" alt=""></span>
            <span class="title"><?php echo e($val['title']); ?></span>
        </label>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="cart-return mb10">
        <span><?php echo __('payment.return'); ?></span>
    </div>
    
</div><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/cart/component/method.blade.php ENDPATH**/ ?>