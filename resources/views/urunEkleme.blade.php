<?php use App\Http\Controllers\ProductController; ?>

@extends('master')

@section('title', 'Ürün')

@section('content')

<div class="kapsar mt-20">
  <div class="ortala">

    <form id="urunEkleForm" method="POST">
      @csrf
        <label for="name">Ürün Adı</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="slug">Ürün Etiketi</label><br>
        <input type="text" id="slug" name="slug"><br>
        <label for="description">Açıklama</label><br>
        <input type="text" id="description" name="description"><br><br>
        <label for="price">Fiyat</label><br>
        <input type="number" id="price" name="price"><br><br>
        <input hidden type="text" id="id" name="id">
        <input type="text" hidden name="token" value="1|gXVLnS66puPolvgR4DvBZvrZwGAwoDmbaRtXq930">
        <input type="submit" value="Ekle">
      </form> 

</div>
</div>
<script>
  $("#urunEkleForm").submit(function(e){

e.preventDefault();

const form = $(this);

$.ajax({
type: "POST",
url: "/yeni-urun-ekle",
data: form.serialize(),
success: (data) => {
setTimeout(() => {
  window.location.href = '{{route('getById', ['id' =>'+ data);
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
