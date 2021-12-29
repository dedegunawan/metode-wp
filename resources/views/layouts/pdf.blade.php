<!DOCTYPE html>
<html>
<head>
    <title>@yield('title_prefix', config('adminlte.title_prefix', ''))
        @yield('title', config('adminlte.title', 'AdminLTE 3'))
        @yield('title_postfix', config('adminlte.title_postfix', ''))</title>

    @stack('css')
    @yield('css')
</head>
<body>
@yield('body')
</body>
</html>
