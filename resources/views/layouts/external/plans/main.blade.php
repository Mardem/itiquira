@include('layouts.external.plans.partials.header')
<body class="bg-light">

@yield('content')
<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; {{ now()->format('Y') }} {{ env('APP_NAME') }}</p>

</footer>
@include('layouts.external.plans.partials.footer')
