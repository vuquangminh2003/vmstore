<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th>Tên Nguồn</th>
        <th>Từ khóa</th>
        <th>Mô tả</th>
        <th class="text-center">Tình Trạng</th>
        <th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>
        <?php if(isset($sources) && is_object($sources)): ?>
            <?php $__currentLoopData = $sources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $source): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr >
                <td>
                    <input type="checkbox" value="<?php echo e($source->id); ?>" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    <?php echo e($source->name); ?>

                </td>
                <td>
                    <?php echo e($source->keyword); ?>

                </td>
                <td>
                    <?php echo e(strip_tags(html_entity_decode($source->description))); ?>

                </td>
                <td class="text-center js-switch-<?php echo e($source->id); ?>"> 
                    <input type="checkbox" value="<?php echo e($source->publish); ?>" class="js-switch status " data-field="publish" data-model="<?php echo e($config['model']); ?>" <?php echo e(($source->publish == 2) ? 'checked' : ''); ?> data-modelId="<?php echo e($source->id); ?>" />
                </td>
                <td class="text-center"> 
                    <a href="<?php echo e(route('source.edit', $source->id)); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo e(route('source.delete', $source->id)); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php echo e($sources->links('pagination::bootstrap-4')); ?>

<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/source/component/table.blade.php ENDPATH**/ ?>