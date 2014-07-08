@foreach($advertisements as $ad)
<article>
    <header>
        <h3><a href="{{ $ad->url }}">{{ $ad->title }}</a></h3>
    </header>
    <p>{{ $ad->body }}</p>

    <footer>
        @if($ad->comments->count())
        <a href="{{ $ad->url }}">{{ $ad->comments->count() }} comments</a>
        @endif
    </footer>
</article>

@endforeach