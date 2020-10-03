<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css”>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <header>
        @include('header')
    </header>
    <div class="container-fluid">
        @yield('headerimg')
    </div>
    <br>
    <nav class="sticky-top">
        @include('nav')
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <footer class="mt-5">
        @include('footer')
    </footer>
</body>
</html>
</html>