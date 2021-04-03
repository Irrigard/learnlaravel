<header>
    хедер
    <ul>
        @foreach($links as $elem)
            <li><a href="http://{{ $elem['href'] }}">{{ $elem['text'] }}</a></li>
        @endforeach
    </ul>
</header>
