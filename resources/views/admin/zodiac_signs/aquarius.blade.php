{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'zodiacsigns'を埋め込む --}}
@section('title', 'Aquarius')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <img src="{{ secure_asset('img/mizugameza-illust5.png')}}" alt="background" class="background-img">
      <p>かつて、トロイの山にガニメデという美少年の羊飼いが住んでいた。</p>
      <p>ガニメデを気に入ったゼウスは、オオワシに化けて彼をさらっていった。</p>
      <p>ガニメデはその後、神々の宴会で給仕役として働くことになり、神々の間でも評判となった。</p>
      <p>感心したゼウスは、ガニメデを星座として天に残したのであった。</p>
    </div>
  </div>
</div>
@endsection