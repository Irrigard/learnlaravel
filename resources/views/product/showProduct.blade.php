@extends('master')

@section('title', $product['name'])
@section('header', $product['name'])

@section('content')
    <div class="info">
        <a href="/product/{{$catId}}">{{$catName}}</a><br>
        <span class="cost">{{$product['cost']}}</span><br>
        <span class="inStock">
            @if($product['inStock'] === true)
                есть в наличии
            @else
                нет в наличии
            @endif
        </span><br>
    </div>
    <div class="text">
        {{$product['desc']}}
    </div>
@endsection
