
<?php if(!empty($product->iframe)): ?>
<div class="panel-product-detail mt30">
    <h2 class="heading-4"><span>Video</span></h2>
    <div class="productContent">
        <?php echo e($product->iframe); ?>

    </div>
</div>
<?php endif; ?>

<div class="panel-product-detail mt30">
    <h2 class="heading-4 mb20"><span>Thông tin chi tiết</span></h2>
    <div class="productContent">
         <?php echo $product->content; ?>

    </div>
</div>

<!-- 
<div class="woocommerce-tabs mb30">
    <ul class=" wc-tabs uk-flex uk-flex-middle"  data-uk-switcher="{connect:'#my-id'}">
       <li class="description_tab" id="tab-title-description" role="tab" >
            <a href=""> Chi tiết sản phẩm </a>
       </li>
       <li class="map_tab" id="tab-title-map_tab" role="tab" >
            <a href="">Video</a>
       </li>
   </li>
    </ul>
    <ul id="my-id" class="uk-switcher">
        <li class="tab-panel">
            <div class="woocommerce-Tabs-panel productContent">
              
            </div>
        </li>
    </ul>
</div> -->
<?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/product/product/component/general.blade.php ENDPATH**/ ?>