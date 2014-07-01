@extends('layouts.default')

@section('content')

<h1>{{ $advertisement->title }}</h1>
<p>{{ $advertisement->body }}</p>

@stop