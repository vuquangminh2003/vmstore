<?php if(is_array($product['promotion_gifts']) && count($product['promotion_gifts'])): ?>
    <div class="product-promotion-take-gift">
        <div class="bg">
            <i class="fa fa-gift"></i> Khuyến mại
        </div>
        <div class="content">
            <ul>
                <?php $__currentLoopData = $product['promotion_gifts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $product_count = count($item['products']);
                        $product_gift_count = count($item['products']);
                        $type = $item['discount_information']['info']['model'];
                    ?>
                    <li>
                        <div class="tooltip">
                            <input type="radio" name="type_promotion" value="<?php echo e($type); ?>" id="<?php echo e($k); ?>">
                            <i class="fa fa-gift"></i><label for="<?php echo e($k); ?>"><?php echo e($item['name']); ?></label>
                            <p class="tooltiptext">
                                Mua <?php echo e($product_count); ?> SP
                                <?php $__currentLoopData = $item['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(write_url($product['canonical'])); ?>"><?php echo e($product['name']); ?></a> (x<?php echo e($product['quantity']); ?>)
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                tặng <?php echo e($product_gift_count); ?> SP 
                                <?php $__currentLoopData = $item['product_gifts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(write_url($gift['canonical'])); ?>"><?php echo e($gift['name']); ?></a> (x<?php echo e($gift['quantity']); ?>)
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </p>
                        </div>
                    </li> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/product/product/component/gift.blade.php ENDPATH**/ ?>