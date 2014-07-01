<html>
    <body>

        @include('partials.navbar')
        @include('partials.search')

        <div class="grid">

            <section class="grid__item">
                <h3>{{ Lang::get('home.supply.title') }}</h3>
                @include('advertisements.list', ['advertisements' => $supply])
                <a href="{{ URL::route('advertisements.supply') }}">{{ Lang::get('home.supply.link') }}</a>
            </section><!--

         --><section class="grid__item">
                <h3>{{ Lang::get('home.demand.title') }}</h3>
                @include('advertisements.list', ['advertisements' => $demand])
                <a href="{{ URL::route('advertisements.demand') }}">{{ Lang::get('home.demand.link') }}</a>
            </section>

        </div>


    </body>
</html>