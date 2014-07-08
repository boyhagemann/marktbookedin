@foreach($advertisements as $advertisement)
<article>
    <header>
        <h3><a href="{{ $advertisement->url }}">{{ $advertisement->title }}</a></h3>
    </header>
    <p>{{ $advertisement->body }}</p>

    <footer>
        @if($advertisement->comments->count())
        <a href="{{ $advertisement->url }}">{{ Lang::choice('comments.list.link',  $advertisement->comments->count()) }}</a>
        @endif
    </footer>
</article>

@endforeach