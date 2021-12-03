
<script>
    "use strict"
    let email = window.localStorage.getItem("email");
</script>
<div class="kapsar header">
    <div class="header-ust">
        <div class="ortala">
        <a href="/">
        <h2 style="float:left;">Laravel Kursum</h2>
        </a>
      
        <div class="isletme"><p><b>Müşteri Temsilcisi : 0850 254 54 87</b></p></div>
            <div class="search-container">
                <form id="aramaForm" method="POST">
                    @csrf
                  <input type="text" placeholder="Ürünlerde Ara..." name="arama" id="arama">
                  <button type="submit">Ara</button>
                </form>
              </div>
        <?php// if (Cookie::get('accessToken') != null) { ?>
            <?php if (session()->has('email')) { ?>
        <div class="dropdown-container">
            <button><span><i class="fa fa-user-alt" style="margin-right:10px"></i><b style="margin-right:15px;">{{session()->get('name')}} </b></button>
            <nav>
                <ul>
                    <li><a href="{{route('AccountView')}}"><i class="fa fa-chevron-right" style="font-size:10px; margin-right:3px;"></i> Hesabım</a></li>
                    <li><a href="#"><i class="fa fa-chevron-right" style="font-size:10px; margin-right:3px;"></i>Siparişlerim</a></li>
                    <li><a href="#"><i class="fa fa-chevron-right" style="font-size:10px; margin-right:3px;"></i>Favorilerim</a></li>
                    <li><a href="{{route('logout')}}" style="float:right; padding:15px;">Çıkış yap</a></li>
                </ul>
            </nav>
            </div>
        <?php } else{?>
            <a href="{{route('registerView')}}">
                <div class="mini-circle">Üye Ol</div>
            </a>
            <a href="{{route('loginView')}}">
                {{-- <i class="fa fa-sign-in-alt" style="margin-right:8px; font-size:12px;"></i> --}}
            <div class="mini-circle">Üye Girişi</div>
            </a>
        <?php } ?>
        </div>
    </div>
    <div class="header-alt">
<div class="ortala">
    <ul class="menu">
        <a href="/">
        <li>Başlangıç</li>
        </a>
        <a href="{{route('yeniUrunView')}}">
        <li>Ürün Ekle</li>
        </a>
        <a href="">
        <li>Satışlar</li>
        </a>
        <a href="">
        <li>Müşteriler</li>
        </a>
        <a href="">
        <li>Hizmetler ve Ürünler</li>
        </a>
        <a href="">
        <li>Tahsilatlar</li>
        </a>
        <a href="">
        <li>Giderler</li>
        </a>
        <a href="">
        <li>Görüşme Kayıtları</li>
        </a>

    </ul>
</div>
    </div>
</div>

<script>
    $("#aramaForm").submit(function(e){
  
  e.preventDefault();
  
  const form = $(this);
  let arama = $("#arama").val();
  window.location.href = '/arama/'+arama; 
  
  });
  </script>