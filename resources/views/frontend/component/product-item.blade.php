@php
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
@endphp
{{-- @php
    $lang = $product->languages ?? collect(); // nếu null thì thay bằng collection rỗng
    $langItem = $lang->first(); // an toàn vì $lang luôn là collection

    $name = $langItem?->pivot->name ?? 'Tên sản phẩm';
    $canonical = write_url($langItem?->pivot->canonical ?? '#');

    $image = image($product->image ?? '');
    $price = getPrice($product);

    $cat = $product->product_catalogues->first() ?? null;
    $catLang = $cat?->languages->first() ?? null;
    $catName = $catLang?->pivot->name ?? '';

    $review = getReview($product);
@endphp --}}


<div class="product-item product">
    
    <a href="{{ $canonical }}" class="image img-scaledown img-zoomin"><img src="{{ $image }}" alt="{{ $name }}"></a>
    <div class="info">
        {{-- <div class="category-title"><a href="{{ $canonical }}" title="{{ $name }}">{{ $catName }}</a></div> --}}
        <h3 class="title"><a href="{{ $canonical }}" title="{{ $name }}">{{ $name }}</a></h3>
        {{-- <div class="rating">
            <div class="uk-flex uk-flex-middle">
                <div class="star-rating">
                    <div class="stars" style="--star-width: {{ $review['star'] }}%"></div>
                </div>
                <span class="rate-number">({{ $review['count'] }} đánh giá)</span>
            </div>
        </div> --}}
        <div class="product-group">
            {!! $price['html'] !!}
        </div>
    </div>
</div>