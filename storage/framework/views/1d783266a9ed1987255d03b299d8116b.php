<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th>Tiêu đề</th>
        <th>Canonical</th>
        <th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>
        <?php if(isset($permissions) && is_object($permissions)): ?>
            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr >
                <td>
                    <input type="checkbox" value="<?php echo e($permission->id); ?>" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    <?php echo e($permission->name); ?>

                </td>
                <td>
                    <?php echo e($permission->canonical); ?>

                </td>
                <td class="text-center"> 
                    <a href="<?php echo e(route('permission.edit', $permission->id)); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo e(route('permission.delete', $permission->id)); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php echo e($permissions->links('pagination::bootstrap-4')); ?>

<?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/permission/component/table.blade.php ENDPATH**/ ?>