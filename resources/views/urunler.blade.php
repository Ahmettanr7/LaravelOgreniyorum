<?php use App\Http\Controllers\ProductController; ?>
@extends('master')

@section('title', 'Ürünler')

@section('content')


<div class="kapsar">
  <div class="ortala">
    <?php
    foreach ($products as $key => $urun) { ?>
    <a href="/urun/{{$urun['id']}}">
      <div class="kutu-4 h-360">
      <div class="kutu-title">
          <p><b>{{$urun['name']}}</b></p>
      </div>
      <div class="kutu-icerik">
      <img src="{{asset('img/monster.png')}}" style="width:calc(1100px/4)" alt="">  
      <p style="text-align:center;">{{$urun['description']}}</p>
      <p style="text-align:center; color:#000;">Etiket : {{$urun['slug']}}</p>
      </div>
      <a href="">
      <div class="kutu-footer">
          <i class="mdi mdi-plus"></i> Ürün Detayı
      </div>
      </a>
      </div>
    </a>
      <?php } ?>
  </div>
</div>

@stop
