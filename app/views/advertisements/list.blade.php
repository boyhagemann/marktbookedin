@foreach($advertisements as $advertisement)
<article class="grid">
    <div class="grid__item one-quarter">
        @if($advertisement->user->image)
        <img src="{{ $advertisement->user->image }}">
        @endif
    </div><!--
 --><div class="grid__item three-quarters">

        <header>
            <h3><a href="{{ $advertisement->url }}">{{ $advertisement->title }}</a></h3>
        </header>
        <p>{{ $advertisement->body }}</p>

        <footer>
            <a href="{{ $advertisement->url }}">{{ Lang::choice('comments.list.link',  $advertisement->comments->count()) }}</a>
        </footer>

    </div>
</article>

@endforeach