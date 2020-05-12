{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <p>このサイトは、12星座についてのある程度正しい知識がつき、星座の間違った知識を解決できるように制作をしたサイトです。</p>
      <p>星座について興味がある人。星座について学習をしてる人。星座について知らない人。</p>
      <p>このサイトの閲覧を機に12星座について学んでくれることを切に願います。</p>
    </div>
  </div>
</div>@endsection