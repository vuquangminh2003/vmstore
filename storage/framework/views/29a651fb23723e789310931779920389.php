<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th>Tên chương trình</th>
        <th>Chiết khấu</th>
        <th>Thông tin</th>
        <th>Ngày bắt đầu</th>
        <th>Ngày kết thúc</th>
        <th class="text-center">Tình Trạng</th>
        <th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>
        <?php if(isset($promotions) && is_object($promotions)): ?>
            <?php $__currentLoopData = $promotions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $promotion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $startDate = convertDateTime($promotion->startDate);
                $endDate = convertDateTime($promotion->endDate);
                $status = '';
                if($promotion->endDate != NULL && strtotime($promotion->endDate) - strtotime(now()) <= 0){
                    $status = '<span class="text-danger text-small">- Hết Hạn</span>';
                }
            ?>
            <tr >
                <td>
                    <input type="checkbox" value="<?php echo e($promotion->id); ?>" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    <div><?php echo e($promotion->name); ?> <?php echo $status; ?> </div> 
                    <div class="text-small text-success">Mã: <?php echo e($promotion->code); ?></div> 
                </td>
                <td>
                    <div class="discount-information text-center">
                        <?php echo renderDiscountInformation($promotion); ?>

                         
                    </div>
                </td>
                
                <td>
                    <div><?php echo e(__('module.promotion')[$promotion->method]); ?></div>  
                    
                </td>
                <td>
                    <?php echo e($startDate); ?>

                </td>
                <td>
                    <?php echo e(($promotion->neverEndDate === 'accept') ? 'Không giới hạn' : $endDate); ?>

                </td>
                <td class="text-center js-switch-<?php echo e($promotion->id); ?>"> 
                    <input type="checkbox" value="<?php echo e($promotion->publish); ?>" class="js-switch status " data-field="publish" data-model="<?php echo e($config['model']); ?>" <?php echo e(($promotion->publish == 2) ? 'checked' : ''); ?> data-modelId="<?php echo e($promotion->id); ?>" />
                </td>
                <td class="text-center"> 
                    <a href="<?php echo e(route('promotion.edit', $promotion->id)); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo e(route('promotion.delete', $promotion->id)); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php echo e($promotions->links('pagination::bootstrap-4')); ?>

<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/promotion/promotion/component/table.blade.php ENDPATH**/ ?>