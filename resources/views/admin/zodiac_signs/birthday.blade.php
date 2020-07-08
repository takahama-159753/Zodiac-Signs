{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'star sign'を埋め込む --}}
@section('title', 'birthday')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="form-group row">
     <img src="{{ secure_asset('img/image656-1280x800.jpg')}}" alt="background" class="background-img1">
      <div class="box1">
    <form action="{{ action('Admin\birthdayController@selcetZodiacsigns') }}" method="post" enctype="multipart/form-data">
    <input type="date" name="birthday" max="9999-12-31">
    <input type="submit" class="btn btn-primary" value="調べる">
    {{ csrf_field() }}
    </form>
      </div>
     </div>
    </div>
  </div>
</div>
@endsection