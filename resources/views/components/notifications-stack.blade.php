@if(Session::has('error'))
    @push('scripts')
        <script src="{{ asset('assets/js/iziToast.min.js') }}"></script>
        <script>
            iziToast.show({
                title: 'Ops',
                message: "{{ Session::get('error') }}",
                theme: 'dark',
                backgroundColor: '#f72a07',
                color: '#fff',
                icon: 'ti-close',
                position: 'bottomCenter',
            });
        </script>
    @endpush
@endif

@if(Session::has('success'))
@push('scripts')
    <script src="{{ asset('assets/js/iziToast.min.js') }}"></script>
    <script>
        iziToast.show({
            title: 'OK',
            message: "{{ Session::get('success') }}",
            theme: 'dark',
            backgroundColor: '#15aa60',
            color: '#fff',
            icon: 'ti-check',
            position: 'topCenter'
        });
    </script>
@endpush
@endif
