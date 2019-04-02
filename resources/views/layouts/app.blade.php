@include('layouts.header')
    @guest
        @else
            @csrf
    @endguest

    <section>
        @yield('content')
    </section>
@include('layouts.footer')

