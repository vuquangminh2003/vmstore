<div class="ibox slide-setting slide-normal">
    <div class="ibox-title">
        <h5>Cài đặt cơ bản</h5>
    </div>
    <div class="ibox-content">
        <div class="row mb15">
            <div class="col-lg-12 mb10">
                <div class="form-row">
                    <div for="" class="control-label text-left">Tên Slide <span class="text-danger">(*)</span></div>
                    <input 
                        type="text"
                        name="name"
                        value="<?php echo e(old('name', ($slide->name) ?? '' )); ?>"
                        class="form-control"
                        placeholder=""
                        autocomplete="off"
                    >
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-row">
                    <div for="" class="control-label text-left">Từ khóa Slide<span class="text-danger">(*)</span></div>
                    <input 
                        type="text"
                        name="keyword"
                        value="<?php echo e(old('keyword', ($slide->keyword) ?? '' )); ?>"
                        class="form-control"
                        placeholder=""
                        autocomplete="off"
                    >
                </div>
            </div>
        </div>
        
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\vphome\resources\views/backend/slide/slide/component/aside.blade.php ENDPATH**/ ?>