@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled">
                <a aria-label="Previous">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    <span aria-hidden="true">Prev</span>
                </a>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    <span aria-hidden="true">Prev</span>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active">
                            <a>{{ $page }}</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ $url }}">
                                {{ $page }}
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                    <span aria-hidden="true">Next</span>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>
            </li>
        @else
            <li class="disabled">
                <a aria-label="Next">
                    <span aria-hidden="true">Next</span>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>
            </li>
        @endif
    </ul>
@endif
