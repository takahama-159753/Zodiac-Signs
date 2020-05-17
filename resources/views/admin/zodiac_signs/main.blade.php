{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'star sign'を埋め込む --}}
@section('title', 'star sign')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
<img src="{{ secure_asset('img/large.jpg')}}" alt="background" class="background-img">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>ABOUT</h2>
      <p>このサイトは、12星座についてのある程度正しい知識がつき、星座の間違った知識を解決できるサイトです。</p>
      <p>星座について興味がある人。星座について学習をしてる人。星座について知らない人。</p>
      <p>このサイトの閲覧を機に12星座について学んでくれることを切に願います。</p>
    </div>
  </div>
</div>
@endsection