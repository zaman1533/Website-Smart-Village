<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>

    @include('layouts.partials.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.partials.footer')

</body>
</html>
