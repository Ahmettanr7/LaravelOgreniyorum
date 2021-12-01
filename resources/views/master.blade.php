<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Laravel - @yield('title')</title>
    
</head>
<body>
    {{View('header')}}

    @yield('content')

    {{View('footer')}}
</body>
</html>