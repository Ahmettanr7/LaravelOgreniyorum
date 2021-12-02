<?php use App\Http\Controllers\ProductController; ?>

@extends('master')

@section('title', 'Ürün')

@section('content')

<div class="kapsar mt-20">
  <div class="ortala">

    <form id="urunDuzenleForm" method="POST">
      @csrf
      {{ method_field('PUT') }}
        <label for="name">Ürün Adı</label><br>
        <input type="text" id="name" name="name" value="{{$urun['name']}}"><br>
        <label for="description">Açıklama</label><br>
        <input type="text" id="description" name="description" value="{{$urun['description']}}"><br><br>
        <label for="price">Fiyat</label><br>
        <input type="text" id="price" name="price" value="{{$urun['price']}}"><br><br>
        <input hidden type="text" id="id" name="id" value="{{$urun['id']}}">
        <input type="submit" value="Değişiklikleri Kaydet">
      </form> 

</div>
</div>
<script>
  $("#urunDuzenleForm").submit(function(e){

e.preventDefault();

const form = $(this);

$.ajax({
type: "POST",
url: "/product/update",
data: form.serialize(),
success: (data) => {
setTimeout(() => {
  window.location.href = '{{route('getById', ['id' => <?=$urun['id']?>])}}');
}, 300);
},
error: (err,data) => {
alert("Bir hata oluştu");
console.log('error : ' + err);
}
});

});
</script>
@stop
