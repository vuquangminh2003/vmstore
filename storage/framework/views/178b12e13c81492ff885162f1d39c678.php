<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th style="width:50px;">
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th><?php echo e(__('messages.tableName')); ?></th>
        <?php echo $__env->make('backend.dashboard.component.languageTh', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <th class="text-center" style="width:100px;"><?php echo e(__('messages.tableStatus')); ?> </th>
        <th class="text-center" style="width:100px;"><?php echo e(__('messages.tableAction')); ?> </th>
    </tr>
    </thead>
    <tbody>
        <?php if(isset($postCatalogues) && is_object($postCatalogues)): ?>
            <?php $__currentLoopData = $postCatalogues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postCatalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr >
                <td>
                    <input type="checkbox" value="<?php echo e($postCatalogue->id); ?>" class="input-checkbox checkBoxItem">
                </td>
               
                <td>
                    <?php echo e(str_repeat('|----', (($postCatalogue->level > 0)?($postCatalogue->level - 1):0)).$postCatalogue->name); ?>

                </td>
                <?php echo $__env->make('backend.dashboard.component.languageTd', ['model' => $postCatalogue, 'modeling' => 'PostCatalogue'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <td class="text-center js-switch-<?php echo e($postCatalogue->id); ?>"> 
                    <input type="checkbox" value="<?php echo e($postCatalogue->publish); ?>" class="js-switch status " data-field="publish" data-model="<?php echo e($config['model']); ?>" <?php echo e(($postCatalogue->publish == 2) ? 'checked' : ''); ?> data-modelId="<?php echo e($postCatalogue->id); ?>" />
                </td>
                <td class="text-center"> 
                    <a href="<?php echo e(route('post.catalogue.edit', $postCatalogue->id)); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo e(route('post.catalogue.delete', $postCatalogue->id)); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php echo e($postCatalogues->links('pagination::bootstrap-4')); ?>

<?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/post/catalogue/component/table.blade.php ENDPATH**/ ?>