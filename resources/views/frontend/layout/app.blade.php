<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Marko Agency')</title>
    @include('frontend/layout.css')
</head>
<body>

    @include('frontend/layout.header')

    @include('frontend/layout.sidebar')

    @include('frontend/layout.search-form')

    <main>
        @yield('content')
    </main>

    @include('frontend/layout.footer')

    @include('frontend/layout.script')
</body>
</html>
