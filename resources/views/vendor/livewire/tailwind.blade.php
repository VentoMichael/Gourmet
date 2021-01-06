<div class="containerExposants">
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="containerPaginate">
            <div class="listPaginate">

                <span style="position:relative;">
                    <span>
                    @if ($paginator->onFirstPage())
                            <span class="@if($paginator->onFirstPage()) hidden @endif listPaginateNext">

                        </span>
                        @else
                            <a href="{{$paginator->previousPageUrl()}}" wire:click="previousPage" wire:loading.attr="disabled"
                                    dusk="previousPage.before"
                                    class="listPaginateNext">
                        </a>
                        @endif
                </span>
                        {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                    <span class="">{{ $element }}</span>
                                </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                <span class="paginationNumber" wire:key="paginator-page{{ $page }}">
                                        @if ($page == $paginator->currentPage())
                                        <span aria-current="page">
                                                <span class="currentPaginate buttonPaginate">{{ $page }}</span>
                                            </span>
                                    @else
                                        <a href="gallery?page={{ $page }}" wire:click="gotoPage({{ $page }})" class="buttonPaginate"
                                                aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                                {{ $page }}
                                            </a>
                                    @endif
                                    </span>
                            @endforeach
                        @endif
                    @endforeach
                    <span>
                    @if ($paginator->hasMorePages())
                            <a href="{{ $paginator->nextPageUrl() }}" wire:click="nextPage" wire:loading.attr="disabled" dusk="nextPage.before"
                                    class="listPaginatePrevious">
                        </a>
                        @else
                            <span class="listPaginatePrevious">

                        </span>
                        @endif
                </span>
                        </span>

            </div>
        </nav>
    @endif
</div>

