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

    @if(isset($weekDay))
        @if($weekDay < 5)
            <p>Рабочий день</p>
        @else
            <p>Выходной!</p>
        @endif
    @endif

    @if(isset($month))
        @if($month > 1 && $month < 5)
            <p>Весна</p>
        @elseif($month > 4 && $month < 8)
            <p>Лето</p>
        @elseif($month > 7 && $month < 11)
            <p>Осень</p>
        @elseif($month >= 0 && $month < 2 || $month === 11)
            <p>Зима</p>
        @else
            <p>Wrong month value</p>
        @endif
    @endif

    @unless($arr['age'] > 18)
        <p>Вам меньше 18 лет</p>
    @endunless

    @if(count($numArr) > 0)
        <p>{{ array_sum($numArr) }}</p>
    @else
        <p>Массив пуст</p>
    @endif


</body>
</html>
