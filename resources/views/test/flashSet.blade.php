@extends('test.master')

@section('content')
    <form action="">
        @csrf
        <input type="text" name="1"><br>
        <input type="text" name="2"><br>
        <input type="text" name="3"><br>
        <input type="text" name="4"><br>
        <input type="text" name="5"><br>
        <input type="submit">
    </form>

    <form action="">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}"><br>
        <input type="text" name="surname" value="{{ old('surname') }}"><br>
        <input type="submit">
    </form>
@endsection
