@extends('test.master')

@section('content')
    <form action="/test/result/">
        <input type="text" name="text1">
        <input type="text" name="text2">
        <input type="text" name="text3">
        <input type="submit">
    </form>
@endsection
