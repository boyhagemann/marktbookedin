
<nav>
    <a href="{{ URL::to('/') }}">{{ Lang::get('navigation.home') }}</a>
    <a href="{{ URL::route('advertisements.index') }}">{{ Lang::get('navigation.advertisements') }}</a>
</nav>