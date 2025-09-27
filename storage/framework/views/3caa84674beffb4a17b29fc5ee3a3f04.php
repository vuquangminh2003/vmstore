<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th>Tên Widget</th>
        <th>Từ khóa</th>
        <th>ShortCode</th>
        <?php echo $__env->make('backend.dashboard.component.languageTh', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <th class="text-center">Tình Trạng</th>
        <th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>
        <?php if(isset($widgets) && is_object($widgets)): ?>
            <?php $__currentLoopData = $widgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $widget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr >
                <td>
                    <input type="checkbox" value="<?php echo e($widget->id); ?>" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    <?php echo e($widget->name); ?>

                </td>
                <td>
                    <?php echo e($widget->keyword); ?>

                </td>
                <td>
                    <?php echo e(($widget->short_code) ?? '-'); ?>

                </td>
                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(session('app_locale') === $language->canonical): ?> <?php continue; ?> <?php endif; ?>
                <?php
                    $translated = (isset($widget->description[$language->id])) ? 1 : 0;
                ?>
                <td class="text-center">
                    <a 
                        class="<?php echo e(($translated == 1) ? '' : 'text-danger'); ?>"
                        href="<?php echo e(route('widget.translate', ['languageId' => $language->id, 'id' => $widget->id])); ?>"><?php echo e(($translated == 1) ? 'Đã dịch' : 'Chưa dịch'); ?></a>
                </td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <td class="text-center js-switch-<?php echo e($widget->id); ?>"> 
                    <input type="checkbox" value="<?php echo e($widget->publish); ?>" class="js-switch status " data-field="publish" data-model="<?php echo e($config['model']); ?>" <?php echo e(($widget->publish == 2) ? 'checked' : ''); ?> data-modelId="<?php echo e($widget->id); ?>" />
                </td>
                <td class="text-center"> 
                    <a href="<?php echo e(route('widget.edit', $widget->id)); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo e(route('widget.delete', $widget->id)); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php echo e($widgets->links('pagination::bootstrap-4')); ?>

<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/widget/component/table.blade.php ENDPATH**/ ?>