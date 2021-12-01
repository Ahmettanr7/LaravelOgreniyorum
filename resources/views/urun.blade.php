<?php use App\Http\Controllers\ProductController; ?>
@extends('master')

@section('title', 'Ürün')

@section('content')

<div class="kapsar">
  <div class="ortala">
    <table>
  <tr>
    <th>Ürün Adı</th>
    <th>Açıklama</th>
    <th>Fiyat</th>
    <th></th>
  </tr>

   
  <tr>

    <td><?=$urun['name']?></td>

    <td>  <?=$urun['description']?></td>
    <td><?=$urun['price'] ?></td>
    <td>
    <form method="POST" action="/products/delete/<?=$urun['id']?>}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <div class="form-group">
            <input type="submit" class="delete-product" value="Sil">
        </div>
    </form>
   <button onclick="window.location.href ='/urun/duzenle'">Düzenle</button>
    </td>
  </tr>
</table>

</div>
</div>
@stop
