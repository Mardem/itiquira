@extends('layouts.external-v2.main')
@section('content')
    <section class="breadcrumb-outer" style="background: url({{ asset('images/banner2.jpg') }}) no-repeat; background-size: cover">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Nosso blog</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <section class="details">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="list-content">
                        <div class="row">
                            @foreach($posts as $post)
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="news-item">
                                        <div class="news-image">
                                            <img src="{{ asset($post->thumb_path) }}" alt="image">
                                        </div>
                                        <div class="news-content">
                                            <p class="date">{{ $post->user->name }}</p>
                                            <h4><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h4>
                                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 120) }}</p>
                                            <a href="#">LER MAIS <i class="fas fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="pagination-content text-center">
                        {{ $posts->links() }}
                    </div>
                </div>
                @include('external.principal.blog.partials.sidebar')
            </div>
        </div>
    </section>
@endsection
