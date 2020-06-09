{{-- layouts/main.blade.phpを読み込む --}}
@extends('layouts.main')

{{-- main.blade.phpの@yield('title')に'profile'を埋め込む --}}
@section('title', 'profile')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <img src="{{ secure_asset('img/image656-1280x800.jpg')}}" alt="background" class="background-img">
      <div style="width:300px; margin:0 auto;">
      <p class="zodiactext">
         初めまして。高浜真之介と申します。<br>
         プログラミングに興味を持ち、techboostに入会しました。<br>
         上手くいかず、課題を行うのに時間が掛かってしまいました。<br>
         最近の趣味は、マジックザギャザリングです。<br>
        </div>
    </div>
  </div>
</div>
@endsection