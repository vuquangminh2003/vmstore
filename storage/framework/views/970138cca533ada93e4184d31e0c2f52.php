<div class="panel-body">
    <?php if(count($carts) && !is_null($carts) ): ?>
    <div class="cart-list">
        <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyCart => $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="cart-item">
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-width-small-1-1 uk-width-medium-1-5">
                        <div class="cart-item-image">
                            <span class="image img-scaledown"><img src="<?php echo e($cart->image); ?>" alt=""></span>
                            <span class="cart-item-number"><?php echo e($cart->qty); ?></span>
                        </div>
                    </div>
                    <div class="uk-width-small-1-1 uk-width-medium-4-5">
                        <div class="cart-item-info">
                            <h3 class="title"><span><?php echo e($cart->name); ?></span></h3>
                            <div class="cart-item-action uk-flex uk-flex-middle uk-flex-space-between">
                                <div class="cart-item-qty">
                                    <button type="button" class="btn-qty minus">-</button>
                                    <input 
                                        type="text" 
                                        class="input-qty" 
                                        value="<?php echo e($cart->qty); ?>"
                                    >
                                    <input type="hidden" class="rowId" value="<?php echo e($cart->rowId); ?>">
                                    <button type="button" class="btn-qty plus">+</button>
                                </div>
                                <div class="cart-item-price">
                                    <div class="uk-flex uk-flex-bottom">
                                        
                                        <span class="cart-price-sale"><?php echo e(convert_price($cart->price * $cart->qty, true)); ?>đ</span>
                                    </div>
                                </div>
                                <div class="cart-item-remove" data-row-id="<?php echo e($cart->rowId); ?>">
                                    <span>✕</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
</div><?php /**PATH C:\xampp\htdocs\vmstore\resources\views/frontend/cart/component/item.blade.php ENDPATH**/ ?>