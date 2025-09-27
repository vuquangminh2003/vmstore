<div class="panel-general page">
    
    <footer class="footer">
        <div class="upper">
            <div class="uk-container uk-container-center">
                <div class="footer-information">
                    <div class="footer-logo"><img src="<?php echo e($system['homepage_logo']); ?>" alt=""></div>
                    <div class="company-name"><?php echo e($system['homepage_company']); ?></div>
                    <?php if(isset($menu['footer-menu'])): ?>
                    <div class="uk-grid uk-grid-medium">
                       <?php $__currentLoopData = $menu['footer-menu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <?php
                           $name = $val['item']->languages->first()->pivot->name;
                       ?>
                        <div class="uk-width-large-1-4">
                            <div class="footer-menu">
                                <div class="ft-heading"><?php echo e($name); ?></div>
                                <?php if(count($val['children'])): ?>
                                <ul class="uk-list uk-clearfix">
                                    <?php $__currentLoopData = $val['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $name = $item['item']->languages->first()->pivot->name;
                                        $canonical = write_url($item['item']->languages->first()->pivot->canonical);
                                    ?>
                                    <li><a href="<?php echo e($canonical); ?>" title="<?php echo e($name); ?>"><?php echo e($name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="uk-width-large-1-4">
                            <div class="footer-contact">
                                <div class="ft-heading">Thông tin liên hệ</div>
                                <p>Địa chỉ: <?php echo e($system['contact_address']); ?></p>
                                <p>Số điện thoại: <?php echo e($system['contact_hotline']); ?></p>
                                <p>Email: <?php echo e($system['contact_website']); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="copyright uk-text-center">
            © Copyright 2025, All Rights Reserved - Design by:  Le Van Minh
            <?php echo e($system['homepage_brand']); ?>

        </div>
    </footer>
</div>

<div class="bottom-support-online">
    <div class="support-content">
        <a href="tel:0905620486" class="phone-call-now" rel="nofollow">
            <i style="background:#d92329" class="fa fa-phone rotate" aria-hidden="true"></i>
            <div class="animated infinite zoomIn kenit-alo-circle" style="border-color:#d92329"></div>
            <div class="animated infinite pulse kenit-alo-circle-fill" style="background-color:#d92329"></div>
            <span style="background:#d92329">Gọi ngay: <?php echo e($system['contact_hotline']); ?></span>
        </a>
        <a class="mes" href="https://zalo.me/<?php echo e($system['contact_hotline']); ?>" target="_blank">
            <i style="background:#d92329" class="fa fa-comments"></i>
            <span style="background:#d92329">Chat qua Zalo</span>
        </a>
    </div>
    <a class="btn-support">
        <i style="background:#d92329" class="fa fa-bell" aria-hidden="true"></i>
        <div class="animated infinite zoomIn kenit-alo-circle" style="border-color:#d92329"></div>
        <div class="animated infinite pulse kenit-alo-circle-fill" style="background-color:#d92329"></div>
    </a>
</div>
<div class="fix-bottom uk-position-fixed uk-hidden-large">
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-2-4">
            <div class="fix-item">
                <a href="tel:<?php echo e($system['contact_hotline']); ?>" class="btn btn-main" target="_blank">
                    <div class="icon"><i class="fa fa-phone rotate"></i></div>
                    <div class="text">Gọi điện</div>
                </a>
            </div>
        </div>
        <!-- <div class="uk-width-1-4">
            <div class="fix-item">
                <a href="" class="btn btn-main" target="_blank">
                    <div class="icon"><i class="fa fa-comments"></i></div>
                    <div class="text">Nhắn tin</div>
                </a>
            </div>
        </div> -->
        <div class="uk-width-2-4">
             <div class="fix-item">
                <a href="https://zalo.me/<?php echo e($system['contact_hotline']); ?>" class="btn btn-main" target="_blank">
                    <div class="image img-cover"><i class="fa fa-comments"></i></div>
                    <div class="text">Zalo</div>
                </a>
            </div>
        </div>
        <!-- <div class="uk-width-1-4">
            <div class="fix-item">
                <a href="<?php echo e($system['social_facebook']); ?>" class="btn btn-main" target="_blank">
                    <div class="image img-cover"><i class="fa fa-facebook"></i></div>
                    <div class="text" style="word-break: break-all;">Facebook</div>
                </a>
            </div>
        </div> -->
    </div>
</div>

<div class="noti" id="noti" style="bottom:-80px;">
   
</div><?php /**PATH C:\xampp\htdocs\vphome\resources\views/frontend/component/footer.blade.php ENDPATH**/ ?>