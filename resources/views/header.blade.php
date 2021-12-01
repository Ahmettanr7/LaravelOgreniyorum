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
                <li><a href="#">Menu2</a></li>
                <li><a href="#">Menu3</a></li>
            </ul>
        </nav>
        </div>
        <div class="isletme"><p><b>Fivi Yazılım & Reklam Ajansı</b></p></div>
            <div class="search-container">
                <form method="GET">
                    @csrf
                  <input type="text" placeholder="Ürünlerde Ara..." name="arama">
                  <button type="submit">Ara</button>
                </form>
              </div>
        <div class="mini-circle"><img  alt=""></div>
        <div class="mini-circle"><img  alt=""></div>
        <div class="kullanici"><span><b>Ahmet Tanrıkulu</b></span><span>Full Stack Developer</span></div>
        </div>
    </div>
    <div class="header-alt">
<div class="ortala">
    <ul class="menu">
        <a href="">
        <li>Başlangıç</li>
        </a>
        <a href="">
        <li>Fiyat Teklifleri</li>
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

{{-- <script type="text/javascript">
    $("form").on("submit", function (e) {
        var data = $(this).serialize();
        $.ajax({
            type: "POST",
            data: data,
            URL: "{{ route('search', ['name' => '']) }}",
            
            success: function () {
                alert("çalıştı");
            }
        });
        e.preventDefault();
    });
</script> --}}