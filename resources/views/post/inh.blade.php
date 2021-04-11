@extends('post.master')

@section('title', $post['title'])
@section('header', $post['title'])

@section('content')
    <div class="info">
        <span class="date">{{$post['date']}}</span>
        <span class="author">{{$post['author']}}</span>
    </div>
    <div class="text">
        {{$post['text']}}
    </div>
@endsection
