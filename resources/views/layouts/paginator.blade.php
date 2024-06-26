@if ($paginator->hasPages())
    <div class="row">
        <div class="col-lg-12">
            <ul class="pagination mt-10 flex-wrap justify-content-center wow fadeInUp delay-0-2s">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <span class="page-link"><i class="fas fa-angle-left"></i></span>
                    </li>
                @else
                    <li class="page-item" >
                        <span href="{{ $paginator->previousPageUrl() }}" class="page-link" title="@lang('pagination.previous')"><i class="fas fa-angle-left"></i></span>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled" aria-disabled="true"><a class="page-link"><span>{{ $element }}</span></a></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active" aria-current="page"><a class="page-link"><span>{{ $page }}</span></a></li>
                            @else
                                <li class="page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a href="{{ $paginator->nextPageUrl() }}" class="page-link" title="@lang('pagination.next')"><i class="fas fa-angle-right"></i></a>
                    </li>
                @else
                    <li class="page-item disabled" title="@lang('pagination.next')">
                        <span class="page-link"> <i class="fas fa-angle-right"></i> </span>
                    </li>
                @endif
            </ul>
        </div>
    </div>

@endif
