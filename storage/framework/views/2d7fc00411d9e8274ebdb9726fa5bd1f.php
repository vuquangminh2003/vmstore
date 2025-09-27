<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th>Tên Nhóm Thành Viên</th>
        <th class="text-center">Số thành viên</th>
        <th>Mô tả</th>
        <th class="text-center">Tình Trạng</th>
        <th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>
        <?php if(isset($userCatalogues) && is_object($userCatalogues)): ?>
            <?php $__currentLoopData = $userCatalogues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userCatalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr >
                <td>
                    <input type="checkbox" value="<?php echo e($userCatalogue->id); ?>" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    <?php echo e($userCatalogue->name); ?>

                </td>
                <td class="text-center">
                    <?php echo e($userCatalogue->users_count); ?> người
                </td>
                <td>
                    <?php echo e($userCatalogue->description); ?>

                </td>
                <td class="text-center js-switch-<?php echo e($userCatalogue->id); ?>"> 
                    <input type="checkbox" value="<?php echo e($userCatalogue->publish); ?>" class="js-switch status " data-field="publish" data-model="<?php echo e($config['model']); ?>" <?php echo e(($userCatalogue->publish == 2) ? 'checked' : ''); ?> data-modelId="<?php echo e($userCatalogue->id); ?>" />
                </td>
                <td class="text-center"> 
                    <a href="<?php echo e(route('user.catalogue.edit', $userCatalogue->id)); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo e(route('user.catalogue.delete', $userCatalogue->id)); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php echo e($userCatalogues->links('pagination::bootstrap-4')); ?>

<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/user/catalogue/component/table.blade.php ENDPATH**/ ?>