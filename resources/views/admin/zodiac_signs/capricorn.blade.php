{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'zodiacsigns'を埋め込む --}}
@section('title', 'capricorn')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <img src="{{ secure_asset('img/yagiza-illust5.png')}}" alt="background" class="background-img">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <p>昔、神々がナイル川のほとりで宴会を開いていた。羊飼いの守り神である牧神パンは角笛を吹いていた。</p>
      <p>そこに、突如として怪物テュポンが現れた。驚いた神々は姿を動物に変えて、皆逃げていった。</p>
      <p>そのときパンは演奏に夢中だったため逃げ遅れてしまい、とっさに魚に姿を変えて川に飛び込んだものの、</p>
      <p>、あまりにも慌てていたためか上半身が山羊、下半身が魚という奇妙な姿になってしまった。</p>
      <p>その姿を見た神々は大いに笑い、ゼウスは記念として星座として天に残したのであった。</p>
    </div>
  </div>
</div>
@endsection