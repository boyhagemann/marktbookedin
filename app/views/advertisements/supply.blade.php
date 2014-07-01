@extends('layouts.default')

@section('content')

    <h1>{{ Lang::get('advertisements.supply.title') }}</h1>

@include('advertisements.list')

@stop