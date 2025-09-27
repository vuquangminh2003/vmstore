<?php
    $query= base64_encode(http_build_query(request()->query()));
    $queryUrl = rtrim($query,'=');
?>
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
        <?php if(isset($attributeCatalogues) && is_object($attributeCatalogues)): ?>
            <?php $__currentLoopData = $attributeCatalogues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attributeCatalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr >
                <td>
                    <input type="checkbox" value="<?php echo e($attributeCatalogue->id); ?>" class="input-checkbox checkBoxItem">
                </td>
               
                <td>
                    <?php echo e(str_repeat('|----', (($attributeCatalogue->level > 0)?($attributeCatalogue->level - 1):0)).$attributeCatalogue->name); ?>

                </td>
                <?php echo $__env->make('backend.dashboard.component.languageTd', ['model' => $attributeCatalogue, 'modeling' => 'AttributeCatalogue'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <td class="text-center js-switch-<?php echo e($attributeCatalogue->id); ?>"> 
                    <input type="checkbox" value="<?php echo e($attributeCatalogue->publish); ?>" class="js-switch status " data-field="publish" data-model="<?php echo e($config['model']); ?>" <?php echo e(($attributeCatalogue->publish == 2) ? 'checked' : ''); ?> data-modelId="<?php echo e($attributeCatalogue->id); ?>" />
                </td>
                <td class="text-center"> 
                    <a href="<?php echo e(route('attribute.catalogue.edit', [$attributeCatalogue->id, $queryUrl ?? ''])); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo e(route('attribute.catalogue.delete', $attributeCatalogue->id)); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php echo e($attributeCatalogues->links('pagination::bootstrap-4')); ?>

<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/attribute/catalogue/component/table.blade.php ENDPATH**/ ?>