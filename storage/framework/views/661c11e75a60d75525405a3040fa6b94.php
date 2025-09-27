<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th style="width:100px;">Ảnh</th>
        <th>Tên Ngôn ngữ</th>
        <th>Canonical</th>
        <th>Mô tả</th>
        <th class="text-center">Tình Trạng</th>
        <th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>
        <?php if(isset($langs) && is_object($langs)): ?>
            <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr >
                <td>
                    <input type="checkbox" value="<?php echo e($language->id); ?>" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    <span class="image img-cover"><img src="<?php echo e(image($language->image)); ?>" alt=""></span>
                </td>
                <td>
                    <?php echo e($language->name); ?>

                </td>
                <td>
                    <?php echo e($language->canonical); ?>

                </td>
                <td>
                    <?php echo e($language->description); ?>

                </td>
                <td class="text-center js-switch-<?php echo e($language->id); ?>"> 
                    <input type="checkbox" value="<?php echo e($language->publish); ?>" class="js-switch status " data-field="publish" data-model="Language" <?php echo e(($language->publish == 2) ? 'checked' : ''); ?> data-modelId="<?php echo e($language->id); ?>" />
                </td>
                <td class="text-center"> 
                    <a href="<?php echo e(route('language.edit', $language->id)); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo e(route('language.delete', $language->id)); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php echo e($langs->links('pagination::bootstrap-4')); ?>

<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/language/component/table.blade.php ENDPATH**/ ?>