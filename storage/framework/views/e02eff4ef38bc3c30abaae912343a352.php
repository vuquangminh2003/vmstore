<div class="mb10"><div class="text-danger" style="font-size:12px;"><i>*Tổng cuối là tổng chưa bao gồm giảm giá</i></div></div>
<table class="table table-striped table-bordered order-table">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th>Mã</th>
        <th>Ngày tạo</th>
        <th>Khách hàng</th>
        <th class="text-right">Giảm giá (vnđ)</th>
        
        <th class="text-right">Tổng cuối (vnđ)</th>
        <th class="text-center">Trạng thái</th>
        <th>Thanh toán</th>
        <th>Giao hàng</th>
        <th>Hình thức</th>
    </tr>
    </thead>
    <tbody>
        <?php if(isset($orders) && is_object($orders)): ?>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr >
                <td>
                    <input type="checkbox" value="<?php echo e($order->id); ?>" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    <a href="<?php echo e(route('order.detail', $order->id)); ?>"><?php echo e($order->code); ?></a>
                </td>
                <td>
                    <?php echo e(convertDateTime($order->created_at, 'd-m-Y')); ?>

                </td>
                <td>
                    <div><b>N:</b> <?php echo e($order->fullname); ?></div>
                    <div><b>P:</b> <?php echo e($order->phone); ?></div>
                    <div><b>A:</b> <?php echo e($order->address); ?></div>
                </td>
                
                <td class="text-right order-discount">
                    <?php echo e(convert_price($order->promotion['discount'], true)); ?>

                </td>
                
                <td class="text-right order-total">
                    <?php echo e(convert_price($order->cart['cartTotal'], true)); ?>

                </td>
                <td class="text-center">
                    <?php echo ($order->confirm != 'cancle') ? __('cart.confirm')[$order->confirm] : '<span class="cancle-badge">'.__('cart.confirm')[$order->confirm].'</span>'; ?>

                </td>
                <?php $__currentLoopData = __('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyItem => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($keyItem === 'confirm'): ?> <?php continue; ?> <?php endif; ?>
                <td class="text-center">
                    <?php if($order->confirm != 'cancle'): ?>
                    <select name="<?php echo e($keyItem); ?>"  class="setupSelect2 updateBadge" data-field="<?php echo e($keyItem); ?>">
                        <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyOption => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($keyOption === 'none'): ?> <?php continue; ?> <?php endif; ?>
                        <option <?php echo e(($keyOption == $order->{$keyItem}) ? 'selected' : ''); ?> value="<?php echo e($keyOption); ?>"><?php echo e($option); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php else: ?>
                    -
                    <?php endif; ?>
                    <input type="hidden" class="changeOrderStatus" value="<?php echo e($order->{$keyItem}); ?>">
                </td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <td class="text-center">
                    <?php if($order->confirm != 'cancle'): ?>
                        <img title="<?php echo e(array_column(__('payment.method'), 'title', 'name')[$order->method] ?? '-'); ?>" style="max-width:54px;" src="<?php echo e(array_column(__('payment.method'), 'image', 'name')[$order->method] ?? '-'); ?>" alt="">
                    <?php else: ?>
                    -
                    <?php endif; ?>
                    
                    <input type="hidden" class="confirm" value="<?php echo e($order->confirm); ?>">
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php echo e($orders->links('pagination::bootstrap-4')); ?>

<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/order/component/table.blade.php ENDPATH**/ ?>