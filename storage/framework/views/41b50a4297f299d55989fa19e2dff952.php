<?php echo $__env->make('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
    $url = (isset($config['method']) && $config['method'] == 'translate' ) ? route('system.save.translate', ['languageId' => $languageId]) : route('system.store')
?>
<form action="<?php echo e($url); ?>" method="post" class="box">
    <?php echo csrf_field(); ?>
    <div class="wrapper wrapper-content animated fadeInRight">
       
        <div class="uk-flex uk-flex-middle">
            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(count($languages) == 0): ?> <?php continue; ?> <?php endif; ?>
            <a 
                class="image img-cover system-flag"
                href="<?php echo e(route('system.translate', ['languageId' => $language->id] )); ?>"><img src="<?php echo e(image($language->image)); ?>" alt=""></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      
        <?php $__currentLoopData = $systemConfig; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title"><?php echo e($val['label']); ?></div>
                    <div class="panel-description">
                        <?php echo e($val['description']); ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <?php if(count($val['value'])): ?>
                    <div class="ibox-content">
                        <?php $__currentLoopData = $val['value']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyVal => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $name = $key.'_'.$keyVal;
                        ?>
                        <div class="row mb15">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="" class="uk-flex uk-flex-space-between" >
                                        <span><?php echo e($item['label']); ?></span> 
                                        <?php echo renderSystemLink($item); ?>

                                        <?php echo renderSystemTitle($item); ?>

                                    </label>

                                    <?php switch($item['type']):
                                        case ('text'): ?>
                                            <?php echo renderSystemInput($name, $systems); ?>

                                            <?php break; ?>
                                        <?php case ('images'): ?>
                                            <?php echo renderSystemImages($name, $systems); ?>

                                            <?php break; ?>
                                        <?php case ('textarea'): ?>
                                            <?php echo renderSystemTextarea($name, $systems); ?>

                                            <?php break; ?>
                                        <?php case ('select'): ?>
                                            <?php echo renderSystemSelect($item, $name, $systems); ?>

                                            <?php break; ?>
                                        <?php case ('editor'): ?>
                                            <?php echo renderSystemEditor($name, $systems); ?>

                                            <?php break; ?>

                                    <?php endswitch; ?>


                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
        <div class="text-right mb15">
            <button class="btn btn-primary" type="submit" name="send" value="send">Lưu lại</button>
        </div>
    </div>
</form>
<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/system/index.blade.php ENDPATH**/ ?>