@extends('test.master')

@section('content')
    @if(isset($num) && $num === true)
        <span>Форма успешна отправлена.</span>
    @endif
    @if(isset($email))
        <span>Адрес {{$email}} корректен.</span>
    @endif
@endsection
