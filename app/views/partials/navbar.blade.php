
<nav>
    <ul class="nav nav--block navbar__nav">
        <li><a href="{{ URL::to('/') }}">{{ Lang::get('navigation.home') }}</a></li>
        <li><a href="{{ URL::route('advertisements.supply') }}">{{ Lang::get('navigation.supply') }}</a></li>
        <li><a href="{{ URL::route('advertisements.demand') }}">{{ Lang::get('navigation.demand') }}</a></li>
        @if(Auth::check())
        <li><a href="{{ URL::route('advertisements.create') }}">{{ Lang::get('navigation.advertisement') }}</a></li>
        @endif
</nav>

<nav>
    @if(Auth::check())
    Welkom {{ Auth::user()->name }}
    <a href="{{ URL::route('auth.logout')  }}">Log out</a>

    @else
    <a href="{{ URL::route('auth.social', ['strategy' => 'linkedin'])  }}">Login via LinkedIn</a>
    @endif
</nav>