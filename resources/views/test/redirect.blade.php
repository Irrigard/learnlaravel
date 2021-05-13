@extends('test.master')

@section('content')
    @if (isset($errorNum))
        <span>Введенное значение некорректно.</span>
    @endif
    <form action="" method="post">
        @csrf
        Число от 1 до 10: <input type="text" name="num"><br>
        <input type="submit">
    </form><br>
    @if (isset($errorMail))
        <span>Введенное значение некорректно.</span>
    @endif
    <form action="" method="post">
        @csrf
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
@endsection
