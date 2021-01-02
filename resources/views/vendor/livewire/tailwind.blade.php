<div class="containerExposants">
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="containerPaginate">
            <div class="listPaginate">

                <span>
                    <span>
                    @if ($paginator->onFirstPage())
                            <span class="listPaginateNext">

                        </span>
                        @else
                            <button wire:click="previousPage" wire:loading.attr="disabled"
                                    dusk="previousPage.before"
                                    class="listPaginateNext">

                        </button>
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
                                        <button wire:click="gotoPage({{ $page }})" class="buttonPaginate"
                                                aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                                {{ $page }}
                                            </button>
                                    @endif
                                    </span>
                            @endforeach
                        @endif
                    @endforeach
                    <span>
                    @if ($paginator->hasMorePages())
                            <button wire:click="nextPage" wire:loading.attr="disabled" dusk="nextPage.before"
                                    class="listPaginatePrevious">

                        </button>
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

