{{-- @php
    $attributeQueryString = explode(',', request()->get('attribute_id'));
@endphp
@if(!is_null($attributeCatalogue))
    @foreach($attributeCatalogue as $key => $val)
    <div class="attribute">
        <div class="attribute-item attribute-color">
            <div class="label">{{ $val->name }}: <span></span></div>
            @if(!is_null($val->attributes))
            <div class="attribute-value">
                @foreach($val->attributes as $keyAttr => $attr)
                @php
                    $isActive = (is_array($attributeQueryString) && in_array($attr->id, $attributeQueryString)) || ($keyAttr == 0 && empty($attributeQueryString[0]));
                @endphp
                <a 
                    class="choose-attribute {{ ($val->name == 'Màu sắc') ? 'color-item' : '' }} {{ $isActive ? 'active' : '' }}" 
                    data-attributeid="{{ $attr->id }}" 
                    title="{{ $attr->name }}"
                >
                    @if($val->name == 'Màu sắc')
                        <img src="{{ $attr->image }}" alt="{{ $attr->name }}">

                    @else
                        {{ $attr->name }}
                    @endif
                    
                </a>
                @endforeach
            </div>
            @endif
        </div>
    </div>
    @endforeach
@endif

<input type="hidden" name="product_id" value="{{ $product->id }}">
<input type="hidden" name="language_id" value="{{ $config['language'] }}">
<input type="hidden" name="product_gallery" value="{{ $product->album }}"> --}}