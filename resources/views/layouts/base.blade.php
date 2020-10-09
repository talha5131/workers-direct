@if (\Request::is('/'))
@include('layouts.header')
@else
@include('layouts.header-2')
@endif

<title>@yield('title')</title>
<meta name="description" content="@yield('description')">
<link rel="canonical" href="@yield('canonical')">
<link rel="stylesheet" href="style.css">



@yield('content')



@include('layouts.footer')