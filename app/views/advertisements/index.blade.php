@extends('layouts.default')

@section('content')

@if(Input::get('q'))
    <h1>{{ Lang::choice('advertisements.search.title', $advertisements->getTotal(), ['q' => Input::get('q')]) }}</h1>
@else
    <h1>{{ Lang::get('advertisements.index.title') }}</h1>
@endif

@include('advertisements.list')

@stop