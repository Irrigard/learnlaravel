<header>
    хедер
    <ul>
        @if (isset($links))
            @foreach($links as $elem)
                <li><a href="http://{{ $elem['href'] }}">{{ $elem['text'] }}</a></li>
            @endforeach
        @endif
    </ul>
</header>
