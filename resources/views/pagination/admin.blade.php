@if ($paginator->hasPages()) 
       
        @if ($paginator->onFirstPage()) 
        <li class="page-item"><a class="page-link" href="javascript:void(0)" tabindex="-1">Précédente</a></li>
        @else  
        <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">Précédente</a>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))  
            <li class="page-item active"><a class="page-link" href="{{ $url }}">{{ $element }}</a></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())  
                    <li class="page-item active"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @else  
                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages()) 
        <li class="page-item"> <a href="{{ $paginator->nextPageUrl() }}" class="page-link">Suivante</i></a></li>
        @else 
        <li class="page-item"> <a class="page-link" href="javascript:void(0)">Suivante</i></a></li>
        @endif
 
@endif 