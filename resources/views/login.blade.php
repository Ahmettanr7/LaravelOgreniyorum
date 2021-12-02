<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{mix('js/app.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <title>Giriş Yap</title>
    
</head>
<body>
    <div class="kapsar">
        <div class="ortala">
            <main class="form-signin" style="float:left; margin-left:40%; margin-top:100px;">
                <form id="loginForm" method="POST">
                @csrf
                  <h3 class="mb-4" style="width: 72px; height:57px; color:#2f5e88">Laravel Öğreniyorum</h3>
                  <h1 class="h3 mb-3 fw-normal">Giriş Yap</h1>
              

                  <div class="form-floating">
                    <input
                    type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                    <label for="floatingInput">Eposta</label>
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                    <label for="floatingPassword">Şifre</label>
                  </div>
              
                  <div class="checkbox mb-3">
                    <label class="mt-3">
                        <a  href="/login">Hesabım yok | Kayıt Ol</a>
                      <input type="checkbox" value="remember-me" id="remember-me"> Beni Hatırla
                    </label>
                  </div>
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Giri Yap</button>
                  <p class="mt-5 mb-3 text-muted">&copy; 2019-2021</p>
                </form>
              </main>
        </div>
    </div>
</body>
</html>

<script>
    $("#loginForm").submit(function(e){
  
  e.preventDefault();
  
  const form = $(this);
  let rememberMe = $("#remember-me");
  $.ajax({
  type: "POST",
  url: "/loginn",
  data: form.serialize(),
  success: (data) => {
    alert(data.message);
    if (rememberMe.is(':checked')) {
    window.localStorage.setItem("email",data.user.email);
    window.localStorage.setItem("token",data.token);
    }
    setTimeout(() => {
      window.location.href = '/'
    }, 500);
    
    
  },
  error: (err,data) => {
  alert(data.message);
  console.log('error : ' + err);
  }
  });
  
  });
  </script>