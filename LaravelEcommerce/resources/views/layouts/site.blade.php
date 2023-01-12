<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/css/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/css/font-awesome/css/all.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/x-icon">
</head>
<body>
<header id="site-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">PHP Ecommerce</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/shop">Negozio</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div id="site" class="container">
        @yield('content')
</div>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/validator.min.js')}}"></script>
<script src="{{asset('assets/js/typeahead.js')}}"></script>
<script src="{{asset('assets/js/ecommerce.js')}}"></script>
</body>
</html>