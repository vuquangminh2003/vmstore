<?php
// dd($product);
    $name = $product->languages->first()->pivot->name;
    $canonical = write_url($product->languages->first()->pivot->canonical);
    $image = image($product->image);
    $price = getPrice($product);
    // dd($price);
    // $catName = array_map(function($category, $product){
    //     return ($category['id'] === $product->product_catalogue_id) ? $category['languages'][0]['pivot']['name'] : '';
    // }, $product->product_catalogues->toArray(), [$product])[0];
    $catName = $product->product_catalogues->first()->languages->first()->pivot->name;
    $review = getReview($product);
?>



<div class="product-item product">
    
    <a href="<?php echo e($canonical); ?>" class="image img-scaledown img-zoomin"><img src="<?php echo e($image); ?>" alt="<?php echo e($name); ?>"></a>
    <div class="info">
        
        <h3 class="title"><a href="<?php echo e($canonical); ?>" title="<?php echo e($name); ?>"><?php echo e($name); ?></a></h3>
        
        <div class="product-group">
            <?php echo $price['html']; ?>

        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\vmstore\resources\views/frontend/component/product-item.blade.php ENDPATH**/ ?>