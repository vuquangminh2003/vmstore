<?php
    $name = $product->name;
    
    $canonical = write_url($product->canonical);
    $image = image($product->image);
    $price = getPrice($product);
    $catName = $productCatalogue->name;
    $review = getReview($product);
    
    $description = $product->description;
    $attributeCatalogue = $product->attributeCatalogue;
    $gallery = json_decode($product->album);
?>
<div class="panel-body">
    <div class="uk-grid uk-grid-medium">
        <div class="uk-width-large-1-2">
            <?php if(!is_null($gallery)): ?>
            <div class="popup-gallery">
                <div class="swiper-container">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-wrapper big-pic">
                        <?php foreach($gallery as $key => $val){  ?>
                        <div class="swiper-slide" data-swiper-autoplay="2000">
                            <a href="<?php echo e(image($val)); ?>" data-uk-lightbox="{group:'my-group'}" class="image img-scaledown"><img src="<?php echo e(image($val)); ?>" alt="<?php echo $val ?>"></a>
                        </div>
                        <?php }  ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-container-thumbs">
                    <div class="swiper-wrapper pic-list">
                        <?php foreach($gallery as $key => $val){  ?>
                        <div class="swiper-slide">
                            <span  class="image img-scaledown"><img src="<?php echo e(image($val)); ?>" alt="<?php echo $val ?>"></span>
                        </div>
                        <?php }  ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <div class="uk-width-large-1-2">
            <div class="popup-product">
                <h1 class="title product-main-title"><span><?php echo e($name); ?></span>
                </h1>
                <div class="rating">
                    <div class="uk-flex uk-flex-middle">
                        <div class="author">Đánh giá: </div>
                        <div class="star-rating">
                            <div class="stars" style="--star-width: 8<?php echo e(rand(1, 9)); ?>%"></div>
                        </div>
                    </div>
                </div>
                
                <div class="product-specs">
                    
                    <div class="spec-row">Tình Trạng: <strong>Còn hàng</strong></div>
                </div>

                <div class="uk-grid uk-grid-small">
                    <div class="uk-width-large-1-2">
                        <div class="a-left">
                            <?php echo $price['html']; ?>

                            <?php if($price['price']  != $price['priceSale']): ?>
                            <div class="price-save">
                                Tiết kiệm: <strong><?php echo e(convert_price($price['price'] - $price['priceSale'], true)); ?></strong> (<span style="color:red">-<?php echo e($price['percent']); ?>%</span>)
                            </div>
                            <?php endif; ?>
                        
                            <?php echo $__env->make('frontend.product.product.component.variant', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <div class="quantity mt10">
                                <div class="uk-flex uk-flex-middle">
                                    <div class="quantitybox uk-flex uk-flex-middle">
                                        <div class="minus quantity-button">-</div>
                                        <input type="text" name="" value="1" class="quantity-text">
                                        <div class="plus quantity-button">+</div>
                                    </div>
                                    <div class="btn-group uk-flex uk-flex-middle">
                                        
                                        <div class="btn-item btn-1 addToCart" data-id="<?php echo e($product->id); ?>">
                                            <button type="button" class="btn-muangay">Muangay</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="uk-width-large-1-2">
                        <div class="a-right">
                            <div class="mb20"><strong>Dịch vụ của chúng tôi</strong></div>
                            <div class="panel-body">
                                <div class="right-item">
                                    <div class="label">Cam kết bán hàng</div>
                                    <div class="desc">✅Chính hãng có thẻ bảo hành đầy đủ</div>
                                </div>
                                <div class="right-item">
                                    <div class="label">CHĂM SÓC KHÁCH HÀNG</div>
                                    <div class="desc">✅Tư vấn nhiệt tình, lịch sự, trung thực</div>
                                </div>
                                <div class="right-item">
                                    <div class="label">CHÍNH SÁCH GIAO HÀNG</div>
                                    <div class="desc">✅Đồng kiểm →Thử hàng →Hài lòng thanh toán</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-description">
                    <?php echo $product->languages->first()->pivot->description; ?>

                </div>
            </div>
        </div>
    </div>

    <div class="uk-grid uk-grid-medium">
        <div class="uk-width-large-3-4">
            <div class="product-wrapper">
                <?php echo $__env->make('frontend.product.product.component.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('frontend.product.product.component.review', ['model' => $product, 'reviewable' => 'App\Models\Product'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="uk-width-large-1-4 uk-visible-large">
            <div class="aside">
               
                <div class="aside-category aside-product mt20">
                    <div class="aside-heading">Sản phẩm nổi bật</div>
                    <div class="aside-body">
                        <?php $__currentLoopData = $widgets['products-hl']->object; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $name = $product->languages->first()->pivot->name;
                            $canonical = write_url($product->languages->first()->pivot->canonical);
                            $image  = $product->image;
                            $price = getPrice($product);
                        ?>
                        <div class="aside-product uk-clearfix">
                            <a href="" class="image img-cover"><img src="<?php echo e($image); ?>" alt="<?php echo e($name); ?>"></a>
                            <div class="info">
                                <h3 class="title"><a href="<?php echo e($canonical); ?>" title="<?php echo e($name); ?>"><?php echo e($name); ?></a></h3>
                                <?php echo $price['html']; ?>

                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

            </div>
        </div>
       
    </div>

    <div class="product-related">
        <div class="uk-container uk-container-center">
            <div class="panel-product">
                <div class="main-heading">
                    <div class="panel-head">
                        <div class="uk-flex uk-flex-middle uk-flex-space-between">
                            <h2 class="heading-1"><span>Sản phẩm cùng danh mục</span></h2>
                        </div>
                    </div>
                </div>
                <div class="panel-body list-product">
                    <?php if(count($productCatalogue->products)): ?>
                    <div class="uk-grid uk-grid-medium">
                        <?php $__currentLoopData = $productCatalogue->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($index > 7): ?> <?php break; ?> <?php endif; ?>
                        <div class="uk-width-1-2 uk-width-small-1-2 uk-width-medium-1-3 uk-width-large-1-5 mb20">
                            <?php echo $__env->make('frontend.component.product-item', ['product' => $product], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    
   
</div>

<input type="hidden" class="productName" value="<?php echo e($product->name); ?>">
<input type="hidden" class="attributeCatalogue" value="<?php echo e(json_encode($attributeCatalogue)); ?>">
<input type="hidden" class="productCanonical" value="<?php echo e(write_url($product->canonical)); ?>">

<script>
    const isCustomerLoggedIn = <?php echo e(auth('customer')->check() ? 'true' : 'false'); ?>;

    document.addEventListener("DOMContentLoaded", function () {
        const muaNgayButtons = document.querySelectorAll(".btn-muangay");

        muaNgayButtons.forEach(button => {
            button.addEventListener("click", function (e) {
                e.preventDefault();

                if (!isCustomerLoggedIn) {
                    window.location.href = "<?php echo e(route('fe.auth.login')); ?>";
                } else {
                    // alert("Đã login! Bắt đầu xử lý mua ngay...");
                    // Viết thêm logic xử lý mua tại đây nếu cần
                }
            });
        });
    });
</script>
<?php /**PATH C:\xampp\htdocs\vmstore\resources\views/frontend/product/product/component/detail.blade.php ENDPATH**/ ?>