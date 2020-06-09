{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'star sign'を埋め込む --}}
@section('title', 'birthday')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
     <img src="{{ secure_asset('img/image656-1280x800.jpg')}}" alt="background" class="background-img1">
    <div style="box1"><input type="date" name="calendar" max="9999-12-31"></div>
    <div style="box1"><a href="{{url('admin/zodiac_signs/zodiacsigns')}}">調べる</a></div>
    </div>
  </div>
</div>
@endsection