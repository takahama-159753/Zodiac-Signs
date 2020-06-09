{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'zodiacsigns'を埋め込む --}}
@section('title', 'Leo')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <img src="{{ secure_asset('img/shishiza-illust5.png')}}" alt="background" class="background-img">
      <p class="zodiactext">12の冒険を行うこととなった勇者ヘラクレスの最初の冒険は、ギリシアのネメアという谷にいる”化け物ライオン”の退治であった。<br>
      弓や槍、剣で歯が立たないライオンとの三日三晩の奮闘の末、ヘラクレスは持ち前の怪力でライオンを棍棒で叩いたのちに、首を絞めて殺した。<br>
      ヘラクレスの12の冒険で殺された者はすべて星座になることになっていたため、このライオンも天にあげられ「獅子座」となったのであった。<br>
    </div>
  </div>
</div>
@endsection