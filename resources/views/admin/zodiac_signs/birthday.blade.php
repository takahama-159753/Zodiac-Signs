{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'star sign'を埋め込む --}}
@section('title', 'birthday')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
<img src="{{ secure_asset('img/image656-1280x800.jpg')}}" alt="background" class="background-img">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <div class="birthday">
          <input type="date" name="calendar" max="9999-12-31">
          <input type="button" onclick="location.href='./index.html'" value="調べる">
        </div>
    </div>
  </div>
</div>
@endsection