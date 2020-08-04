@if(Session::has('error'))
    @section('scripts')
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
    @endsection
@endif

@if(Session::has('success'))
@section('scripts')
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
@endsection
@endif