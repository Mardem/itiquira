@extends('layouts.external-v2.main')
@section('content')
    <section class="banner">
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <div class="swiper-slide"
                         style="background-image:url('https://cyclonethemes.com/demo/html/hotux/images/slider/slider4.jpg')">
                        <div class="swiper-content">
                            <div class="slider-logo">
                                <img src="https://image.flaticon.com/icons/svg/833/833497.svg" width="40"
                                     style="filter: brightness(0) invert(1)" alt="Image">
                            </div>
                            <h3 data-animation="animated fadeInUp">Seja bem vindo ao</h3>
                            <h1 data-animation="animated fadeInUp">Itiquira <span>Park</span></h1>
                            <a href="#" data-animation="animated fadeInUp" class="slider-btn btn-or mar-right-10"><i
                                    class="fa fa-book"></i> Chalés</a>
                            <a href="#" data-animation="animated fadeInUp" class="slider-btn btn-wt"><i
                                    class="fa fa-book"></i> Camping</a>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination"></div>
            </div>
            <div class="overlay"></div>
        </div>
        <div class="banner-form">
            <div class="container">
                <div class="form-content">
                    <div class="table-item">
                        <div class="form-group">
                            <div class="date-range-inner-wrapper">
                                <input id="check-in-date" name="check_in" class="form-control" value="Check In">
                                <span class="input-group-addon">
<i class="fa fa-calendar" aria-hidden="true"></i>
</span>
                            </div>
                        </div>
                    </div>
                    <div class="table-item">
                        <div class="form-group form-icon">
                            <div class="date-range-inner-wrapper">
                                <input id="check-out-date" name="check_out" class="form-control" value="Check Out">
                                <span class="input-group-addon">
<i class="fa fa-calendar" aria-hidden="true"></i>
</span>
                            </div>
                        </div>
                    </div>
                    <div class="table-item">
                        <div class="form-group form-icon">
                            <select name="adults" id="quantity-adults">
                                <option value="0">Adultos</option>
                                @for($i = 1; $i <= 10; $i++)
                                    <option value="1">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="table-item">
                        <div class="form-group form-icon">
                            <select name="childrens_9" id="quantity-children9">
                                <option value="0">Crianças 0 a 5</option>
                                @for($i = 1; $i <= 10; $i++)
                                    <option value="1">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="table-item">
                        <div class="form-group form-icon">
                            <select name="childrens_10" id="quantity-children10">
                                <option value="0">Crianças 6 a 9</option>
                                @for($i = 1; $i <= 10; $i++)
                                    <option value="1">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="table-item">
                        <div class="form-btn">
                            <a class="btn btn-orange" id="check" data-bookmark-result="{{ route('chalets.result') }}">Buscar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-us">
        <div class="container">
            <div class="section-title">
                <h2>About <span>Us</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et,
                    auctor vulputate quam donec vitae consectetur turpis</p>
            </div>
            <div class="about-outer">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-content">
                            <h3 class="mar-bottom-30">Park das Águas</h3>
                            <p>

                                Em meio a toda beleza do cerrado, o Itiquira Park tem o prazer de apresentar o Park das
                                Águas, o seu lugar para curtir aventuras aquáticas. Com atrações para todas as idades, o
                                Park das Águas se destaca pela quantidade de piscinas com águas correntes, sem a
                                utilização
                                de produtos químicos, o que torna sua experiência com a natureza ainda mais saudável.
                            </p>
                            <a class="btn btn-orange mar-top-10">Saiba mais sobre <i
                                    class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-image">
                            <div class="image-box">
                                <div class="image-1 abt-image">
                                    <img src="{{ asset('images/front/new/park2.jpg') }}" alt="image">
                                </div>
                                <div class="image-2 abt-image">
                                    <img src="{{ asset('images/front/new/parquedasaguas2.jpg') }}" alt="image">
                                </div>
                            </div>
                            <div class="image-box">
                                <div class="image-3 abt-image">
                                    <img src="{{ asset('images/front/new/park3.jpg') }}" alt="image">
                                </div>
                                <div class="image-4 abt-image">
                                    <img src="{{ asset('images/front/new/park4.jpg') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 50px">
                    <div class="col-md-6">
                        <div class="about-image">
                            <div class="image-box">
                                <div class="image-1 abt-image">
                                    <img src="{{ asset('images/front/new/chalet1.jpg') }}" alt="image">
                                </div>
                                <div class="image-2 abt-image">
                                    <img src="{{ asset('images/front/new/chalet2.jpg') }}" alt="image">
                                </div>
                            </div>
                            <div class="image-box">
                                <div class="image-3 abt-image">
                                    <img src="{{ asset('images/front/new/chalet3.jpg') }}" alt="image">
                                </div>
                                <div class="image-4 abt-image">
                                    <img src="{{ asset('images/front/new/chalet4.jpg') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-content">
                            <h3 class="mar-bottom-30">Park das Águas</h3>
                            <p>
                                Os Chalés encontram-se em local privilegiado no Itiquira Park, onde a natureza dá um
                                show a
                                parte! Contamos com 26 unidades, construídas em arquitetura estilo Suíça, em perfeito
                                alinhamento com o Salto do Itiquira. Com todo conforto necessário para uma boa estadia,
                                os
                                Chalés são equipados com TV, Ar Condicionado e Frigobar. A área dos Chalés é VIP, o que
                                garante maior sossego para você e sua família. Esta área conta com piscinas, saunas,
                                parquinho infantil, mini toboágua, piscina aquecida, acesso exclusivo a local apropriado
                                para banho no Rio Itiquira, alimentação e iluminação noturna temática.
                            </p>
                            <a class="btn btn-orange mar-top-10">Saiba mais sobre <i
                                    class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="rooms">
        <div class="container-fluid">
            <div class="section-title">
                <h2>Torne-se <span>Sócio</span></h2>
                <p>
                    Tornando-se sócio do Itiquira Park, você e sua família farão parte do melhor clube da região. Um
                    clube
                    que a todo momento busca por inovações e atrações, com o grande objetivo de oferecer momentos
                    especiais
                    para todos que vêm nos visitar.
                </p>
            </div>
            @include('layouts.external.front.components.princing-table')

        </div>
    </section>


    <section class="call-to-action">
        <div class="container-fluid">
            <div class="row display-flex">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="call-content pad-left-30">
                        <h2 class="white mar-bottom-25">Discover a brand <span>luxurious</span> hotel</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor, eros nec porttitor
                            viverra, felis libero luctus nisi, non volutpat purus felis ut erat ipsum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor, eros nec porttitor
                            viverra, felis libero luctus nisi, non volutpat purus felis ut erat ipsum.</p>
                        <a href="#" class="btn btn-orange mar-top-20">READ MORE <i
                                class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="call-button">
                        <button type="button" class="play-btn js-video-button" data-video-id="152879427"
                                data-channel="vimeo"><i class="fa fa-play"></i></button>
                    </div>
                    <div class="video-figure"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="services">
        @include('layouts.external.front.components.events')
    </section>


    <section class="reviews">
        <div class="container">
            <div class="section-title title-white">
                <h2>Nossos <span>comentários</span></h2>
            </div>
            <div class="review-slider">
                <div class="slider-item">
                    <div class="slider-image">
                        <img src="https://cyclonethemes.com/demo/html/hotux/images/review1.jpg" alt="image">
                    </div>
                    <div class="slider-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi
                            pharetra
                            egestas. Sed egestas sapien libero.</p>
                        <h4>Micheal Clordy</h4>
                        <span>Germany</span>
                    </div>
                    <div class="slider-quote">
                        <img src="{{ asset('images/quote.png') }}" alt="Image">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image">
                        <img src="https://cyclonethemes.com/demo/html/hotux/images/review1.jpg" alt="image">
                    </div>
                    <div class="slider-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi
                            pharetra
                            egestas. Sed egestas sapien libero.</p>
                        <h4>Micheal Clordy</h4>
                        <span>Germany</span>
                    </div>
                    <div class="slider-quote">
                        <img src="{{ asset('images/quote.png') }}" alt="Image">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image">
                        <img src="https://cyclonethemes.com/demo/html/hotux/images/review1.jpg" alt="image">
                    </div>
                    <div class="slider-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi
                            pharetra
                            egestas. Sed egestas sapien libero.</p>
                        <h4>Micheal Clordy</h4>
                        <span>Germany</span>
                    </div>
                    <div class="slider-quote">
                        <img src="{{ asset('images/quote.png') }}" alt="Image">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="news">
        <div class="container">
            <div class="section-title">
                <h2>Nosso <span>Blog</span></h2>

            </div>
            <div class="news-outer">
                <div class="row">

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="news-item">
                            <div class="news-image">
                                <img src="{{ asset('images/blog/blog-1.jpg') }}" alt="image">
                            </div>
                            <div class="news-content">
                                <p class="date mar-bottom-5">02 Fevereiro 2020</p>
                                <h4><a href="single-right.html">Carnaval é no Itiquira Park</a></h4>

                                <p>Chegou a hora da melhor festa do ano e nós do Itiquira Park preparamos um carnaval
                                    incrível para ...
                                </p>
                                <a href="single-left.html">LEIA MAIS <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="news-item">
                            <div class="news-image">
                                <img src="{{ asset('images/blog/blog-2.jpg') }}" alt="image">
                            </div>
                            <div class="news-content">
                                <p class="date mar-bottom-5">02 Fevereiro 2020</p>
                                <h4><a href="single-right.html">Cachoeira Salto do Itiquira, um paraíso...</a></h4>
                                <p>
                                    Com certeza você já ouviu falar na cachoeira do Salto do Itiquira. Localizada a
                                    115km de
                                    Brasília ...
                                </p>
                                <a href="single-left.html">LEIA MAIS <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="news-item">
                            <div class="news-image">
                                <img src="{{ asset('images/blog/blog-3.jpg') }}" alt="image">
                            </div>
                            <div class="news-content">
                                <p class="date mar-bottom-5">02 Fevereiro 2020</p>
                                <h4><a href="single-right.html">Lugar de criança é no Itiquira Park</a></h4>
                                <p>A criançada está toda de férias e para muitas mamães e papais surgem a dúvida sobre o
                                    que
                                    fazer ...
                                </p>
                                <a href="single-left.html">LEIA MAIS <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-btn">
                <a href="#" class="btn btn-black mar-right-10">VER MAIS <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
    </section>

    <section class="newsletter">
        <div class="container">
            <div class="section-title title-white">
                <h2>Torne-se <span>Sócio</span></h2>
                <p>
                    Tornando-se sócio do Itiquira Park, você e sua família farão parte do melhor clube da região. Um
                    clube que a todo momento busca por inovações e atrações, com o grande objetivo de oferecer momentos
                    especiais para todos que vêm nos visitar.
                </p>
                <a href="#" class="btn btn-orange" style="background: #fe4e37;border: none">EU QUERO</a>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        .fc-past {
            background: #f5f1ee;
        }

        span {
            color: #333333;
        }

        .fc-bgevent {
            opacity: 1;
        }

        .fc-button-primary {
            background: #f6f8f8;
            color: #009bdd;
            border-radius: 54%;
        }

        .disabled {
            background: #f3f3f3 !important;
        }
    </style>
@endpush
