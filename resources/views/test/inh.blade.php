@extends('test.master')

@section('title', $title)

@section('sidebar')
    @parent

    <p>Это дополнение к основной боковой панели.</p>
@endsection

@section('content')
    <p>{{$content}}</p>
@endsection
