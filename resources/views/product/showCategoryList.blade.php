@extends('master')

@section('title', 'Category List')
@section('header', 'Category List')

@section('content')
    <div class="info"><ul>
            @foreach($list as $key=>$category)
                <li><a href="/product/{{$key}}">{{$category}}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
