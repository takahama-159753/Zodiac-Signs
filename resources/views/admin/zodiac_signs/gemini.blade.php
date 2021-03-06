{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.main')


{{-- main.blade.phpの@yield('title')に'zodiacsigns'を埋め込む --}}
@section('title', 'Gemini')

{{-- main.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content') 
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <img src="{{ secure_asset('img/futagoza-illust5.png')}}" alt="background" class="background-img">
      <p class="zodiactext">ギリシア神話の双子ディオスクーロイが星座になったといわれる。<br>
      この双子はスパルタ王妃レーダーの息子で、兄のカストールの父はスパルタ王テュンダレオース、弟のポリュデウケースの父は大神ゼウスであったとされる。<br>
      そのため、ポリュデウケースは不死であったメッセーネー王アパレウスの双子の息子イーダースとリュンケウスとの争いでカストールが死ぬと、<br>
      ポリュデウケースはゼウスに二人で不死を分かち合いたいと願った[6]。ゼウスはその願いを受け入れ、二人を天に上げて星座とした。<br>
      この2つの星は、ギリシャだけではなく、バビロニア、エジプト、フェニキア、日本でも兄弟として扱われている。</p>
    </div>
  </div>
</div>
@endsection