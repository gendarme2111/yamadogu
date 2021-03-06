<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
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
    <nav class="sticky-top">
        @include('nav')
    </nav>
    <div class="container">
        @include('about')
    </div>
    <div class="container">
        @yield('content')
    </div>
    <footer class="mt-5">
        @include('footer')
    </footer>
</body>
</html>
</html>