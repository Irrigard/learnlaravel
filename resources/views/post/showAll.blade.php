@extends('post.master')

@section('title', 'Список страниц')
@section('header', 'Список страниц')

@section('content')
    @foreach($posts as $key=>$elem)
        <div class="post">
            <h2>{{$elem['title']}}</h2>
            <div class="info">
                <span class="date">{{$elem['date']}}</span>
                <span class="author">{{$elem['author']}}</span>
            </div>
            <div class="text">
                {{$elem['teaser']}}
            </div>
            <div class="more">
                <a href="/post/{{$key}}">ссылка на пост</a>
            </div>
        </div>
    @endforeach
@endsection
