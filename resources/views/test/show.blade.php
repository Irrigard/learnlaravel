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

<ul>
    @foreach($numArr as $elem)
        <li>{{ sqrt($elem) }}</li>
    @endforeach
</ul>
<ul>
    @foreach($strArr as $key=>$elem)
        <li>{{ $key + 1 }} {{ $elem }}</li>
    @endforeach
</ul>
    <ul>
        @foreach($numArr as $key=>$elem)
            @if($elem % 2 == 0)
            <li>{{ $elem }}</li>
            @endif
        @endforeach
    </ul>
@if(is_array($data))
    <ul>
        @foreach($data as $elem)
            <li>{{ $elem }}</li>
        @endforeach
    </ul>
@else
    <p>{{ $data }}</p>
@endif

<table>
    <tr>
    @for($i=1; $i<=25; $i++)
        <td>{{ $users[$i-1] }}</td>
        @if($i%5 == 0)
            </tr><tr>
        @endif
    @endfor
    </tr>
</table>
<table>
    @foreach($employees as $employee)
        <tr>
            <td>{{ $employee['name'] }} {{ $employee['surname'] }} {{ $employee['salary'] }}</td>
        </tr>
    @endforeach
</table>
<ul>
    @foreach($strArr as $str)
        <ul @if($loop->first)
                class="first"
            @elseif($loop->last)
                class="last"
            @endif
            >{{ $loop->iteration }} {{ $str }}</ul>
    @endforeach
</ul>
@foreach($numArr as $num)
    @if($loop->remaining <= 2)
        <i> {{$num}} </i>
    @else
        <b>{{ $num }}</b>
    @endif
@endforeach

<ul>
    @foreach ($employees as $employee)
        @continue($employee['surname'] == 'surname1')
        @break($employee['salary'] == 3000)
        <li>{{ $employee['name'] }}</li>
    @endforeach
</ul>
@forelse($emptyArr as $elem)
    {{$elem}}
@empty
    <p>В массиве нет элементов</p>
@endforelse
</body>
</html>
