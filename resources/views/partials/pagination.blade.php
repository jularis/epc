
    <div class="pagination-area mt-20 mb-30">
        @if ($paginator->hasPages())
        <ul>
                @if ($paginator->onFirstPage())
                <li aria-disabled="true" aria-label="&laquo; Previous">
                    <span class="sr-only">Previous</span>
                </li>
                @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                        <span class="fa-light fa-angle-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                @endif

                @foreach ($elements as $element)

                    @if (is_string($element))
                    <li><a href="#">{{ $element }}</a></li>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                            <li><a href="#">{{ $page }}</a></li>
                            @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach


                @if ($paginator->hasMorePages())
                <li>
                    <a  href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                        <span class="fa-light fa-angle-right"></span>
                        <span class="sr-only">Suiv</span>
                    </a>
                </li>
                @else
                <li aria-disabled="true" aria-label="Next">
                        <span class="sr-only">Suiv</span>
                </li>
                @endif
        </ul>
        @endif
    </div>
</div>
