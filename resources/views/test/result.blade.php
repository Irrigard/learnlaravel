@extends('test.master')

@section('content')
    @if (isset($input1) && isset($input2) && isset($input3))
        <div>
            Сумма чисел {{$input1}},{{$input2}} и {{$input3}} = {{$input1+$input2+$input3}}
        </div>
    @endif
@endsection
