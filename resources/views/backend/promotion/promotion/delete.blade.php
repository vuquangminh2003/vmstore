@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']])

<form action="{{ route('promotion.destroy', $promotion->id) }}" method="post" class="box">
    @csrf
    @method('DELETE')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông tin chung</div>
                    <div class="panel-description">
                        <p>Bạn đang muốn xóa bản ghi: {{ $promotion->name }}</p>
                        <p>Lưu ý: Không thể khôi phục bản ghi sau khi xóa. Hãy chắc chắn bạn muốn thực hiện chức năng này</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Tên Bản ghi <span class="text-danger">(*)</span></label>
                                    <input 
                                        type="text"
                                        name="name"
                                        value="{{ old('name', ($promotion->name) ?? '' ) }}"
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                        readonly
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="text-right mb15">
            <button class="btn btn-danger" type="submit" name="send" value="send">Xóa dữ liệu</button>
        </div>
        <div class="text-right mb15">
            <a href="{{ route('promotion.index') }}" class="btn btn-success" type="submit" name="send" value="send">Quay lại</a>
        </div>
    </div>
</form>
