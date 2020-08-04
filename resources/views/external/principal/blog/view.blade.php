@extends('layouts.external-v2.main')
@section('content')
    <section class="breadcrumb-outer" style="background: url({{ asset('images/banner2.jpg') }}) no-repeat; background-size: cover">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>{{ $post->title }}</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <section class="single">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 pull-left">
                    <div class="single-image">
                        <img src="https://cyclonethemes.com/demo/html/hotux/images/single2.jpg" alt="image">
                        <div class="single-image-date">
                            <p>{{ $post->created_at_formatted }}</p>
                        </div>
                    </div>
                    <div class="single-detail mar-top-30">
                        <div class="single-content">
                            <h4>{{ $post->title }}</h4>
                            <ul class="author">
                                <li><i class="fa fa-user" aria-hidden="true"></i> Por {{ $post->user->name }}</li>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> {{ $post->created_at_formatted }}</li>
                            </ul>
                            {!! $post->content !!}
                        </div>

                        <div class="next-posts clearfix">
                            <a href="#">
                                <div class="prev next-item pull-left">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    <span>Publicação anterior</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="next next-item pull-right">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    <span>Próxima publicação</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                @include('external.principal.blog.partials.sidebar')
            </div>
        </div>
    </section>
@endsection
