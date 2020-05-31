{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'zodiacsigns'を埋め込む --}}
@section('title', 'zodiacsigns')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <img src="{{ secure_asset('img/aries.jpg')}}" alt="background" class="background-img">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <p>おひつじ座は古い星座なので、ギリシア神話にもその物語が伝えられています。</p>
      <p>その物語によると、おひつじ座のモデルは、金の毛をもつ、空飛ぶ牡羊と言われています。</p>
      <p>この牡羊は、テッサリアの王・アタマスの息子・プリクソスと双子の妹・ヘレが、継母・イノーの企みによって生贄にされそうになったとき、</p>
      <p>  ふたりを助け出したヒツジで、ヘルメスが大神・ゼウスから預けられていたヒツジとされています。</p>
      <p>妹のヘレは途中で海に落ちてしまいますが、逃げ延びたプリクソスは、ヒツジが亡くなった後、その毛皮をコルキス王に贈り、国の宝にしたということです。</p>
      <p>その後、このヒツジの皮を手に入れるための冒険が、アルゴ遠征隊の冒険へと繋がっていきますが、このふたりを助け出した牡羊が、おひつじ座のモデルになっています。</p>
    </div>
  </div>
</div>
@endsection