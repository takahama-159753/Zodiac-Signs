{{-- layouts/main.blade.phpを読み込む --}}
@extends('layouts.main') {{-- link.blade.phpの@yield('LINKS')に'star sign'を埋め込む --}} 

@section('title', 'links') {{-- link.blade.phpの@yield('content')に以下のタグを埋め込む --}} 
@section('content') 
<div class="container">
<div class="row">
<div class="col-md-11 mx-auto">
  <img src="{{ secure_asset('img/image656-1280x800.jpg')}}" alt="background" class="background-img">
<div class="box2">
<span>
<p class="zodiactext">
  <li>
    <a href="{{url('https://tech-boost.jp') }}">tech boost</a>
  </li>
</span>
<span>
  <li>
   <a href="{{url('http://www.spin.ne.jp/~sibuya-auto/astrology/seiza.html') }}">12星座早見表</a>
  </li>
</span>
<span>
  <li>
   <a href="{{url('https://kw-note.com/translation/12-constellation-symbol/') }}">シンボルと誕生日</a>
  </li>
</span>
<span>
  <li>
     <a href="{{url('https://wondertrip.jp/91208/') }}">星座の歴史</a>
  </li>
</span>
</div>
</div>
</div>
</div>
</div>
@endsection