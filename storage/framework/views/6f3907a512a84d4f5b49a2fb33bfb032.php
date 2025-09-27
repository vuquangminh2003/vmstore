<div class="filter">
    <div class="uk-flex uk-flex-middle">
        <div class="filter-widget mr20">
            <div class="uk-flex uk-flex-middle">
                
                <div class="filter-button ml10 mr20">
                    <a href="" class="btn-filter uk-flex uk-flex-middle">
                        <i class="fi-rs-filter mr5"></i>
                        <span>Bộ Lọc</span>
                    </a>
                </div>
               
            </div>
        </div>
        <div class="perpage uk-flex uk-flex-middle">
            <div class="filter-text">Hiển thị</div>
            <select name="perpage" id="perpage" class="nice-select">
                <?php for($i = 20; $i <= 100; $i+=20): ?>
                <option value="<?php echo e($i); ?>"> <?php echo e($i); ?> sản phẩm </option>
                <?php endfor; ?>
            </select>
        </div>
        
    </div>
</div><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/product/catalogue/component/filter.blade.php ENDPATH**/ ?>