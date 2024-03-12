<li class="category-item">
    @if ($category->children->count())
        <span class="category-toggle"><i class="fa-solid fa-caret-right"></i></span>
    @else
        <span><i class="fa-light fa-angle-right" style="font-size: 10px;"></i></span>
    @endif
    <a href="{{ route('fr.products.show', implode('/', (array) \App\Http\Controllers\ProductController::CategoryImbrication($category, [strtolower($category->name)], 'fr', true))) }}"
        class="category-link {{ Request::is('products/' . implode('/', (array) \App\Http\Controllers\ProductController::CategoryImbrication($category, [strtolower($category->name)], 'fr', true))) ? 'primary-color' : '' }}">
        {{ $category->name }}
    </a>
    <!-- Check if the category has children -->
    @if ($category->children->count())
        <ul class="category-sublist">
            @foreach ($category->children as $child)
                @include('fr.components.category_partial', ['category' => $child])
            @endforeach
        </ul>
    @endif
</li>
