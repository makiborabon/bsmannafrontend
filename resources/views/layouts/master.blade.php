@include('partials.head')
@if (Request::path() === '/')
    @include('partials.header')
@endif
@yield('content')
@include('partials.footer')
