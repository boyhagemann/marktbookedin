
{{ Form::open(['route' => 'advertisements.index', 'method' => 'GET']) }}
{{ Form::text('q', Input::get('q'), ['placeholder' => Lang::get('search.form.placeholder')]) }}
{{ Form::submit(Lang::get('search.form.submit', ['type' => 'submit'])) }}
{{ Form::close() }}