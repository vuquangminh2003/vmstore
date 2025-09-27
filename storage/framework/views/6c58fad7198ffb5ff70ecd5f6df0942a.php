<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th>Tên Nhóm khách hàng</th>
        <th class="text-center">Số khách hàng</th>
        <th>Mô tả</th>
        <th class="text-center">Tình Trạng</th>
        <th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>
        <?php if(isset($customerCatalogues) && is_object($customerCatalogues)): ?>
            <?php $__currentLoopData = $customerCatalogues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customerCatalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr >
                <td>
                    <input type="checkbox" value="<?php echo e($customerCatalogue->id); ?>" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    <?php echo e($customerCatalogue->name); ?>

                </td>
                <td class="text-center">
                    <?php echo e($customerCatalogue->customers_count); ?> người
                </td>
                <td>
                    <?php echo e($customerCatalogue->description); ?>

                </td>
                <td class="text-center js-switch-<?php echo e($customerCatalogue->id); ?>"> 
                    <input type="checkbox" value="<?php echo e($customerCatalogue->publish); ?>" class="js-switch status " data-field="publish" data-model="<?php echo e($config['model']); ?>" <?php echo e(($customerCatalogue->publish == 2) ? 'checked' : ''); ?> data-modelId="<?php echo e($customerCatalogue->id); ?>" />
                </td>
                <td class="text-center"> 
                    <a href="<?php echo e(route('customer.catalogue.edit', $customerCatalogue->id)); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo e(route('customer.catalogue.delete', $customerCatalogue->id)); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php echo e($customerCatalogues->links('pagination::bootstrap-4')); ?>

<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/customer/catalogue/component/table.blade.php ENDPATH**/ ?>