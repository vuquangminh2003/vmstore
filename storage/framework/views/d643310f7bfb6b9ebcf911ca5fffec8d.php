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
        <th style="width:700px;"><?php echo e(__('messages.tableName')); ?></th>
        <?php echo $__env->make('backend.dashboard.component.languageTh', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <th style="width:80px;" class="text-center"><?php echo e(__('messages.tableOrder')); ?></th>
        <th class="text-center" style="width:100px;"><?php echo e(__('messages.tableStatus')); ?></th>
        <th class="text-center" style="width:100px;"><?php echo e(__('messages.tableAction')); ?></th>
    </tr>
    </thead>
    <tbody>
        <?php if(isset($products) && is_object($products)): ?>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr id="<?php echo e($product->id); ?>">
                <td>
                    <input type="checkbox" value="<?php echo e($product->id); ?>" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    <div class="uk-flex uk-flex-middle">
                        <div class="image mr5">
                            <div class="img-scaledown image-product"><img src="<?php echo e(image($product->image)); ?>" alt=""></div>
                        </div>
                        <div class="main-info">
                            <div class="name"><span class="maintitle"><?php echo e($product->name); ?></span></div>
                            <div class="catalogue">
                                <span class="text-danger"><?php echo e(__('messages.tableGroup')); ?> </span>
                                <?php $__currentLoopData = $product->product_catalogues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $val->product_catalogue_language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('product.index', ['product_catalogue_id' => $val->id])); ?>" title=""><?php echo e($cat->name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            
                        </div>
                    </div>
                </td>
                <?php echo $__env->make('backend.dashboard.component.languageTd', ['model' => $product, 'modeling' => 'Product'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <td>
                    <input type="text" name="order" value="<?php echo e($product->order); ?>" class="form-control sort-order text-right" data-id="<?php echo e($product->id); ?>" data-model="<?php echo e($config['model']); ?>">
                </td>
                <td class="text-center js-switch-<?php echo e($product->id); ?>"> 
                    <input type="checkbox" value="<?php echo e($product->publish); ?>" class="js-switch status " data-field="publish" data-model="<?php echo e($config['model']); ?>" <?php echo e(($product->publish == 2) ? 'checked' : ''); ?> data-modelId="<?php echo e($product->id); ?>" />
                </td>
                <td class="text-center"> 
                    <a href="<?php echo e(route('product.edit', [$product->id, $queryUrl ?? 'p'])); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="<?php echo e(route('product.delete', $product->id)); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php echo e($products->links('pagination::bootstrap-4')); ?>

<?php /**PATH C:\xampp\htdocs\vmstore\resources\views/backend/product/product/component/table.blade.php ENDPATH**/ ?>