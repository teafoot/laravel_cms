@if ($paginator->hasPages())
    <nav class="flexbox mt-30">
    @if ($paginator->onFirstPage())
      <a class="btn btn-white disabled" href="#"><i class="ti-arrow-left fs-9 mr-4"></i> Previous</a>
    @else
      <a class="btn btn-white" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="ti-arrow-left fs-9 mr-4"></i> Previous</a>
    @endif

    @if ($paginator->hasMorePages())
      <a class="btn btn-white" href="{{ $paginator->nextPageUrl() }}" rel="next">Next <i class="ti-arrow-right fs-9 ml-4"></i></a>
    @else
      <a class="btn btn-white disabled">Next <i class="ti-arrow-right fs-9 ml-4"></i></a>
    @endif
    </nav>
@endif
