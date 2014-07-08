<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{ HTML::style('css/main.min.css') }}
    </head>
    <body>

    <div class="container">

        @include('partials.navbar')
        @include('partials.search')
        @include('partials.messages')

        @yield('content')

    </div>

    </body>
</html>