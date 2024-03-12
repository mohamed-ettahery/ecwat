<figure class="product-item product-item--primary"><a class="img-holder"
        href="{{ route('en.products.details', [$product->category->en_slug, $product->en_slug]) }}">
        @isset($badge)
            <span class="product-item__badge badge badge--new">New</span>
        @endisset
        <img src="{{ asset('uploads/products/' . explode(',', $product->image)[0]) }}" alt="product" /></a>
    <figcaption>
        <a href="{{ route('en.products.show', $product->category->en_slug) }}"><span
                class="category_name">{{ $product->category->en_name }}</span></a>
        <h4 class="title">
            <a href="{{ route('en.products.details', [$product->category->en_slug, $product->en_slug]) }}"
                data-toggle="tooltip" data-placement="top" title="{{ $product->en_name }}">{{ $product->en_name }}
            </a>
        </h4><a class="with--line"
            href="{{ route('en.products.details', [$product->category->en_slug, $product->en_slug]) }}">
            <span>View Product</span>
        </a>
    </figcaption>
</figure>
