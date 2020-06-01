{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'zodiacsigns'を埋め込む --}}
@section('title', 'Libra')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <img src="{{ secure_asset('img/tennbinnza-illust5.png')}}" alt="background" class="background-img">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <p>善悪を裁く女神アストレイアは、日々、人の心の善悪を計る天秤によって、人間たちに審判を下していた。</p>
      <p>だが、人間たちの不正や争いは後を絶たず、次第にアストレイア一人では裁ききれなくなっていった。</p>
      <p>やがてアストレイアは人間たちに愛想を尽かし、天へと帰ってしまう。</p>
      <p>だが、もう一度人々に正義の心を取り戻してほしいとの願いから、自らの天秤を天に掲げ、星座としたのであった。</p>
    </div>
  </div>
</div>
@endsection