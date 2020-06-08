{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'zodiacsigns'を埋め込む --}}
@section('title', 'Aries')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
    　<img src="{{ secure_asset('img/ohitujiza-illust5.png')}}" alt="background" class="background-img">
      <p class="zodiactext">おひつじ座は古い星座なので、ギリシア神話にもその物語が伝えられています。<br>
      その物語によると、おひつじ座のモデルは、金の毛をもつ、空飛ぶ牡羊と言われています。<br>
      この牡羊は、テッサリアの王・アタマスの息子・プリクソスと双子の妹・ヘレが、継母・イノーの企みによって生贄にされそうになったとき、<br>
      ふたりを助け出したヒツジで、ヘルメスが大神・ゼウスから預けられていたヒツジとされています。<br>
      妹のヘレは途中で海に落ちてしまいますが、逃げ延びたプリクソスは、ヒツジが亡くなった後、その毛皮をコルキス王に贈り、国の宝にしたということです。<br>
      その後、このヒツジの皮を手に入れるための冒険が、アルゴ遠征隊の冒険へと繋がっていきますが、このふたりを助け出した牡羊が、おひつじ座のモデルになっています。</p>
    </div>
  </div>
</div>
@endsection