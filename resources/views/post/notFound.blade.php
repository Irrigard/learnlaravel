@extends('post.master')

@section('title', "Станицы с $id не существует!")
@section('header', "Извините, страница с $id не найдена!")

@section('content')
    <div class="text">
        Извините, страницы с {{$id}} не существует!
    </div>
@endsection
