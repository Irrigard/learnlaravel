@extends('test.master')

@section('content')
    @if(isset($flash))
        <span>{{$flash}}</span>
    @endif
@endsection
