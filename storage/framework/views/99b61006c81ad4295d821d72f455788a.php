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
        <th class="text-center">Nhóm thành viên</th>
        <th class="text-center">Tình Trạng</th>
        <th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>
        <?php if(isset($users) && is_object($users)): ?>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr >
                <td>
                    <input type="checkbox" value="<?php echo e($user->id); ?>" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    <?php echo e($user->name); ?>

                </td>
                <td>
                    <?php echo e($user->email); ?>

                </td>
                <td>
                    <?php echo e($user->phone); ?>

                </td>
                <td>
                    <?php echo e($user->address); ?>

                </td>
                <td class="text-center">
                    <?php echo e($user->user_catalogues->name); ?>

                </td>
                <td class="text-center js-switch-<?php echo e($user->id); ?>"> 
                    <input type="checkbox" value="<?php echo e($user->publish); ?>" class="js-switch status " data-field="publish" data-model="<?php echo e($config['model']); ?>" <?php echo e(($user->publish == 2) ? 'checked' : ''); ?> data-modelId="<?php echo e($user->id); ?>" />
                </td>
                <td class="text-center"> 
                    <a href="<?php echo e(route('user.edit', $user->id)); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo e(route('user.delete', $user->id)); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php echo e($users->links('pagination::bootstrap-4')); ?>

<?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/user/user/component/table.blade.php ENDPATH**/ ?>