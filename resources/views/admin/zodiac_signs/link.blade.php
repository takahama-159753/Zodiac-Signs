{{-- layouts/main.blade.phpを読み込む --}}
@extends('layouts.main') {{-- link.blade.phpの@yield('LINKS')に'star sign'を埋め込む --}} 

@section('title', 'LINKS') {{-- link.blade.phpの@yield('content')に以下のタグを埋め込む --}} 
@section('content') 
<div class="container">
<div class="row">
<div class="col-md-8 mx-auto">
  <img src="{{ secure_asset('img/image656-1280x800.jpg')}}" alt="background" class="background-img">
<div class="title">参考リンク集</div>
<span>
  <li>
   <p class="zodiactext"><a href="{{url('https://tech-boost.jp') }}">tech boost</a>
  </li>
</span>
<span>
  <li>
  <p class="zodiactext"><a href="{{url('http://www.spin.ne.jp/~sibuya-auto/astrology/seiza.html') }}">12星座早見表</a>
  </li>
</span>
<span>
  <li>
  <p class="zodiactext"><a href="{{url('https://kw-note.com/translation/12-constellation-symbol/') }}">シンボルマークと誕生日の一覧</a>
  </li>
</span>
<span>
  <li>
   <p class="zodiactext"><a href="{{url('https://wondertrip.jp/91208/') }}">星座の歴史</a>
  </li>
</span>
</div>
</div>
</div>
</div>
@endsection