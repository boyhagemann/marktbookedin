@extends('layouts.default')

@section('content')

<article class="grid">
    <div class="grid__item one-tenth">
        @if($advertisement->user->image)
        <img src="{{ $advertisement->user->image }}">
        @endif
    </div><!--
 --><div class="grid__item nine-tenths">
        <div>{{ $advertisement->user->name }}</div>
        <h1>{{ $advertisement->title }}</h1>
        <p>{{ $advertisement->body }}</p>
    </div>
</article>

<h3>{{ Lang::choice('comments.list.link',  $advertisement->comments->count()) }}</h3>
@include('partials.comments', ['comments' => $advertisement->comments])

@stop