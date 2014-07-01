<html>
    <head>
        {{ HTML::style('css/main.min.css') }}
    </head>
    <body>

    <div class="container">

        @include('partials.navbar')
        @include('partials.search')

        @yield('content')

    </div>

    </body>
</html>