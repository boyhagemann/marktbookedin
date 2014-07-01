
<nav>
    <a href="{{ URL::to('/') }}">{{ Lang::get('navigation.home') }}</a>
    <a href="{{ URL::route('advertisements.index') }}">{{ Lang::get('navigation.advertisements') }}</a>
</nav>

<nav>
    @if(Auth::check())
    Welkom {{ Auth::user()->name }}
    <a href="{{ URL::route('auth.logout')  }}">Log out</a>

    @else
    <a href="{{ URL::route('auth.social', ['strategy' => 'linkedin'])  }}">Login via LinkedIn</a>
    @endif
</nav>