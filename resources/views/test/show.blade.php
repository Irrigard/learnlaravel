<!DOCTYPE html>
<html lang="en">
<head>
    <title>My view</title>
</head>
<body>
    Страна: {{ $arr['country'] ?? 'Russia' }}<br>
    Город: {{ $arr['city'] ?? 'Moscow' }}<br>
    Дата: {{ $arr['day'] ?? date('d', time()) }}.{{ $arr['month'] ?? date('m', time()) }}.{{ $arr['year'] ?? date('Y', time()) }}<br>
    Неэкранированные данные: {!! $arr['str'] !!}<br>
    {{-- Commented  string--}}
@php
    echo 'Вставка PHP';
@endphp

</body>
</html>
