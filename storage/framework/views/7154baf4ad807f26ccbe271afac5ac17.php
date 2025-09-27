<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th>Họ Tên</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th style="width: 400px;">Nội dung</th>
        <th>Rate</th>
        <th>Đối tượng</th>
        <th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>
        <?php if(isset($reviews) && is_object($reviews)): ?>
            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $reviewableLink = $review->reviewable->languages->first()->pivot->canonical;
            ?>
            <tr >
                <td>
                    <input type="checkbox" value="<?php echo e($review->id); ?>" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    <?php echo e($review->fullname); ?>

                </td>
                <td>
                    <?php echo e($review->phone); ?>

                </td>
                <td>
                    <?php echo e($review->email); ?>

                </td>
                <td>
                    <?php echo e($review->description); ?>

                </td>
                <td class="text-center">
                    <div class="text-navy"><?php echo e($review->score); ?></div>
                </td>
                <td>
                    <a href="<?php echo e(write_url($reviewableLink)); ?>" target="_blank">Click để xem đối tượng</a>
                </td>
                <td class="text-center"> 
                    <a href="<?php echo e(route('review.delete', $review->id)); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php echo e($reviews->links('pagination::bootstrap-4')); ?>

<?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/review/component/table.blade.php ENDPATH**/ ?>