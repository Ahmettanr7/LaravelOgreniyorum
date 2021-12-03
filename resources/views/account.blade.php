
    @extends('master')

@section('title', 'Ürünler')

@section('content')
    <div class="kapsar">
        <div class="ortala">
                <div class="card">
                    <img style="width: 150px; height:150px;" src="https://res.cloudinary.com/ahmettanrikulu/image/upload/v1628732760/ahmettanrikulu.cf/profile-pic_9_wez2vc.png" alt="John" style="width:100%">
                    <h1>{{session()->get('name')}}</h1>
                    <p class="title">Full Stack Developer</p>
                    <p>{{session()->get('email')}}</p>
                    <a href="#" title="Sepetim"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#" title="Siparişlerim"><i class="fa fa-history"></i></a>
                    <a href="#" title="Favorilerim"><i class="fa fa-heart"></i></a>
                    <p><button onclick="window.location.href = '{{route('EditAccountView')}}'">Hesabı Düzenle</button></p>
                  </div>
        </div>
    </div>
@stop