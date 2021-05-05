@extends('test.master')

@section('content')
    @if (isset($methods))
        {{ $methods['path'] }}<br>
        {{ $methods['url'] }}<br>
        {{ $methods['FullUrl'] }}<br>
        {{ $methods['FullUrlWithQuery'] }}<br>
        {{ $methods['is'] }}<br>
    @endif
@endsection
