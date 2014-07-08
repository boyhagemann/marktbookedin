
@if(Session::has('success'))
<div class="">{{ Session::get('success') }}</div>
@endif

@if(Session::has('error'))
<div class="">{{ Session::get('error') }}</div>
@endif