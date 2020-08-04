@include('layouts.external.front.partials.header')

@include('layouts.external.front.components.menu')

@include('layouts.external.front.components.main')
    @yield('content')
@include('layouts.external.front.components.footer')
@include('layouts.external.front.partials.footer')
