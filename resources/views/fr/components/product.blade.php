<figure class="product-item product-item--primary"><a class="img-holder"
        href="{{ route('fr.products.details', [$product->category->slug, $product->slug]) }}">
        @isset($badge)
            <span class="product-item__badge badge badge--new">Nouveau</span>
        @endisset
        <img src="{{ asset('uploads/products/' . explode(',', $product->image)[0]) }}" alt="product" /></a>
    <figcaption>
        <a href="{{ route('fr.products.show', $product->category->slug) }}"><span
                class="category_name">{{ $product->category->name }}</span></a>
        <h4 class="title">
            <a href="{{ route('fr.products.details', [$product->category->slug, $product->slug]) }}"
                data-toggle="tooltip" data-placement="top" title="{{ $product->name }}">{{ $product->name }}
            </a>
        </h4><a class="with--line"
            href="{{ route('fr.products.details', [$product->category->slug, $product->slug]) }}">
            <span>Voir produit</span>
        </a>
    </figcaption>
</figure>
