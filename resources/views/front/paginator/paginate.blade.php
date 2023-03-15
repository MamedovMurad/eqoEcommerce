

    
        
        
<div class="shop_toolbar t_bottom">
      
        @if ($paginator->hasPages())
      
        <div class="pagination">
            <ul>
          {{-- Previous Page Link --}}
          @if ($paginator->onFirstPage())
            
               
            
          @else
             
                <li>  <a href="{{ $paginator->previousPageUrl() }}" >   
                 <<
                </a></li>
            
          @endif
     
          {{-- Pagination Elements --}}
          @foreach ($elements as $element)
              {{-- "Three Dots" Separator --}}
              @if (is_string($element))
               
                      <a href="">{{ $element }}</a>
                   
              @endif
      
              {{-- Array Of Links --}}
              @if (is_array($element))
                  @foreach ($element as $page => $url)
                      @if ($page == $paginator->currentPage())
                      <li class="current">{{ $page }}</li>
                      @else
                      <li><a href="{{ $url }}">{{ $page }}</a></li>
                      @endif
                  @endforeach
              @endif
          @endforeach
    
          {{-- Next Page Link --}}
          @if ($paginator->hasMorePages())
          <li class="next">  <a href="{{ $paginator->nextPageUrl() }}" > >></a></li>
          @else
              
           
          @endif
        </ul>
        </div>
 
      @endif
</div>
