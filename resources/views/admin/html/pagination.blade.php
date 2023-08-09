@if ($paginator->hasPages())
    <ul class="pagination clearfix">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="atbd-pagination__link pagination-control disabled"><span class="la la-angle-left"></span></a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="atbd-pagination__link pagination-control" rel="prev"><span class="la la-angle-left"></span></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a class="atbd-pagination__link disabled"><span class="page-number">{{ $element }}</span></a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="atbd-pagination__link active"><span class="page-number">{{ $page }}</span></a>
                    @else
                        <a href="{{ $url }}" class="atbd-pagination__link"><span class="page-number">{{ $page }}</span></a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="atbd-pagination__link pagination-control" rel="next"><span class="la la-angle-right"></span></a>
        @else
            <a class="atbd-pagination__link pagination-control disabled"><span class="la la-angle-right"></span></a>
        @endif
    </ul>
@endif
