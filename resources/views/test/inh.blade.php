@extends('test.master')

@section('title', $title)

@section('sidebar')
    @parent

    <p>Это дополнение к основной боковой панели.</p>
@endsection

@section('content')
    <p>{{$content}}</p>
    <table>
        @foreach($employees as $elem)
            <tr>
                @if ($loop->first)
                    @foreach($elem as $subElem)
                        <th>{{$subElem}}</th>
                    @endforeach
                @else
                    @if($elem['salary'] > 2000)
                        <td>{{ $loop->index }}</td>
                        @foreach($elem as $subElem)
                            <td>{{$subElem}}</td>
                        @endforeach
                    @endif
                @endif
            </tr>
        @endforeach
    </table>
    <table>
        @foreach($users as $elem)
            <tr>
                @if ($loop->first)
                    @foreach($elem as $subElem)
                        <th>{{$subElem}}</th>
                    @endforeach
                @else
                        <td>{{ $loop->index }}</td>
                        @foreach($elem as $key=>$subElem)
                            @if($key === 'banned' and $subElem === false)
                                <td style="color: green">Активен</td>
                            @elseif($key === 'banned' and $subElem === true)
                                <td style="color: red">Забанен</td>
                            @else
                                <td>{{$subElem}}</td>
                            @endif
                        @endforeach
                @endif
            </tr>
        @endforeach
    </table>
    <form action="#">
        @foreach($strArr as $elem)
            <input type="text" value="{{$elem}}"><br>
        @endforeach
        <select>
            @foreach($strArr as $elem)
                <option name="{{$elem}}">{{$elem}}</option>
            @endforeach
        </select>
        <br><input type="submit">
    </form>
    <ul>
        @foreach($daysArr as $elem)
            <li
            @if($elem == $today)
                class="activ"
            @endif
            >{{$elem}}</li>
        @endforeach
    </ul>
@endsection
