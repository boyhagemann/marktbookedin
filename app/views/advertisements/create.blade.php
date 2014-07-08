@extends('layouts.default')

@section('content')

<h1>{{ Lang::get('advertisements.create.title') }}</h1>

{{ Form::open(['route' => 'advertisements.store']) }}
<div>
    <label>{{ Form::radio('type', 'supply') }} {{ Lang::get('advertisements.form.create.type.supply') }}</label>
    <label>{{ Form::radio('type', 'demand') }} {{ Lang::get('advertisements.form.create.type.demand') }}</label>
    {{ $errors->first('type', '<p>:message</p>') }}
</div>
<div>
    {{ Form::label(Lang::get('advertisements.form.create.title.label')) }}
    {{ Form::text('title') }}
    {{ $errors->first('title', '<p>:message</p>') }}
</div>
<div>
    {{ Form::label(Lang::get('advertisements.form.create.body.label')) }}
    {{ Form::textarea('body') }}
    {{ $errors->first('body', '<p>:message</p>') }}
</div>
<div>
    {{ Form::submit(Lang::get('advertisements.form.create.submit.label')) }}
</div>
{{ Form::close() }}
@stop