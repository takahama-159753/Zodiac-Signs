{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')

{{-- main.blade.phpの@yield('title')に'star sign'を埋め込む --}}
@section('title', 'QUIZ')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') ]
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="form-group row">
       <img src="{{ secure_asset('img/image656-1280x800.jpg')}}" alt="background" class="background-img1">
        <div class="box1">
          <h1 class=”title”>クイズ</h1>
          <span>
          <li>
            <a href="{{url('admin/zodiac_signs/answer?ans=1') }}">回答1</a>
          </li>
          </span>
          <span>
          <li>
            <a href="{{url('admin/zodiac_signs/answer?ans=2') }}">回答2</a>
          </li>
          </span>
          <li>
            <a href="{{url('admin/zodiac_signs/answer?ans=3') }}">回答3</a>
          </li>
          </span>
        </div>
       </div>
      </div>
    </div>
  </div>
</div>
@endsection