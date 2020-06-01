{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'zodiacsigns'を埋め込む --}}
@section('title', 'zodiacsigns')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <img src="{{ secure_asset('img/kaniza-illust5.png')}}" alt="background" class="background-img">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <p>ゼウスの子勇者ヘラクレス（ヘルクレス座）は、誤って自分の子を殺した罪を償うため、12の冒険を行うことになった。</p>
      <p>そのうちの1つがヒュドラー（うみへび座）の退治である。化け蟹カルキノスは、最初はヘラクレスとヒュドラの戦いを見ていた。</p>
      <p>次第に同じ沼に住んでいる友人であるヒュドラが形勢不利になったため、飛び出してヘラクレスの足を挟んだ。</p>
      <p>しかし、ヘラクレスは振り払い踏みつぶした。</p>
      <p>なお、別のパターンとして以下のような説もある。</p>
      <p>ゼウスの妻である女神ヘーラーは、ゼウスの愛人の子であるヘラクレスを快く思っておらず、巨大な化け蟹を使いに出した。</p>
      <p>化け蟹ははさみでヘラクレスの脚を切ろうとした。しかし、ヒュドラとの格闘中のヘラクレスは、全く気付かずに化け蟹を踏み潰して殺した。</p>
      <p>この捨て身の勇気を認められ、化け蟹は天に昇りかに座となった。</p>
    </div>
  </div>
</div>
@endsection