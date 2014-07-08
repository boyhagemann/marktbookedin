
@foreach($comments as $comment)
<article>
    <header>
        <h5>{{ $comment->user->name }}</h5>
    </header>
    {{ $comment->body }}
</article>
@endforeach