
<nav class="navbar">
    <ul class="nav nav--block">
        <li><a href="{{ URL::to('/') }}" class="navbar__link">{{ Lang::get('navigation.home') }}</a></li>
        <li><a href="{{ URL::route('advertisements.supply') }}" class="navbar__link">{{ Lang::get('navigation.supply') }}</a></li>
        <li><a href="{{ URL::route('advertisements.demand') }}" class="navbar__link">{{ Lang::get('navigation.demand') }}</a></li>
        @if(Auth::check())
        <li><a href="{{ URL::route('advertisements.create') }}" class="navbar__btn">{{ Lang::get('navigation.advertisement') }}</a></li>
        @endif
</nav>

<nav>
    @if(Auth::check())
    Welkom {{ Auth::user()->name }}
    <a href="{{ URL::route('auth.logout')  }}">Log out</a>

    @else
    <a href="{{ URL::route('auth.social', ['strategy' => 'linkedin'])  }}" class="btn btn--positive btn--hard">Login via LinkedIn</a>
    @endif
</nav>