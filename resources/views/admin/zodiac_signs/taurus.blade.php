{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'zodiacsigns'を埋め込む --}}
@section('title', 'Taurus')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
       <img src="{{ secure_asset('img/oushiza-illust5.png')}}" alt="background" class="background-img">
      <p class="zodiactext">バビロニア時代にはすでに牡牛の星座が設定されていたほど、歴史のある星座です。<br>
      また、ギリシャ時代には、アルデバランは「牛の目」とよばれ、プレアデス星団は“プレアデス”として独立した１つの星座でした。<br>
      このおうし座とプレアデス座はプトレマイオスの48星座に含まれています。<br>
      ギリシャ神話によると、この牛は、フェニキアの王女エウロパをさらうためにゼウスが変身した姿であるとされています。<br>
      牛になったゼウスはエウロパを背中に乗せて海を渡り、クレタ島へ行ったと伝えられています。なお、エウロパはヨーロッパの語源です。<br>
      また、ギリシャ神話では、プレアデス星団とヒアデス星団は、どちらも姉妹と見られています。<br>
      詩人ヘシオドスは「仕事と日々」という詩の中で、プレアデス星団を「農業の季節を知らせる星」といっています。</p>
    </div>
  </div>
</div>
@endsection