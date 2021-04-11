@extends('master')

@section('title', $category['name'])
@section('header', $category['name'])

@section('content')
    <div class="info">
        <span class="category">{{$category['name']}}</span><br>
        @foreach($category['products'] as $key=>$product)
            <p>{{$product['name']}} {{$product['cost']}} <a href="/product/{{$catId}}/{{$key}}">link</a></p>
        @endforeach
    </div>
@endsection
