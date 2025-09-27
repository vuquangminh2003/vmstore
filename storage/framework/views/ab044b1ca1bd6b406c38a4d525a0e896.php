<div class="ibox w">
    <div class="ibox-title">
        <h5><?php echo e(__('messages.parent')); ?></h5>
    </div>
    <div class="ibox-content">
        <div class="row mb15">
            <div class="col-lg-12">
                <div class="form-row">
                    <select name="product_catalogue_id" class="form-control setupSelect2" id="">
                        <?php $__currentLoopData = $dropdown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e($key == old('product_catalogue_id', (isset($product->product_catalogue_id)) ? $product->product_catalogue_id : '') ? 'selected' : ''); ?> value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
        <?php
            $catalogue = [];
            if(isset($product)){
                foreach($product->product_catalogues as $key => $val){
                    $catalogue[] = $val->id;
                }
            }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-row">
                    <label class="control-label"><?php echo e(__('messages.subparent')); ?></label>
                    <select multiple name="catalogue[]" class="form-control setupSelect2" id="">
                        <?php $__currentLoopData = $dropdown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option 
                            <?php if(is_array(old('catalogue', (
                                isset($catalogue) && count($catalogue)) ?   $catalogue : [])
                                ) && isset($product->product_catalogue_id) && $key !== $product->product_catalogue_id &&  in_array($key, old('catalogue', (isset($catalogue)) ? $catalogue : []))
                            ): ?>
                            selected
                            <?php endif; ?> value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ibox w">
    <div class="ibox-title">
        <h5><?php echo e(__('messages.product.information')); ?></h5>
    </div>
    <div class="ibox-content">
        <div class="row mb15">
            <div class="col-lg-12">
                <div class="form-row">
                    <label for=""><?php echo e(__('messages.product.code')); ?></label>
                    <input 
                        type="text"
                        name="code"
                        value="<?php echo e(old('code', ($product->code) ?? time())); ?>"
                        class="form-control"
                        readonly
                    >
                </div>
            </div>
        </div>
        <div class="row mb15">
            <div class="col-lg-12">
                <div class="form-row">
                    <label for=""><?php echo e(__('messages.product.made_in')); ?></label>
                    <input 
                        type="text"
                        name="made_in"
                        value="<?php echo e(old('made_in', ($product->made_in) ?? null)); ?>"
                        class="form-control "
                    >
                </div>
            </div>
        </div>
        <div class="row mb15">
            <div class="col-lg-12">
                <div class="form-row">
                    <label for=""><?php echo e(__('messages.product.price')); ?></label>
                    <input 
                        type="text"
                        name="price"
                        value="<?php echo e(old('price', (isset($product)) ? number_format($product->price, 0 , ',', '.') : '')); ?>"
                        class="form-control int"
                    >
                </div>
            </div>
        </div>
        <div class="form-row mb20">
            <label for="" class="control-label text-left">Thời gian BH</label>
            <div class="guarantee">
                <div class="uk-flex uk-flex-middle uk-flex-space-between">
                    <input 
                        type="text"
                        name="guarantee"
                        value="<?php echo e(old('guarantee', $product->guarantee  ?? null)); ?>"
                        class="text-right form-control int"
                        placeholder=""
                        autocomplete="off"
                        style="margin-right:10px;"
                    >
                    <select class="setupSelect2" name="" id="">
                        <option value="month">tháng</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-row">
            <label for="">Mã Nhúng</label>
            <textarea 
                type="text"
                name="iframe"
                class="form-control"
                style="height:168px;"
            ><?php echo e(old('iframe', ($product->iframe) ?? '')); ?></textarea>
        </div>
    </div>
</div>
<?php echo $__env->make('backend.dashboard.component.publish', ['model' => ($product) ?? null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if(!empty($product->qrcode)): ?>
<div class="ibox w">
    <div class="ibox-title">
        <h5>Mã QRCODE</h5>
    </div>
    <div class="ibox-content qrcode">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-row">
                    <?php echo $product->qrcode; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/product/product/component/aside.blade.php ENDPATH**/ ?>