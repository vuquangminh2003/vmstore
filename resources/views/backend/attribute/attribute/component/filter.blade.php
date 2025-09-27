<form action="{{ route('attribute.index') }}">
    <div class="filter-wrapper">
        <div class="uk-flex uk-flex-middle uk-flex-space-between">
            @include('backend.dashboard.component.perpage')
            <div class="action">
                <div class="uk-flex uk-flex-middle">
                    {{-- @include('backend.dashboard.component.filterPublish') --}}
                    @php
                        $attributeCatalogueId = request('attribute_catalogue_id') ?: old('attribute_catalogue_id');
                    @endphp
                    <select name="attribute_catalogue_id" class="form-control setupSelect2 ml10">
                        @foreach($dropdown as $key => $val)
                        <option {{ ($attributeCatalogueId == $key)  ? 'selected' : '' }} value="{{ $key }}">{{ $val }}</option>
                        @endforeach
                    </select>
                    @include('backend.dashboard.component.keyword')
                    <a href="{{ route('attribute.create') }}" class="btn btn-danger"><i class="fa fa-plus mr5"></i>{{ __('messages.attribute.create.title') }}</a>
                </div>
            </div>
        </div>
    </div>
</form>

