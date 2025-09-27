<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th>Tên nhóm</th>
        <th>Từ khóa</th>
        <th>Danh sách Hình Ảnh</th>
        <th class="text-center">Tình Trạng</th>
        <th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>
        <?php if(isset($slides) && is_object($slides)): ?>
            <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr >
                <td>
                    <input type="checkbox" value="<?php echo e($slide->id); ?>" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    <?php echo e($slide->name); ?>

                </td>
                <td>
                    <?php echo e($slide->keyword); ?>

                </td>
                <td>
                    <div class="sortui ui-sortable table-slide clearfix">
                        <?php $__currentLoopData = $slide->item[$config['language']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="ui-state-default">
                            <span class="image img-cover"><img src="<?php echo e(image($item['image'])); ?>" alt=""></span>
                            <div class="hidden">
                                <input type="text" name="slide[id][]" value="<?php echo e($slide->id); ?>">
                                <input type="text" name="slide[name][]" value="<?php echo e($item['name']); ?>">
                                <input type="text" name="slide[image][]" value="<?php echo e($item['image']); ?>">
                                <input type="text" name="slide[alt][]" value="<?php echo e($item['alt']); ?>">
                                <input type="text" name="slide[description][]" value="<?php echo e($item['description']); ?>">
                                <input type="text" name="slide[canonical][]" value="<?php echo e($item['canonical']); ?>">
                                <input type="text" name="slide[window][]" value="<?php echo e($item['window']); ?>">
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </td>
                
                <td class="text-center js-switch-<?php echo e($slide->id); ?>"> 
                    <input type="checkbox" value="<?php echo e($slide->publish); ?>" class="js-switch status " data-field="publish" data-model="<?php echo e($config['model']); ?>" <?php echo e(($slide->publish == 2) ? 'checked' : ''); ?> data-modelId="<?php echo e($slide->id); ?>" />
                </td>
                <td class="text-center"> 
                    <a href="<?php echo e(route('slide.edit', $slide->id)); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo e(route('slide.delete', $slide->id)); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php echo e($slides->links('pagination::bootstrap-4')); ?>

<?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/slide/slide/component/table.blade.php ENDPATH**/ ?>