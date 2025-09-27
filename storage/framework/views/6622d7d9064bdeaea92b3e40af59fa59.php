<div class="filter-content filter-minimize">
    <div class="filter-overlay">
        <div class="filter-close">
            <i class="fi fi-rs-cross"></i>
        </div>
        <div class="filter-content-container">
            
            <?php if(!is_null($filters)): ?>
                <?php $__currentLoopData = $filters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $catName = $val->languages->first()->pivot->name;
                    if(is_null($val->attributes) || count($val->attributes) == 0) continue;
                ?>
                <div class="filter-item">
                    <div class="filter-heading"><?php echo e($catName); ?></div>
                    <?php if(count($val->attributes)): ?>
                    <div class="filter-body">
                        <?php $__currentLoopData = $val->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $attributeName = $item->languages->first()->pivot->name;
                            $id = $item->id;
                        ?>
                        <div class="filter-choose">
                            <input 
                                type="checkbox" 
                                id="attribute-<?php echo e($id); ?>" 
                                class="input-checkbox filtering filterAttribute"
                                value="<?php echo e($id); ?>"
                                data-group= "<?php echo e($val->id); ?>"
                            >
                            <label for="attribute-<?php echo e($id); ?>"><?php echo e($attributeName); ?></label>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <div class="filter-item filter-price slider-box">
                <div class="filter-heading" for="priceRange">Lọc Theo Giá:</div>
                <div class="filter-price-content">
                    <input type="text" id="priceRange" readonly="" class="uk-hidden">
                    <div id="price-range" class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span></div>
                </div>
                <div class="filter-input-value mt5">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <input type="text" class="min-value input-value" value="0đ">
                        <input type="text" class="max-value input-value" value="20.000.000đ">
                    </div>
                </div>
            </div>
            <div class="filter-input-value-mobile mt5">
                <div class="filter-heading" for="priceRange">Lọc Theo Giá:</div>
                <a type="text" class="input-value" data-from="0" data-to="499.999">Dưới 500.000đ</a>
                <a type="text" class="input-value" data-from="500.000" data-to="1.000.000">Từ 500-1 triệu</a>
                <a type="text" class="input-value" data-from="1.000.000" data-to="2.000.000">Từ 1-2 triệu</a>
                <a type="text" class="input-value" data-from="2.000.000" data-to="4.000.000">Từ 2-4 triệu</a>
                <a type="text" class="input-value" data-from="4.000.000" data-to="7.000.000">Từ 4-7 triệu</a>
                <a type="text" class="input-value" data-from="7.000.000" data-to="13.000.000">Từ 7-13 triệu</a>
                <a type="text" class="input-value" data-from="13.000.000" data-to="20.000.000">Từ 13-20 triệu</a>
            </div>
            
            
        </div>
    </div>
</div>

<input type="hidden" class="product_catalogue_id" value="<?php echo e($productCatalogue->id); ?>"><?php /**PATH C:\xampp\htdocs\vmstore\resources\views/frontend/product/catalogue/component/filterContent.blade.php ENDPATH**/ ?>