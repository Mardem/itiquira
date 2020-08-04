@extends('layouts.external.front.main')

@section('content')
    @include('layouts.external.front.components.about')
    {{--    @include('layouts.external.front.components.courses')--}}
    @include('layouts.external.front.components.countup')
{{--    @include('layouts.external.front.components.blog')--}}
    @include('layouts.external.front.components.princing-table')

    @include('layouts.external.front.components.events')
@endsection
