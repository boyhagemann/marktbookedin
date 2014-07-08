
@foreach($comments as $comment)
<article class="grid">
    <div class="grid__item one-tenth">
        @if($advertisement->user->image)
        <img src="{{ $advertisement->user->image }}">
        @endif
    </div><!--
 --><div class="grid__item nine-tenths">
        <header>
            <h5>{{ $comment->user->name }}</h5>
        </header>
        {{ $comment->body }}
    </div>
</article>
@endforeach