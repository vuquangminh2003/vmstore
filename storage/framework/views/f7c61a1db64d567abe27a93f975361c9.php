<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th>Họ Tên</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th class="text-center">Nhóm khách hàng</th>
        <th class="text-center">Nguồn</th>
        <th class="text-center">Tình Trạng</th>
        <th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>
        <?php if(isset($customers) && is_object($customers)): ?>
            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr >
                <td>
                    <input type="checkbox" value="<?php echo e($customer->id); ?>" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    <?php echo e($customer->name); ?>

                </td>
                <td>
                    <?php echo e($customer->email); ?>

                </td>
                <td>
                    <?php echo e($customer->phone); ?>

                </td>
                <td>
                    <?php echo e($customer->address); ?>

                </td>
                <td class="text-center">
                    <?php echo e($customer->customer_catalogues->name); ?>

                </td>
                <td class="text-center">
                    <?php echo e($customer->sources->name); ?>

                </td>
                <td class="text-center js-switch-<?php echo e($customer->id); ?>"> 
                    <input type="checkbox" value="<?php echo e($customer->publish); ?>" class="js-switch status " data-field="publish" data-model="<?php echo e($config['model']); ?>" <?php echo e(($customer->publish == 2) ? 'checked' : ''); ?> data-modelId="<?php echo e($customer->id); ?>" />
                </td>
                <td class="text-center"> 
                    <a href="<?php echo e(route('customer.edit', $customer->id)); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo e(route('customer.delete', $customer->id)); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php echo e($customers->links('pagination::bootstrap-4')); ?>

<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/customer/customer/component/table.blade.php ENDPATH**/ ?>