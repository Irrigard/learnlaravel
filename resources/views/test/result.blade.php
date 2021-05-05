@extends('test.master')

@section('content')
    @if (isset($input))
        <ul>
            @foreach($input as $key=>$elem)
                @if($key != '_token')
                <li>{{$elem}}</li>
                @endif
            @endforeach
        </ul>
    @endif
@endsection
