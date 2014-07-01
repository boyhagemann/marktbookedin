<html>
    <body>

        @include('partials.navbar')
        @include('partials.search')

        @if(Auth::check())
        Welkom {{ Auth::user()->name }}
        <a href="{{ URL::route('auth.logout')  }}">Log out</a>

        @else
        <a href="{{ URL::route('auth.social', ['strategy' => 'linkedin'])  }}">LinkedIn</a>
        @endif

        <h3>{{ Lang::get('home.advertisements.title') }}</h3>
        @include('advertisements.list')

        <a href="{{ URL::route('advertisements.index') }}">{{ Lang::get('home.advertisements.link') }}</a>

    </body>
</html>