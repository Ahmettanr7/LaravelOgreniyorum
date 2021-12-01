
@extends('master')

@section('title', 'Ürünler')

@section('content')
<br>
    <?php
    foreach ($search as $key => $product) {
        echo $product['name'];
        echo " - ";
        echo $product['description'];
        echo " - ";
        echo $product['price'];
        echo "<br>";
    }
    ?>
@stop