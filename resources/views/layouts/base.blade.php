@if (\Request::is('/'))
@include('layouts.header')
@else
@include('layouts.header-2')
@endif

<title>@yield('title')</title>



@yield('content')



@include('layouts.footer')