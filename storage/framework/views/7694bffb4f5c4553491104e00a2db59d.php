<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th>Tên Menu</th>
        <th>Từ khóa</th>
        <th class="text-center">Tình Trạng</th>
        <th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>
        <?php if(isset($menuCatalogues) && is_object($menuCatalogues)): ?>
            <?php $__currentLoopData = $menuCatalogues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuCatalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr >
                <td>
                    <input type="checkbox" value="<?php echo e($menuCatalogue->id); ?>" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    <?php echo e($menuCatalogue->name); ?>

                </td>
                <td>
                    <?php echo e($menuCatalogue->keyword); ?>

                </td>
               
                <td class="text-center js-switch-<?php echo e($menuCatalogue->id); ?>"> 
                    <input type="checkbox" value="<?php echo e($menuCatalogue->publish); ?>" class="js-switch status " data-field="publish" data-model="<?php echo e($config['model']); ?>" <?php echo e(($menuCatalogue->publish == 2) ? 'checked' : ''); ?> data-modelId="<?php echo e($menuCatalogue->id); ?>" />
                </td>
                <td class="text-center"> 
                    <a href="<?php echo e(route('menu.edit', $menuCatalogue->id)); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo e(route('menu.delete', $menuCatalogue->id)); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/menu/menu/component/table.blade.php ENDPATH**/ ?>