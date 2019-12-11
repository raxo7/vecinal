<html>
<head>
    <title>@yield('title')</title>
    @include('shared.head')
</head>
<body>
    @include('shared.header')

    @yield('body')

    @include('shared.scripts')
</body>
</html>
