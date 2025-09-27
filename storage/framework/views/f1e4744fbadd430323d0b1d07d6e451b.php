<div class="col-lg-4">
    <div class="ibox">
        <div class="ibox-title">
            <h5>Thời gian áp dụng Voucher</h5>
        </div>
        <div class="ibox-content">
            <div class="form-row mb15">
                <label for="" class="control-label text-left">Ngày bắt đầu <span class="text-danger"> (*)</span></label>
                <div class="form-date">
                    <input 
                        type="text"
                        name="start_date"
                        value="<?php echo e(old('start_date', (isset($model->start_date)) ? convertDateTime($model->start_date) : null)); ?>"
                        class="form-control datepicker"
                        placeholder=""
                        autocomplete="off"
                    >
                    <span><i class="fa fa-calendar"></i></span>
                </div>
            </div>
            <div class="form-row mb15">
                <label for="" class="control-label text-left">Ngày kết thúc <span class="text-danger"> (*)</span></label>
                <div class="form-date">
                    <input 
                        type="text"
                        name="end_date"
                        value="<?php echo e(old('end_date', (isset($model->end_date)) ? convertDateTime($model->end_date) : null )); ?>"
                        class="form-control datepicker"
                        placeholder=""
                        autocomplete="off"
                        <?php if((old('neverEndDate', ($model->neverEndDate ?? null)) == 'accept')): ?>
                            disabled
                        <?php endif; ?>
                    >
                    <span><i class="fa fa-calendar"></i></span>
                </div>
            </div>
        </div>
    </div>
    <?php
        $combine_promotion = \App\Enums\VoucherEnum::COMBINE_PROMOTION;
    ?>
    <div class="ibox">
        <div class="ibox-content combine">
            <input 
                id="<?php echo e($combine_promotion); ?>" 
                value="<?php echo e($combine_promotion); ?>" 
                type="checkbox" 
                name="combine_promotion"
                <?php echo e(isset($voucher) && $voucher->combine_promotion == $combine_promotion ? 'checked' : null); ?>

            >
            <label for="<?php echo e($combine_promotion); ?>">Áp dụng chung với chương trình khuyến mại</label>
        </div>
    </div>
</div>
<input 
    type="hidden" 
    class="input-product-and-quantity" 
    value="<?php echo e(json_encode(__('module.item_voucher'))); ?>"
>
<input 
    type="hidden" 
    class="conditionItemSelected" 
    value="[]"
><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/voucher/component/aside.blade.php ENDPATH**/ ?>