@extends('test.master')

@section('content')
    <form action="{{route('form.result', ['id1'=>2, 'id2'=>3])}}" method="post">
        @csrf
        Имя: <input type="text" name="name"><br>
        Фамилия: <input type="text" name="surname"><br>
        Е-mail: <input type="text" name="e-mail"><br>
        Логин: <input type="text" name="login"><br>
        Пароль: <input type="password" name="password"><br>
        <input type="submit">
    </form>
@endsection
