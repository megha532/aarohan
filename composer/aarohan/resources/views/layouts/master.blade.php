<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('includes.head_content')
</head>
<body>
@include('includes.header')
    @yield('content')

@include('includes.footer')
@include('includes.scripts')
</body>
</html>
