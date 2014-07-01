<html>
    <body>

        @include('partials.navbar')
        @include('partials.search')

        <h3>{{ Lang::get('home.advertisements.title') }}</h3>
        @include('advertisements.list')

        <a href="{{ URL::route('advertisements.index') }}">{{ Lang::get('home.advertisements.link') }}</a>

    </body>
</html>