@extends('layouts.default')

@section('content')

<h1>{{ $advertisement->title }}</h1>
<p>{{ $advertisement->body }}</p>

<h3>{{ Lang::choice('comments.list.link',  $advertisement->comments->count()) }}</h3>
@include('partials.comments', ['comments' => $advertisement->comments])

@stop