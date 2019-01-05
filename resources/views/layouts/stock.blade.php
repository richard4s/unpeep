@include('layouts.stock_header')
    @guest
        @else
            @csrf
        @endguest

        <section>
            @yield('content')
        </section>
    @include('layouts.stock_footer')

