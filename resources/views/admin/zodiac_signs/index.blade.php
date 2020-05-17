{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'star sign'を埋め込む --}}
@section('title', 'star sign')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<ul class="body-link">
<span>
  <a href="#">参考リンク</a>
</span>
<span>
  <li>
    <a href="#">tech boost</a>
  </li>
</span>
<span>
  <li>
    <a href="#">12星座早見表</a>
  </li>
</span>
</div>
@endsection