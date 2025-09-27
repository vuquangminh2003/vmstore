<div class="ibox">
    <div class="ibox-title">
        <h5>Danh sách đơn hàng mới</h5>
    </div>
    <div class="ibox-content">
        <div class="mb10"><div class="text-danger" style="font-size:12px;"><i>*Tổng cuối là tổng chưa bao gồm giảm giá</i></div></div>
        <table class="table table-striped table-bordered order-table">
            <thead>
            <tr>
                <th class="text-right">Mã</th>
                <th class="text-right">Ngày tạo</th>
                <th class="text-right">Khách hàng</th>
                <th class="text-right">Giảm giá (vnđ)</th>
                <th class="text-right">Tổng cuối (vnđ)</th>
            </tr>
            </thead>
            <tbody>
                <?php if(isset($newOrders) && is_object($newOrders)): ?>
                    <?php $__currentLoopData = $newOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-right">
                            <a href="<?php echo e(route('order.detail', $order->id)); ?>"><?php echo e($order->code); ?></a>
                        </td>
                        <td class="text-right">
                            <?php echo e(convertDateTime($order->created_at, 'd-m-Y')); ?>

                        </td>
                        <td class="text-right">
                            <?php echo e($order->fullname); ?>

                        </td>
                        <td class="text-right order-discount">
                            <?php echo e(convert_price($order->promotion['discount'], true)); ?>

                        </td>
                        <td class="text-right order-total">
                            <?php echo e(convert_price($order->cart['cartTotal'], true)); ?>

                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/dashboard/component/order.blade.php ENDPATH**/ ?>