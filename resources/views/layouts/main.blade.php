<!DOCTYPE HTML>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="{{ secure_asset('js/app.js') }}" defer></script>
 <link rel="dns-prefetch" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
 <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet"> 
 <link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">
 <title>@yield('title')</title>
 <link rel="stylesheet" href="css/normalize.css">
 <link rel="stylesheet" href="css/style.css">
 <link rel=”stylesheet” type=”text/css” href=”style.css”>
</head>


<body>
<header>
 <a href="#" class="btn-push">log out</a>
 <div class="container">
 <div class="header-title-area">
 <h1 class="logo">star sign</h1>
</div>
</div>
</header>

<footer>
<ul class="footer-navigation">
<span>
<li><a href="#">PROFILE </a></li>
</span>
<span>
<li><a href="#">Zodiac Signs </a></li>
</span>
<span>
<li><a href="#">LINKS</a></li>
</span>
<span>
<li><a href="#">QUIZ</a></li>
</span>

<div id="app">
<nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
<div class="container">
<a class="navbar-brand" href="{{ url('/') }}">
{{ config('app.name', 'Laravel') }}
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- Left Side Of Navbar -->
<ul class="navbar-nav mr-auto">

</ul>

<!-- Right Side Of Navbar -->
<ul class="navbar-nav ml-auto">
</ul>
</div>
</div>
</nav>
</footer>
<main class="py-4">
@yield('content')
</main>
</ul>
</html>