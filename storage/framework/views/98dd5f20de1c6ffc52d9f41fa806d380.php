<?php echo $__env->make('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('backend.dashboard.component.formError', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
    $url = ($config['method'] == 'create') ? route('promotion.store') : route('promotion.update', $promotion->id);
?>
<form action="<?php echo e($url); ?>" method="post" class="box">
    <?php echo csrf_field(); ?>
    <div class="wrapper wrapper-content animated fadeInRight promotion-wrapper">
        <div class="row">
            <div class="col-lg-8">
                <?php echo $__env->make('backend.promotion.component.general', ['model' => ($promotion) ?? null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('backend.promotion.promotion.component.detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <?php echo $__env->make('backend.promotion.component.aside', ['model' => ($promotion) ?? null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="text-right mb15">
            <button class="btn btn-primary" type="submit" name="send" value="send">Lưu lại</button>
        </div>
    </div>
</form>
<?php echo $__env->make('backend.promotion.promotion.component.popup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<input 
    type="hidden" 
    class="preload_promotionMethod" 
    value="<?php echo e(old('method', ($promotion->method) ?? null)); ?>"
>
<input 
    type="hidden" 
    class="preload_select-product-and-quantity" 
    value="<?php echo e(old('module_type', ($promotion->discountInformation['info']['model']) ?? null)); ?>"
>
<input 
    type="hidden" 
    class="input_order_amount_range" 
    value="<?php echo e(json_encode(old('promotion_order_amount_range', ($promotion->discountInformation['info']) ?? null))); ?>"
>
<input 
    type="hidden"
    class="input_product_and_quantity"
    value="<?php echo e(json_encode(old('product_and_quantity', ($promotion->discountInformation['info']) ?? null))); ?>"
>
<input 
    type="hidden"
    class="input_object"
    value="<?php echo e(json_encode(old('object', ($promotion->discountInformation['info']['object']) ?? null ))); ?>"
><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/promotion/promotion/store.blade.php ENDPATH**/ ?>