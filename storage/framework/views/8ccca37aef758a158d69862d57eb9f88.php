<?php echo $__env->make('backend.dashboard.component.breadcrumb', ['title' => $config['seo'][$config['method']]['title']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('backend.dashboard.component.formError', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
    $url = ($config['method'] == 'create') ? route('voucher.store') : route('voucher.update', $voucher->id);
?>
<form action="<?php echo e($url); ?>" method="post" class="box">
    <?php echo csrf_field(); ?>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-8">
                <?php echo $__env->make('backend.voucher.component.general',['model' => ($voucher) ?? null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('backend.voucher.component.detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <?php echo $__env->make('backend.voucher.component.aside',['model' => ($voucher) ?? null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    value="<?php echo e(old('method', ($voucher->method) ?? null )); ?>"
>
<?php if(isset($voucher)): ?>
    <?php
        $module_type = $voucher->product_scope;
    ?>
    <?php if($voucher->method == App\Enums\VoucherEnum::TOTAL_ORDERS): ?>
        <?php
            $voucher_total_order = [
                'max_discount_amount' => convert_price($voucher->max_discount_amount, true),
                'discount_value' => $voucher->discount_value,
                'discount_type' =>  $voucher->discount_type,
                'min_order_value' => convert_price($voucher->voucher_order_conditions->min_order_value, true),
                'max_order_value' => convert_price($voucher->voucher_order_conditions->max_order_value, true),
            ]
        ?>
    <?php elseif($voucher->method == App\Enums\VoucherEnum::SHIPPING_ORDERS): ?>
        <?php
            $voucher_ship = [
                'max_discount_amount' => convert_price($voucher->max_discount_amount, true),
                'discount_value' => $voucher->discount_value,
                'discount_type' =>  $voucher->discount_type,
                'min_shipping_value' => convert_price($voucher->voucher_shipping_conditions->min_shipping_value, true),
                'max_shipping_value' => convert_price($voucher->voucher_shipping_conditions->max_shipping_value, true),
            ]

            // $voucher->{$dynamic}->{$dynamicValue}
        ?>
    <?php elseif($voucher->method == App\Enums\VoucherEnum::PRODUCT_VOUCHER): ?>
        <?php
            $product_voucher = [
                'max_discount_amount' => convert_price($voucher->max_discount_amount, true),
                'discount_value' => $voucher->discount_value,
                'discount_type' =>  $voucher->discount_type,
            ]
        ?>
    <?php endif; ?>
    
<?php endif; ?>
<input 
    type="hidden" 
    class="input_voucher_total_order" 
    value="<?php echo e(json_encode(old('TOTAL_ORDERS', ($voucher_total_order) ?? null ))); ?>"
>
<input 
    type="hidden" 
    class="input_voucher_ship" 
    value="<?php echo e(json_encode(old('SHIPPING_ORDERS', ($voucher_ship) ?? null ))); ?>"
>
<input 
    type="hidden"
    class="input_product_and_quantity"
    value="<?php echo e(json_encode(old('PRODUCT_VOUCHER', ($product_voucher) ?? null ))); ?>"
>
<input 
    type="hidden" 
    class="preload_select-product-and-quantity" 
    value="<?php echo e(old('module_type', ($module_type) ?? null )); ?>"
>
<input 
    type="hidden"
    class="input_object"
    value="<?php echo e(json_encode(old('object' , ($object) ?? null ))); ?>"
>  <?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/voucher/store.blade.php ENDPATH**/ ?>