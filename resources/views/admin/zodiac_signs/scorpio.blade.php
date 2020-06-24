{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'zodiacsigns'を埋め込む --}}
@section('title', 'Scorpio')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <img src="{{ secure_asset('img/sasoriza-illust5.png')}}" alt="background" class="background-img">
      <p class="zodiactext">ハンサムで力自慢なオリオンは、いつも「天下に自分にかなう者はいない」と自慢をしてはばからなかった。<br>
      それを聞きつけた大地の神ガイアが、少し懲らしめようと、猛毒の蠍を仕向けた。<br>
      すると、オリオンは蠍に刺され、あっけなく死んでしまった。そして、蠍とオリオンは共に星座として天に上げられたのだった。<br>
      星座になってもなおオリオンは蠍を恐れ、蠍座が天に昇る夏には、逃げ出すかのようにオリオン座は地平線の下に隠れてしまうのであった。</p>
    </div>
  </div>
</div>
@endsection