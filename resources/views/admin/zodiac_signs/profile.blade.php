{{-- layouts/main.blade.phpを読み込む --}}
@extends('layouts.main')

{{-- main.blade.phpの@yield('title')に'profile'を埋め込む --}}
@section('title', 'profile')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <div class="row">
    <img src="{{ secure_asset('img/vir.jpg')}}" alt="background" class="background-img">
    <div class="col-md-8 mx-auto">
      <p>初めまして。高浜真之介と申します。</p>
      <p>プログラミングに興味を持ち、techboostに入会しました。</p>
      <p>上手くいかず、課題を行うのに時間が掛かってしまいました。</p>
      <p>最近の趣味は、マジックザギャザリングです。</p>
    </div>
  </div>
</div>
@endsection