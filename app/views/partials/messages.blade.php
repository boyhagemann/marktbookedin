
@if(Session::has('success'))
<div class="message message--success">{{ Session::get('success') }}</div>
@endif

@if(Session::has('error'))
<div class="message message--error">{{ Session::get('error') }}</div>
@endif