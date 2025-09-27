
<?php $__env->startSection('content'); ?>
   
    <div class="contact-page">
        <div class="page-breadcrumb background">      
            <div class="uk-container uk-container-center">
                <ul class="uk-list uk-clearfix">
                    <li><a href="/"><i class="fi-rs-home mr5"></i><?php echo e(__('frontend.home')); ?></a></li>
                    <li><a href="<?php echo e(route('distribution.list.index')); ?>" title="Hệ thống phân phối">Liên Hệ</a></li>
                    
                </ul>
            </div>
        </div>
        <div class="uk-container uk-container-center">
            <div class="contact-container-1">
                <div class="uk-grid uk-grid-medium uk-flex uk-flex-middle">
                    <div class="uk-width-large-1-2">
                        <div class="contact-infor">
                            <span class="image"><img src="<?php echo $system['homepage_logo'] ?>" alt=""></span>
                            <div class="brand mb10 mt10"><?php echo $system['homepage_brand']; ?></div>
                            <div class="footer-contact">
                                <p class="address">Văn Phòng : <?php echo $system['contact_address'] ?></p>
                                <p class="phone">Hotline: <?php echo $system['contact_hotline'] ?></p>
                                <p class="email">Email: <?php echo $system['contact_email'] ?></p>
                            </div>
                            <div class="short">
                                <?php echo $system['homepage_short_intro']; ?>

                            </div>
                        </div>
                        
                    </div>
                    <div class="uk-width-large-1-2">
                        
                        <form action="<?php echo e(route('contact.index')); ?>" method="POST" class="uk-form form contact-form">
                            <?php echo csrf_field(); ?>
                            <div class="heading-form">Liên hệ ngay với chúng tôi để nhận tư vấn tốt Nhất</div>
                            <div class="uk-grid uk-grid-medium">
                                <div class="uk-width-large-1-2 mb20">
                                    <div class="form-row">
                                        <input 
                                            type="text" 
                                            name="fullname" 
                                            class="input-text" 
                                            placeholder="Tên của bạn"
                                            required
                                        >
                                    </div>
                                </div>
                                <div class="uk-width-large-1-2 mb20">
                                    <div class="form-row">
                                        <input 
                                            type="tel" 
                                            name="phone" 
                                            class="input-text" 
                                            placeholder="Số điện thoại của bạn"
                                            pattern="^0[0-9]{9}$" 
                                            title="Số điện thoại phải bắt đầu bằng số 0 và đủ 10 chữ số"
                                            required
                                        >
                                    </div>
                                </div>
                                <div class="uk-width-large-1-2 ">
                                    <div class="form-row">
                                        <input 
                                        type="email" 
                                        name="email" 
                                        class="input-text" 
                                        placeholder="Email của bạn"
                                        title="Vui lòng nhập đúng định dạng email, ví dụ: example@gmail.com"
                                        required
                                        >
                                    </div>
                                </div>
                                <div class="uk-width-large-1-2 ">
                                    <div class="form-row">
                                        <input type="text" name="subject" class="input-text" placeholder="Chủ đề" required>
                                    </div>
                                </div>
                            </div>
                            <textarea style="padding:10px;" name="message" id="" placeholder="Nội dung" class=""></textarea>
                             <button type="submit" name="send" value="create">Liên Hệ Ngay</button>
                        </form>
                    </div>
                </div>
                <div class="mape mt20">
                    <?php echo $system['contact_map']; ?>

                </div>
            </div>        
        </div>
    
    
    
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.homepage.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/contact/index.blade.php ENDPATH**/ ?>