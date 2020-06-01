{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'zodiacsigns'を埋め込む --}}
@section('title', 'sagittarius')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <img src="{{ secure_asset('img/iteza-illust5.png')}}" alt="background" class="background-img">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <p>かつて、上半身が人間で下半身は馬というケンタウロス族がいた。</p>
      <p>荒くれ者な一族だったが、ケイローンは医学や音楽・狩猟にも通じた賢者であった。</p>
      <p>だがある時、ヘラクレスの放った毒矢がケイローンに刺さってしまう。しかし、不死身の体を持ったケイローンは苦しくとも死ぬことはできなかった。</p>
      <p>ケイローンは「死なせて欲しい」とゼウスに懇願し、ようやく死ぬことができた。その死を悼んでゼウスは彼を星座にしたのであった。</p>
      <p>また、いて座の弓は蠍座の心臓アンタレスに向けられているが、これはゼウスの命令だという。蠍が天上で暴れた際もすぐに射ち殺せるように警戒しているためなのである。</p>
    </div>
  </div>
</div>
@endsection