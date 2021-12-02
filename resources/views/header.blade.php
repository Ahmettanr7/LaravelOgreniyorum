
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
        <div class="dropdown-container">
        <button><span><b>Kolay</b></span><span><b>Menu</b></span></button>
        <nav>
            <ul>
                <li><a href="/urunler">Ürünler</a></li>
                <li><a href="{{route('yeniUrunView')}}">Ürün Ekle</a></li>
                <li><a href="#">Menu3</a></li>
            </ul>
        </nav>
        </div>
        <div class="isletme"><p><b>Fivi Yazılım & Reklam Ajansı</b></p></div>
            <div class="search-container">
                <form id="aramaForm" method="POST">
                    @csrf
                  <input type="text" placeholder="Ürünlerde Ara..." name="arama" id="arama">
                  <button type="submit">Ara</button>
                </form>
              </div>
        <?php if (Cookie::get('accessToken') != null) { ?>
        <a href="/logout">
        <div class="mini-circle"><i class="fa fa-sign-in-alt"></i></div>
        </a>
        <div class="mini-circle"><img  alt=""></div>
        <div class="kullanici"><span><b>Ahmet Tanrıkulu</b></span><span>Full Stack Developer</span></div>
        <?php } else{?>
            <a href="{{route('registerView')}}">
            <div class="mini-circle">Kayıt</div>
            </a>
            <a href="{{route('loginView')}}">
            <div class="mini-circle"><i class="fa fa-sign-in-alt"></i></div>
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