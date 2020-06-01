{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'zodiacsigns'を埋め込む --}}
@section('title', 'zodiacsigns')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <img src="{{ secure_asset('img/ohitujiza-illust5.png')}}" alt="background" class="background-img">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <p>バビロニア時代にはすでに牡牛の星座が設定されていたほど、歴史のある星座です。。</p>
      <p>また、ギリシャ時代には、アルデバランは「牛の目」とよばれ、プレアデス星団は“プレアデス”として独立した１つの星座でした。</p>
      <p>このおうし座とプレアデス座はプトレマイオスの48星座に含まれています。、</p>
      <p>ギリシャ神話によると、この牛は、フェニキアの王女エウロパをさらうためにゼウスが変身した姿であるとされています。</p>
      <p>牛になったゼウスはエウロパを背中に乗せて海を渡り、クレタ島へ行ったと伝えられています。なお、エウロパはヨーロッパの語源です。</p>
      <p>また、ギリシャ神話では、プレアデス星団とヒアデス星団は、どちらも姉妹と見られています。</p>
      <p>詩人ヘシオドスは「仕事と日々」という詩の中で、プレアデス星団を「農業の季節を知らせる星」といっています。</p>
    </div>
  </div>
</div>
@endsection