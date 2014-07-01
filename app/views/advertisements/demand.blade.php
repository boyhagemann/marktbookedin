@extends('layouts.default')

@section('content')

    <h1>{{ Lang::get('advertisements.demand.title') }}</h1>

@include('advertisements.list')

@stop