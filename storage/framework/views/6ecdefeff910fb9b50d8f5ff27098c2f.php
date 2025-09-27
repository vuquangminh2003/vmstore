<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>
                <input type="checkbox" value="" id="checkAll" class="input-checkbox">
            </th>
            <th>Thông tin Voucher</th>
            <th>Chiết khấu</th>
            <th>Ngày bắt đầu</th>
            <th>Ngày kết thúc</th>
            <th>Số lượng</th>
            <th class="text-center">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php if(isset($vouchers) && is_object($vouchers)): ?>
            <?php $__currentLoopData = $vouchers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $voucher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $start_date = convertDateTime($voucher->start_date, 'H:i d/m/Y');
                $end_date = convertDateTime($voucher->end_date, 'H:i d/m/Y');
                $status = '';
                if($voucher->end_date != NULL && strtotime($voucher->end_date) - strtotime(now()) <= 0){
                    $status = '<span class="text-danger text-small">- Hết Hạn</span>';
                }
            ?>
            <tr >
                <td>
                    <input type="checkbox" value="<?php echo e($voucher->id); ?>" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    <div><?php echo e($voucher->name); ?> <?php echo $status; ?> </div> 
                    <div class="text-small text-success">Mã : <?php echo e($voucher->code); ?></div> 
                    <div class="text-small text-success">Loại Voucher : <?php echo e(__('module.voucher')[$voucher->method]); ?></div>
                </td>
                <th>
                    <div class="voucher-information">
                        <?php echo renderDiscountVoucher($voucher); ?>

                    </div>
                </th>
                <td>
                    <?php echo e($start_date); ?>

                </td>
                <td>
                    <?php echo e($end_date); ?>

                </td>
                <th>
                    <?php echo e($voucher->total_quantity); ?>

                </th>
                <td class="text-center"> 
                    <a href="<?php echo e(route('voucher.edit', $voucher->id)); ?>" class="btn btn-success <?php echo e($voucher->used_quantity !== 0 ? 'disabled' : ''); ?>"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo e(route('voucher.delete', $voucher->id)); ?>" class="btn btn-danger <?php echo e($voucher->used_quantity !== 0  ? 'disabled' : ''); ?>"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php echo e($vouchers->links('pagination::bootstrap-4')); ?>

<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/voucher/component/table.blade.php ENDPATH**/ ?>