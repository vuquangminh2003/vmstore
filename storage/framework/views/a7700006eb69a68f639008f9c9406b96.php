<?php
    $totalReviews = $model->reviews()->count();
    $totalRate = number_format($model->reviews()->avg('score'), 1);
    $starPercent = ($totalReviews == 0) ? '0' : $totalRate/5*100;

    $fiveStar = $model->reviews()->where('score', 5)->count();
?>
<div class="review-container">
    <div class="panel-head">
       <h2 class="review-heading">Đánh giá sản phẩm</h2>
       <div class="review-statistic">
            <div class="uk-grid uk-grid-medium uk-flex uk-flex-middle">
                <div class="uk-width-large-1-3">
                    <div class="review-averate review-item">
                        <div class="title">Đánh giá trung bình</div>
                        <div class="score"><?php echo e($totalRate); ?>/5</div>
                        <div class="star-rating">
                            <div class="stars" style="--star-width: <?php echo e($starPercent); ?>%"></div>
                        </div>
                        <div class="total-rate"><?php echo e($totalReviews); ?> đánh giá</div>
                    </div>
                </div>
                <div class="uk-width-large-1-3">
                    <div class="progress-block review-item">
                        <?php for($i = 5; $i >= 1; $i--): ?>
                        <?php
                            $countStar = $model->reviews()->where('score', $i)->count();
                            $starPercent = ($countStar > 0) ? $countStar / $totalReviews * 100 : 0;
                        ?>
                        <div class="progress-item">
                            <div class="uk-flex uk-flex-middle">
                                <span class="text"><?php echo e($i); ?></span>
                                <i class="fa fa-star"></i>
                                <div class="uk-progress">
                                    <div class="uk-progress-bar" style="width: <?php echo e($starPercent); ?>%;"></div>
                                </div>
                                <span class="text"><?php echo e($countStar); ?></span>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="uk-width-large-1-3">
                    <div class="review-action review-item">
                        <div class="text">Bạn đã dùng sản phẩm này?</div>
                        <button class="btn btn-review" data-uk-modal="{target:'#review'}">Gửi đánh giá</button>
                    </div>
                </div>
            </div>
       </div>
    </div>
    <div class="panel-body">
        <div class="review-filter">
            <div class="uk-flex uk-flex-middle">
                <span class="filter-text">Lọc xem theo: </span>
                <div class="filter-item">
                    <span>Đã mua hàng</span>
                    <span>5 sao</span>
                    <span>4 sao</span>
                    <span>3 sao</span>
                    <span>2 sao</span>
                    <span>1 sao</span>
                </div>
            </div>
        </div>
        <div class="review-wrapper">
            <?php if(!is_null($product->reviews)): ?>
                <?php $__currentLoopData = $product->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $avatar = getReviewName($review->fullname);
                    $name = $review->fullname;
                    $email = $review->email;
                    $phone = $review->phone;
                    $description = $review->description;
                    $rating = generateStar($review->score);
                    $created_at = convertDateTime($review->created_at);
                ?>
                <div class="review-block-item ">
                    <div class="review-general uk-clearfix">
                        <div class="review-avatar">
                            <span class="shae"><?php echo e($avatar); ?></span>
                        </div>
                        <div class="review-content-block">
                            <div class="review-content">
                                <div class="name uk-flex uk-flex-middle">
                                    <span><?php echo e($name); ?></span>
                                    
                                </div>
                                <?php echo $rating; ?>

                                <div class="description">
                                    <?php echo e($description); ?>

                                </div>
                                <div class="review-toolbox">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="created_at">Ngày <?php echo e($created_at); ?></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<div id="review" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <div class="review-popup-wrapper">
            <div class="panel-head">Đánh giá sản phẩm</div>
            <div class="panel-body">
                <div class="product-preview">
                    <span class="image img-scaledown"><img src="<?php echo e(image($model->image)); ?>" alt="<?php echo e($model->name); ?>"></span>
                    <div class="product-title uk-text-center"><?php echo e($model->name); ?></div>
                    <div class="popup-rating uk-clearfix uk-text-center">
                        <div class="rate uk-clearfix ">
                            <input type="radio" id="star5" name="rate" class="rate" value="5" />
                            <label for="star5" title="Tuyệt vời">5 stars</label>
                            <input type="radio" id="star4" name="rate" class="rate" value="4" />
                            <label for="star4" title="Hài lòng">4 stars</label>
                            <input type="radio" id="star3" name="rate" class="rate" value="3" />
                            <label for="star3" title="Bình thường">3 stars</label>
                            <input type="radio" id="star2" name="rate" class="rate" value="2" />
                            <label for="star2" title="Tạm được">2 stars</label>
                            <input type="radio" id="star1" name="rate" class="rate" value="1" />
                            <label for="star1" title="Không thích">1 star</label>
                        </div>
                        <div class="rate-text uk-hidden">
                            Không thích
                        </div>
                    </div>
                    <div class="review-form">
                        <div action="" class="uk-form form">
                            <div class="form-row">
                                <textarea name="" id="" class="review-textarea" placeholder="Hãy chia sẻ cảm nhận của bạn về sản phẩm..."></textarea>
                            </div>
                            <div class="form-row">
                                <div class="uk-flex uk-flex-middle">
                                    <div class="gender-item uk-flex uk-flex-middle">
                                        <input type="radio" name="gender" class="gender" value="Nam" id="male">
                                        <label for="male">Nam</label>
                                    </div>
                                    <div class="gender-item uk-flex uk-flex-middle">
                                        <input type="radio" name="gender" class="gender" value="Nữ" id="femail">
                                        <label for="femail">Nữ</label>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-grid uk-grid-medium">
                                <div class="uk-width-large-1-2">
                                    <div class="form-row">
                                        <input 
                                            type="text" 
                                            name="fullname" 
                                            value="" 
                                            class="review-text"
                                            placeholder="Nhập vào họ tên"
                                        >
                                    </div>
                                </div>
                                <div class="uk-width-large-1-2">
                                    <div class="form-row">
                                        <input 
                                            type="text" 
                                            name="phone" 
                                            value="" 
                                            class="review-text"
                                            placeholder="Nhập vào số điện thoại"
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <input 
                                    type="text" 
                                    name="email" 
                                    value="" 
                                    class="review-text"
                                    placeholder="Nhập vào email"
                                >
                            </div>
                            <div class="uk-text-center">
                                <button type="submit" value="send" class="btn-send-review" name="create">Hoàn tất</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<input type="hidden" class="reviewable_type" value="<?php echo e($reviewable); ?>">
<input type="hidden" class="reviewable_id" value="<?php echo e($model->id); ?>">
<input type="hidden" class="review_parent_id" value="0">

<script>
    const isCustomerLoggedIn = <?php echo e(auth('customer')->check() ? 'true' : 'false'); ?>;

    document.addEventListener("DOMContentLoaded", function () {
        const muaNgayButtons = document.querySelectorAll(".btn-review");

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
</script><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/product/product/component/review.blade.php ENDPATH**/ ?>