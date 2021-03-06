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
    <link href="{{ secure_asset('css/zodiacsigns.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    <link rel=”stylesheet” type=”text/css” href=”style.css”>
    </div>
  </head>
  
  <body>
  <header>
    @guest
    @else
     <div class="box5">
      <form id="logout-form" action="{{ route('logout') }}" method="POST">
        <input type="submit" class="btn btn-primary" value="LOGOUT">
      </div>
        @csrf
      </form>
    @endguest
    <div class="container">
      <div class="header-title-area">
        <h1 class="logo">star sign</h1>
      </div>
    </div>
  </header>
    
    <main class="py-4">@yield('content') </main>
    
    <footer>
      <ul class="footer-navigation">
        <span>
          <li>
            <a href="{{url('admin/zodiac_signs/profile') }}">PROFILE </a>
          </li>
        </span>
        <span>
          <li>
            <a href="{{url('admin/zodiac_signs/birthday') }}">Zodiac Signs </a>
          </li>
        </span>
        <span>
          <li>
            <a href="{{url('admin/zodiac_signs/link') }}">LINKS</a>
          </li>
        </span>
        <span>
          <li>
            <a href="{{url('admin/zodiac_signs/top') }}">TOP</a>
          </li>
        </span>
        <li>
            <a href="{{url('register') }}">CREATEACCOUNT</a>
          </li>
        </span>
        <span>
          <li>
            <a href="{{url('admin/zodiac_signs/quiz') }}">QUIZ</a>
          </li>
        </span>
        
        @guest 
        <li>
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @else {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}} 
        <li class="nav-item dropdown">
          <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }} 
            <span class="caret"></span>
          </a>　　　　　 
        </li>
        @endguest 
        
        <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
          <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }} </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto"></ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto"></ul>
          　　　　　</div>
          　　　</div>
          　</div>
        　</nav>
      　</footer>
    　</body>
 　　　 </ul>