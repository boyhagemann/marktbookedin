
@if(Auth::check())
Welkom {{ Auth::user()->name }}
<a href="{{ URL::route('auth.logout')  }}">Log out</a>
@else
<a href="{{ URL::route('auth.social', ['strategy' => 'linkedin'])  }}">LinkedIn</a>
@endif