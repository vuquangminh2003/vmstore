<div class="col-lg-4">
    <div class="ibox">
        <div class="ibox-title">
            <h5>Thời gian áp dụng chương trình</h5>
        </div>
        <div class="ibox-content">
            <div class="form-row mb15">
                <label for="" class="control-label text-left">Ngày bắt đầu <span class="text-danger"> (*)</span></label>
                <div class="form-date">
                    <input 
                        type="text"
                        name="startDate"
                        value="<?php echo e(old('startDate', (isset($model->startDate)) ? convertDateTime($model->startDate) : null)); ?>"
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
                        name="endDate"
                        value="<?php echo e(old('endDate', (isset($model->endDate)) ? convertDateTime($model->endDate) : null )); ?>"
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
            <div class="form-row">
                <div class="uk-flex uk-flex-middle">
                    <input 
                        type="checkbox"
                        name="neverEndDate"
                        value="accept"
                        class=""
                        id="neverEnd"
                        <?php if((old('neverEndDate', ($model->neverEndDate ?? null)) == 'accept')): ?>
                            checked="checked"
                        <?php endif; ?>
                    >
                    <label class="fix-label ml5" for="neverEnd">Không có ngày kết thúc</label>
                </div>
            </div>
        </div>
    </div>
    <div class="ibox">
        <div class="ibox-title">
            <h5>Nguồn khách áp dụng</h5>
        </div>
        <?php
            $sourceStatus = old('source', ($model->discountInformation['source']['status']) ?? null)
        ?>
        <div class="ibox-content">
            <div class="setting-value">
                <div class="nav-setting-item uk-flex uk-flex-middle">
                    <input 
                        type="radio" 
                        value="all" 
                        name="source" 
                        id="allSource" 
                        class="chooseSource"
                        <?php echo e((old('source', $model->discountInformation['source']['status'] ?? '') === 'all' || !old('source') ) ? 'checked' : ''); ?>

                    >
                    <label class="fix-label ml5" for="allSource">Áp dụng cho toàn bộ nguồn khách</label>
                </div>
                <div class="nav-setting-item uk-flex uk-flex-middle">
                    <input 
                        type="radio" 
                        value="choose" 
                        name="source" 
                        id="chooseSource" 
                        class="chooseSource"
                        <?php echo e((old('source', $model->discountInformation['source']['status'] ?? '') === 'choose') ? 'checked' : ''); ?>

                    >
                    <label class="fix-label ml5" for="chooseSource">Chọn nguồn khách áp dụng</label>
                </div>
            </div>
            <?php if($sourceStatus): ?>
            <?php
                $sourceValue = old('sourceValue', ($model->discountInformation['source']['data']) ?? []);
            ?>
                <div class="source-wrapper">
                    <select name="sourceValue[]" id="" class="multipleSelect2" multiple>
                        <?php $__currentLoopData = $sources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option 
                            value="<?php echo e($val->id); ?>"  
                           <?php echo e((in_array($val->id, $sourceValue)) ? 'selected' : ''); ?>

                        ><?php echo e($val->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="ibox">
        <div class="ibox-title">
            <h5>Đối tượng áp dụng</h5>
        </div>
        <div class="ibox-content">
            <div class="setting-value">
                <div class="nav-setting-item uk-flex uk-flex-middle">
                    <input 
                        class="chooseApply" 
                        type="radio" 
                        value="all" 
                        name="applyStatus" 
                        id="allApply"
                        <?php echo e((old('applyStatus', $model->discountInformation['apply']['status'] ?? '') === 'all' || !old('applyStatus') ) ? 'checked' : ''); ?>

                    >
                    <label class="fix-label ml5" for="allApply">Áp dụng cho toàn bộ đối tượng</label>
                </div>
                <div class="nav-setting-item uk-flex uk-flex-middle">
                    <input 
                        class="chooseApply" 
                        type="radio" 
                        value="choose" 
                        name="applyStatus" 
                        id="chooseApply" 
                        <?php echo e((old('applyStatus', $model->discountInformation['apply']['status'] ?? '') === 'choose') ? 'checked' : ''); ?>

                        
                    >
                    <label class="fix-label ml5" for="chooseApply">Chọn đối tượng khách hàng</label>
                </div>
            </div>
            <?php
                $applyStatus = old('applyStatus', ($model->discountInformation['apply']['status']) ?? null);
                $applyValue = old('applyValue', ($model->discountInformation['apply']['data']) ?? []);
            ?>
            <?php if($applyStatus): ?>
            <div class="apply-wrapper">
                <select name="applyValue[]" id="" class="multipleSelect2 conditionItem" multiple>
                    <?php $__currentLoopData = __('module.applyStatus'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($val['id']); ?>"><?php echo e($val['name']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <div class="wrapper-condition"></div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<input 
    type="hidden" 
    class="input-product-and-quantity" 
    value="<?php echo e(json_encode(__('module.item'))); ?>"
>
<input 
    type="hidden" 
    class="applyStatusList" 
    value="<?php echo e(json_encode(__('module.applyStatus'))); ?>"
>
<input 
    type="hidden" 
    class="conditionItemSelected" 
    value="<?php echo e(json_encode($applyValue)); ?>"
>
<?php if(count($applyValue)): ?>
    <?php $__currentLoopData = $applyValue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <input 
            type="hidden" 
            class="condition_input_<?php echo e($val); ?>" 
            value="<?php echo e(json_encode(old($val, ($model->discountInformation['apply']['condition'][$val]) ?? null ))); ?>"
        >
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/promotion/component/aside.blade.php ENDPATH**/ ?>