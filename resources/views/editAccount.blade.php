
    @extends('master')

    @section('title', 'Ürünler')
    
    @section('content')
        <div class="kapsar">
            <div class="ortala">
                <form id="hesapDuzenleForm" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                      <label for="name">Ad Soyad *</label><br>
                      <input type="text" id="name" name="name" value="{{session()->get('name')}}"><br>
                      <label for="email">E-Posta *</label><br>
                      <input type="email" id="email" name="email" value="{{session()->get('email')}}"><br><br>
                      <label for="oldpassword">Mevcut Şifre *</label><br>
                      <input type="password" id="oldpassword" name="oldpassword"><br><br>
                      <label for="password">Yeni Şifre</label><br>
                      <input type="password" id="password" name="password"><br><br>
                      <label for="password_confirmation">Yeni Şifre Doğrulama</label><br>
                      <input type="password" id="password_confirmation" name="password_confirmation"><br><br>
                      <input hidden type="text" id="id" name="id" value="{{session()->get('id')}}">
                      <input type="submit" value="Değişiklikleri Kaydet">
                    </form> 
            </div>
        </div>
        <script>
            $("#hesapDuzenleForm").submit(function(e){
          
          e.preventDefault();
          
          const form = $(this);
          
          $.ajax({
          type: "POST",
          url: "/hesap-duzenle",
          data: form.serialize(),
          success: (data) => {
        //   setTimeout(() => {
        //     window.location.href = "{{route('AccountView')}}";
        //   }, 300);
        alert(data);
          },
          error: (err,data) => {
          alert("Bir hata oluştu");
          console.log('error : ' + err);
          alert(err.error)
          }
          });
          
          });
          </script>
    @stop