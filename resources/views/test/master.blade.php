<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
@includeIf('elems.header')
<aside>
    сайдбар
</aside>
<main>
    @section('sidebar')
        <p>Это главная боковая панель.</p>
    @show
    @yield('content')
</main>
@includeIf('elems.footer')
</body>
</html>
