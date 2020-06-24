{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'zodiacsigns'を埋め込む --}}
@section('title', 'Pisces')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <img src="{{ secure_asset('img/uoza-illust5.png')}}" alt="background" class="background-img">
      <p class="zodiactext">昔、神々がナイル川のほとりで宴会を開いていた。<br>
      羊飼いの守り神である牧神パンは角笛を吹いていた。<br>
      そこに、突如として怪物テュポンが現れた。驚いた神々は姿を動物に変えて、皆逃げていった。<br>
      美の女神アフロディーテとその子エロスは慌てて魚に姿を変え、川へ飛び込んだ。何度もはぐれそうになった二人は、互いの尾をリボンで結び、どうにか逃げ切ることができたのだった。<br>
      その時の「リボンで結ばれた二匹の魚」が、天で輝く魚座の由来となったのである。</p>
    </div>
  </div>
</div>
@endsection