{{-- layouts/main.blade.phpを読み込む --}}
@extends('layouts.main')

{{-- link.blade.phpの@yield('LINKS')に'star sign'を埋め込む --}}
@section('title', 'LINKS')

{{-- link.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 

<div class="link-title">参考リンク</div>
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
<span>
  <li>
    <a href="#">シンボルマークと誕生日の一覧</a>
  </li>
</span>
<span>
  <li>
    <a href="#">星座の歴史</a>
  </li>
</span>
</div>
@endsection