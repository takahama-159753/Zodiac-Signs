{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'zodiacsigns'を埋め込む --}}
@section('title', 'Virgo')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <img src="{{ secure_asset('img/otomeza-illust5.png')}}" alt="background" class="background-img">
      <p class="zodiactext">豊穣の女神デメテルの娘、ペルセフォネは、とてもかわいらしい少女だった。<br>
      しかし、ある時、ペセフォネに恋をした冥界の王ハーデスによって、冥界に連れ去られてしまう。<br>
      デメテルは娘を取り返したものの、ペルセフォネは冥界のザクロを4粒口にしてしまっていた。<br>
      そのため、一年のうち4か月は冥界で暮らさなくてはならないこととなった。<br>
      そして、ペルセフォネが不在の4か月間、デメテルは悲しんで洞窟にこもってしまうこととなった。<br>
      そのデメテルの”娘を想い、心配している姿”が「乙女座」になったと言われている。</p>
    </div>
  </div>
</div>
@endsection