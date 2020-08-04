<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset=UTF-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="description" content="O melhor clube da região">
    <meta name="keywords"
          content="parques, piscinas, itiquira, parque itiquira, itiquira park, final de semana, diversão em familia">
    <meta name="Classification" content="Systems">
    <meta itemprop="name" content="Itiquira Park">
    <meta itemprop="alternateName" content="Diversão em familia">
    <meta http-equiv="Content-Language" content="UTF-8">
    <meta name="title" content="Itiquira Park"/>
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="googlebot" content="index,follow">
    <meta name="google" content="notranslate">
    <meta name="Content-Language" content="pt-br">
    <meta name="reply-to" content="contato@itiquira.com.br">
    <link rel="alternate" hreflang="pt-br" href="http://www.itiquira.com.br/"/>
    <meta name="geo.country" content="BR"/>
    <meta name="geo.placename" content="Formosa"/>
    <meta name="geo.regioncode" content="BR-GO"/>
    <meta name="geo.position" content="-15.353878;-47.443406"/>
    <link rel="shortcut icon" href="https://www.itiquira.com.br/favicon.ico" type="image/x-icon"/>
    <meta name="author" content="VTEC">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/shuffle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/menu.css') }}">
</head>
<body>

<header class="header header-transparent">
    <div class="header-wrapper">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light nav-cstm">
                <div class="navbar-collapse collapse" id="navbarNavDropdown" style="">
                    <ul class="navbar-nav ml-auto navbar-custom">
                        <li class="dropdown nav-item active">
                            <a href="#" class="" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="active"><a href="index.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                            </ul>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="#" class="" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="sustainability.html">Sustainability</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="partners.html">Partners</a></li>
                                <li><a href="annual-report.html">Annual Report</a></li>
                                <li><a href="career.html">Career</a></li>
                                <li><a href="approach.html">Approach</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="" data-toggle="dropdown">Solutions <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="services.html">Services</a></li>
                                <li><a href="service-details.html">service Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="" data-toggle="dropdown">Projects <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="project.html">Project</a></li>
                                <li><a href="projects-2.html">Projects 2</a></li>
                                <li><a href="projects-3.html">Projects 3</a></li>
                                <li><a href="project-details.html">Project Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#"> Blog <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#"> Contact</a>
                        </li>
                    </ul>
                    <div class="search-box">
                        <div class="nav-search" style="">
                    <span id="search">
                      <i class="icon icon-search1"></i>
                    </span>
                        </div>
                        <!--Search End-->
                        <div class="search-block" style="display: none;">
                            <input class="form-control" type="text" placeholder="Search">
                            <span class="search-close">×</span>
                        </div>
                        <!-- Site search end-->
                    </div>
                    <div class="header-quote">
                        <a class="quote-btn btn" href="#"> Comprar ingressos
                        </a>
                    </div>
                </div>
            </nav>
        </div><!-- container end-->
    </div><!-- header wrapper end-->
</header>


<section class="main" id="home">

    <div class="swiper-container fullscreen">
        <div class="swiper-wrapper">

            <div class="swiper-slide overlay"
                 style="background: url('{{ asset('assets/front/images/img/slider-bg.jpg') }}'); background-size: cover;">
                <div class="slider-content container">
                    <div class="col-md-12">
                        <h3>Seja bem vindo(a) <br> <span><span><img
                                        src="https://www.itiquira.com.br/images/logo.png"></span></span></h3>
                        <h4>DIVERSÃO PARA TODA <span>FAMILIA</span>!</h4>
                    </div>
                </div>
            </div>


            <div class="swiper-slide overlay"
                 style="background: url('{{ asset('assets/front/images/img/slider-bg2.jpg') }}'); background-size: cover;">
                <div class="slider-content container">
                    <div class="col-md-12">
                        <h3>Seja bem vindo(a) <br> <span><span><img
                                        src="https://www.itiquira.com.br/images/logo.png"></span></span></h3>
                        <h4>DIVERSÃO PARA TODA <span>FAMILIA</span>!</h4>
                    </div>
                </div>
            </div>
        </div>


        <div class="swiper-pagination"></div>

        <div class="scroll-down"><a href="#about-us"><i class="fa fa-angle-double-down"></i></a></div>
    </div>

</section>


<section id="about-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 about-image"
                 style="background-image: url('{{ asset('images/front/parquedasaguas.jpg') }}');">
            </div>
            <div class="col-md-8 main-content">
                <h2 class="section-title">Park das Águas
                </h2>
                <div class="about-description">
                    <p>Bem Vindos ao Park das Águas, onde a natureza dá um show a parte. Nosso parque oferece diversas
                        atrações aquáticas para todas as idades, piscinas com chafariz, piscinas adulto, piscinas de
                        água corrente, toboáguas, mega-rampas, mini-rampa infantil, balde maluco. Diversão para a
                        família, oferecemos ainda a maior sauna da região a vapor. Existem pontos de alimentação com
                        petiscos, refeições, bebidas em geral. Acesso ao Rio Itiquira próprio para banho. Há também um
                        mirante muito agradável para relaxar.
                    </p>
                    <a href="park-das-aguas" class="btn">Ver mais</a>
                </div>
            </div>
            <div class="logo-overlay">
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-xs-12 main-content responsivo">
                <h2 class="section-title">Chalés</h2>
                <div class="about-description">
                    <p>Os Chalés estão em um local privilegiado no Itiquira Park, onde a natureza dá um show a parte. Os
                        Chalés são equipados com ar condicionado, TV e frigobar. Sua área de lazer conta com piscinas,
                        sauna, parquinho infantil, mini tobo-água, rio exclusivo com acesso e local apropriado para
                        banho. Alimentação serve, café da manhã personalizado, almoço, jantar, petiscos, bebidas,
                        sorvetes, atendimento VIP na área das piscinas. O sossego prevalece, o descanso em contato com a
                        natureza é nosso ponto alto. Há limite de público, esse local também é conhecido com Área VIP
                        para os usuários que passam o dia apenas. </p>
                    <a href="chale" class="btn">Ver mais</a>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 about-image"
                 style="background-image: url('{{ asset('images/front/chale.jpg') }}');">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 about-image" style="background-image: url('{{ asset('images/front/camping.jpg') }}');">
            </div>
            <div class="col-md-8 main-content">
                <h2 class="section-title">Camping

                </h2>
                <div class="about-description">
                    <p>Nossa área de camping está em um local reservado, destinado a tranquilidade das sombras de nossas
                        árvores, o camping oferece estrutura de portaria com segurança 24 horas, estacionamento
                        exclusivo, energia 220v*, vestiários com chuveiros quentes, telefonia móvel ( OI, TIM, VIVO),
                        acesso ao Park das Águas e todas as atividades aquáticas.
                        (*) consulte os horários e regulamentos da área de camping

                    </p>
                    <a href="camping" class="btn">Ver mais</a>
                </div>
            </div>
            <!-- <div class=logo-overlay>
            </div> -->
        </div>

    </div>
</section>

{{--<section id="courses">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="col-md-12 main-content">--}}
{{--            <h2 class="section-title">Training Courses</h2>--}}
{{--        </div>--}}

{{--        <div class="course-main">--}}
{{--            <div class="row">--}}

{{--                <div class="col-md-5 col-sm-6 col-xs-12 training-course" id="volley">--}}
{{--                    <div class="pull-right">--}}
{{--                        <a href="#0">--}}
{{--                            <img src="images/icons/volleyball.svg" alt="">--}}
{{--                        </a>--}}
{{--                        <h4>Beach Volley</h4>--}}
{{--                        <a href="#" class="btn">visit course</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12 training-course" id="fitness">--}}
{{--                    <div class="pull-left">--}}
{{--                        <a href="#0">--}}
{{--                            <img src="images/icons/fitness.svg" alt="">--}}
{{--                        </a>--}}
{{--                        <h4>Fitness</h4>--}}
{{--                        <a href="#" class="btn">visit course</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row pad40">--}}

{{--                <div class="col-md-3 col-sm-6 col-xs-12 training-course" id="swimming">--}}
{{--                    <div class="pull-right">--}}
{{--                        <a href="#0">--}}
{{--                            <img src="images/icons/swimming.svg" alt="">--}}
{{--                        </a>--}}
{{--                        <h4>Swimming</h4>--}}
{{--                        <a href="#" class="btn">visit course</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-6 course-image">--}}
{{--                    <img src="images/img/yoga-course.png" class="img-responsive" alt="">--}}
{{--                </div>--}}

{{--                <div class="col-md-3 col-sm-6 col-xs-12 training-course active" id="yoga">--}}
{{--                    <div class="pull-left">--}}
{{--                        <a href="#0">--}}
{{--                            <img src="images/icons/yoga.svg" alt="">--}}
{{--                        </a>--}}
{{--                        <h4>Yoga</h4>--}}
{{--                        <a href="#" class="btn">visit course</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}
{{--</section>--}}


<section id="countup" style="margin-top: 45px">
    <div class="container main-content">
        <div class="col-md-12">

            <div class="col-md-4 col-sm-4 col-xs-12">
                <img src="images/icons/trophy.svg" alt="">
                <h3>Awards Won</h3>
                <span class="counter" data-from="0" data-to="95"></span>
            </div>


            <div class="col-md-4 col-sm-4 col-xs-12">
                <img src="images/icons/happy.svg" alt="">
                <h3>Happy Clients</h3>
                <span class="counter" data-from="0" data-to="100000"></span>
            </div>


            <div class="col-md-4 col-sm-4 col-xs-12">
                <img src="images/icons/swimmer.svg" alt="">
                <h3>Daily Swimmmers</h3>
                <span class="counter" data-from="0" data-to="225"></span>
            </div>

        </div>
    </div>
</section>


<section id="blog">
    <div class="container">

        <article class="col-md-12 blog-post">
            <div class="col-md-3 blog-thumbnail">
                <a href="blog-detail.html"><img src="{{ asset('images/front/news/news-7.jpg') }}" class="img-responsive"
                                                alt=""></a>
            </div>
            <div class="col-md-9 blog-desc">
                <h4><a href="blog-detail.html">O Melhor das Férias Escolares!</a></h4>
                {{--                <div class="blog-detail">--}}
                {{--                    <span><i class="fa fa-user"></i>Author</span>--}}
                {{--                    <span><i class="fa fa-clock-o"></i>4:30</span>--}}
                {{--                    <span><i class="fa fa-comments-o"></i>12 Comments</span>--}}
                {{--                </div>--}}
                <p style="margin-top: 15px;">
                    Uma das mais esperadas épocas do ano está se aproximando: AS FÉRIAS ESCOLARES DE JULHO!

                    As férias escolares do meio do ano são a melhor oportunidade para uma viagem em família, ainda mais
                    quando o destino escolhido é tão divertido quanto o Itiquira Park!

                    A beleza natural do Parque Municipal do Itiquira, faz do Itiquira Park o melhor lugar para você e
                    sua família aproveitarem as férias de inverno. Oferecemos opções tanto para as pessoas que desejam
                    fugir do frio, quanto para aquelas que querem aproveitar a natureza em meio a um verdadeiro paraíso.

                    A infraestrutura do Parque é enorme, com piscinas de água corrente, chalés, banheiros, restaurantes
                    e área de camping.
                </p>
                <a href="blog-detail.html" class="btn">ler</a>
            </div>
        </article>
        <article class="col-md-12 blog-post">
            <div class="col-md-3 blog-thumbnail">
                <a href="blog-detail.html"><img src="{{ asset('images/front/news/news-6.jpg') }}" class="img-responsive"
                                                alt=""></a>
            </div>
            <div class="col-md-9 blog-desc">
                <h4><a href="blog-detail.html">Fim de Semana no Paraíso Natural!</a></h4>
                {{--                <div class="blog-detail">--}}
                {{--                    <span><i class="fa fa-user"></i>Author</span>--}}
                {{--                    <span><i class="fa fa-clock-o"></i>4:30</span>--}}
                {{--                    <span><i class="fa fa-comments-o"></i>12 Comments</span>--}}
                {{--                </div>--}}
                <p style="margin-top: 15px">
                    Que tal passar o final de semana em um paraíso natural, onde os pássaros cantam e a natureza
                    encanta?

                    A poucos minutos de Brasília fica o Itiquira Park, surpreendente por sua imensidão de verde e opções
                    de lazer. E o mais importante: não é necessário gastar uma fortuna para ter um final de semana
                    perfeito por lá!

                    Uma das opções de acomodação pode ser um dos chalés espaçosos e aconchegantes do parque, que
                    oferecem todo conforto para uma estadia inesquecível.

                    Área com piscinas de água corrente, piscina aquecida, toboágua, mega-rampas e sauna são apenas
                    algumas opções disponíveis para adultos e crianças.

                    Há também a área de camping, que oferece um contato ainda mais próximo à natureza, com
                    estacionamento exclusivo, vestiários e chuveiros quentes.
                </p>
                <a href="blog-detail.html" class="btn">ler</a>
            </div>
        </article>
        <article class="col-md-12 blog-post">
            <div class="col-md-3 blog-thumbnail">
                <a href="blog-detail.html"><img src="{{ asset('images/front/news/news-5.jpeg') }}"
                                                class="img-responsive" alt=""></a>
            </div>
            <div class="col-md-9 blog-desc">
                <h4><a href="blog-detail.html">O Amor Está No Ar!</a></h4>
                {{--                <div class="blog-detail">--}}
                {{--                    <span><i class="fa fa-user"></i>Author</span>--}}
                {{--                    <span><i class="fa fa-clock-o"></i>4:30</span>--}}
                {{--                    <span><i class="fa fa-comments-o"></i>12 Comments</span>--}}
                {{--                </div>--}}
                <p style="margin-top: 15px">
                    Está se aproximando a época mais romântica do ano: o Dia dos Namorados! Mas se você já tá cansado
                    daquele jantar à luz de velas de todo ano, ou daquele presentão enorme que vai ficar jogado em um
                    canto da sua casa, o Itiquira Park tem uma sugestão a fazer!

                    Para fugir dos shoppings e restaurantes lotados nessa data feita para ser comemorada a dois, o que
                    você acha de variar um pouco e passar um belo fim de semana ao ar livre, desfrutando de um cenário
                    encantador?

                    Com o pensamento de que cada casal tem seu estilo, o Itiquira Park oferece opções tanto para os
                    casais mais radicais, quanto para os casais “paz e amor”.

                    Você pode escolher entre passar o final de semana em um de nossos chalés, que proporcionam um clima
                    romântico, com piscinas e sauna nas proximidades para momentos de relaxamento.
                </p>
                <a href="blog-detail.html" class="btn">ler</a>
            </div>
        </article>

        <div class="col-md-12 text-center">
            <a href="blog-listing.html" class="btn-border">visitar blog</a>
        </div>
    </div>
</section>


<section id="testimonials">
    <div class="container main-content">
        <div class="col-md-12">
            <h2 class="section-title"><span>happy clients</span><br> testimonial</h2>
        </div>

        <div id="sync1" class="owl-carousel col-md-12">

            <div class="item">
                <div class="testimonial">
                    <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specibook. It has survived not only five
                        centuries, but also the leap into electronic typesetting, remaining essentially.
                    </blockquote>
                </div>
            </div>

            <div class="item">
                <div class="testimonial">
                    <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specibook. It has survived not only five
                        centuries, but also the leap into electronic typesetting, remaining essentially.
                    </blockquote>
                </div>
            </div>

            <div class="item">
                <div class="testimonial">
                    <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specibook. It has survived not only five
                        centuries, but also the leap into electronic typesetting, remaining essentially.
                    </blockquote>
                </div>
            </div>
        </div>


        <div id="sync2" class="owl-carousel col-md-12">

            <div class="item">

                <div class="client-img">
                    <img src="images/img/testimonial1.jpg" class="img-responsive" alt="">
                </div>

                <div class="details">
                    <h4>janie doe</h4>
                    <h6>professional swimmer</h6>
                </div>
            </div>

            <div class="item">

                <div class="client-img">
                    <img src="images/img/testimonial2.jpg" class="img-responsive" alt="">
                </div>

                <div class="details">
                    <h4>janie doe</h4>
                    <h6>professional swimmer</h6>
                </div>
            </div>

            <div class="item">

                <div class="client-img">
                    <img src="images/img/testimonial3.jpg" class="img-responsive" alt="">
                </div>

                <div class="details">
                    <h4>janie doe</h4>
                    <h6>professional swimmer</h6>
                </div>
            </div>
        </div>

    </div>
</section>


<section id="pricing">
    <div class="container main-content">
        <div class="col-md-12">
            <h2 class="section-title">Títulos</h2>
            <p class="section-descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae tellus orci.
                Nulla dictum semper leo. Suspendisse dui magna, tincidunt et nisi id, aliquam ultrices odio. Nunc non
                ipsum ac mauris facilisis placerat a quis magna.</p>
        </div>

        <div class="pricing-tables">

            <div class="col-md-3" id="basic">
                <div class="pricing-wrapper">

                    <div class="pricing-header">
                        <div class="price">
                            <span class="value">$17</span>
                        </div>
                        <div class="pricing-plan">
                            <img src="{{ asset('assets/front/images/icons/basic.svg') }}" alt="">
                            <h4>Basic</h4>
                        </div>
                    </div>


                    <div class="pricing-body">
                        <ul class="pricing-features">
                            <li>Up to 6 hrs access to all our pools</li>
                            <li>No Gym Access</li>
                            <li>No Sauna Access</li>
                            <li>No Volleyball Field Access</li>
                            <li>-</li>
                        </ul>
                    </div>


                    <div class="pricing-footer">
                        <a class="btn" href="#">Comprar agora</a>
                    </div>

                </div>
            </div>


            <div class="col-md-3" id="pro">
                <div class="pricing-wrapper">

                    <div class="pricing-header">
                        <div class="price">
                            <span class="value">$39</span>
                        </div>
                        <div class="pricing-plan">
                            <img src="{{ asset('assets/front/images/icons/pro.svg') }}" alt="">
                            <h4>Pro</h4>
                        </div>
                    </div>


                    <div class="pricing-body">
                        <ul class="pricing-features">
                            <li>All day access to all our pools</li>
                            <li>Up to 2hrs Gym Access</li>
                            <li>Up to 45min Sauna Access</li>
                            <li>Volleyball Field Access</li>
                            <li>1 Yoga Lesson</li>
                        </ul>
                    </div>


                    <div class="pricing-footer">
                        <a class="btn" href="#">Comprar agora</a>
                    </div>

                </div>
            </div>
            <div class="col-md-3" id="pro">
                <div class="pricing-wrapper">

                    <div class="pricing-header">
                        <div class="price">
                            <span class="value">$39</span>
                        </div>
                        <div class="pricing-plan">
                            <img src="{{ asset('assets/front/images/icons/pro.svg') }}" alt="">
                            <h4>Pro</h4>
                        </div>
                    </div>


                    <div class="pricing-body">
                        <ul class="pricing-features">
                            <li>All day access to all our pools</li>
                            <li>Up to 2hrs Gym Access</li>
                            <li>Up to 45min Sauna Access</li>
                            <li>Volleyball Field Access</li>
                            <li>1 Yoga Lesson</li>
                        </ul>
                    </div>


                    <div class="pricing-footer">
                        <a class="btn" href="#">Comprar agora</a>
                    </div>

                </div>
            </div>


            <div class="col-md-3" id="ultra">
                <div class="pricing-wrapper">

                    <div class="pricing-header">
                        <div class="price">
                            <span class="value">$99</span>
                        </div>
                        <div class="pricing-plan">
                            <img src="{{ asset('assets/front/images/icons/basic.svg') }}" alt="">
                            <h4>Ultra</h4>
                        </div>
                    </div>


                    <div class="pricing-body">
                        <ul class="pricing-features">
                            <li>15 days access to all our pools</li>
                            <li>3hrs Gym Access Daily</li>
                            <li>All Day Sauna Access</li>
                            <li>Volleyball Field Access</li>
                            <li>10 Yoga Lessons</li>
                        </ul>
                    </div>


                    <div class="pricing-footer">
                        <a class="btn" href="#">Comprar agora</a>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>


<section id="signup">
    <div class="container">
        <div class="col-md-6 col-md-offset-2">
            <h3 class="section-title">registre-se <strong>agora</strong> e ganhe <br> 3 tickets <strong>grátis</strong>
            </h3>
        </div>
        <div class="col-md-4">
            <a href="#" class="btn">registrar</a>
        </div>
    </div>
</section>


<section id="events">
    <div class="container pad80">
        <div class="col-md-12">
            <h2 class="section-title">Últimos eventos</h2>
            <p class="section-descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae tellus orci.
                Nulla dictum semper leo. Suspendisse dui magna, tincidunt et nisi id, aliquam ultrices odio. Nunc non
                ipsum ac mauris facilisis placerat a quis magna.</p>
        </div>

        <div class="col-md-6 pad80">

            <div class="calendar-container">
                <div class="calendar">

                    <header>
                        <h3 class="month"></h3>
                        <a class="btn-prev fa fa-arrow-circle-left"></a>
                        <a class="btn-next fa fa-arrow-circle-right"></a>
                    </header>

                    <table class="table-responsive">
                        <thead class="event-days">
                        <tr></tr>
                        </thead>
                        <tbody class="event-calendar">
                        <tr class="1"></tr>
                        <tr class="2"></tr>
                        <tr class="3"></tr>
                        <tr class="4"></tr>
                        <tr class="5"></tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>


        <div class="col-md-6 pad80">
            <div class="list">

                <div class="day-event" date-month="11" date-day="4" event-class="event">
                    <div class="event-img">
                        <img src="{{ asset('assets/front/images/img/gallery3.jpg') }}" class="img-responsive" alt="">
                    </div>
                    <div class="event-details">
                        <h4>Lorem ipsum 1</h4>
                        <p class="date">4 - 11 - 2016</p>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae tellus orci. Nulla dictum
                            semper leo. Suspendisse dui magna, tincidunt et nisi id, aliquam ultrices odio. Nunc non
                            ipsum ac mauris facilisis placerat a quis magna. Morbi velit leo, commodo tempor sagittis
                            ut, consectetur vitae dolor. Pellentesque eleifend nisi nec congue volutpat. Aliquam non ex
                            quis justo auctor sagittis.</p>
                        <a href="#" class="btn button">ler mais!</a>
                    </div>
                </div>


                <div class="day-event active" date-month="11" date-day="14" event-class="event">
                    <div class="event-img">
                        <img src="{{ asset('assets/front/images/img/event1.jpg') }}" class="img-responsive" alt="">
                    </div>
                    <div class="event-details">
                        <h4>Lorem ipsum 1</h4>
                        <p class="date">14 - 11 - 2016</p>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae tellus orci. Nulla dictum
                            semper leo. Suspendisse dui magna, tincidunt et nisi id, aliquam ultrices odio. Nunc non
                            ipsum ac mauris facilisis placerat a quis magna. Morbi velit leo, commodo tempor sagittis
                            ut, consectetur vitae dolor. Pellentesque eleifend nisi nec congue volutpat. Aliquam non ex
                            quis justo auctor sagittis.</p>
                        <a href="#" class="btn button">ler mais!</a>
                    </div>
                </div>


                <div class="day-event" date-month="11" date-day="29" event-class="event">
                    <div class="event-img">
                        <img src="{{ asset('assets/front/images/img/gallery6.jpg') }}" class="img-responsive" alt="">
                    </div>
                    <div class="event-details">
                        <h4>Lorem ipsum 1</h4>
                        <p class="date">29 - 11 - 2016</p>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae tellus orci. Nulla dictum
                            semper leo. Suspendisse dui magna, tincidunt et nisi id, aliquam ultrices odio. Nunc non
                            ipsum ac mauris facilisis placerat a quis magna. Morbi velit leo, commodo tempor sagittis
                            ut, consectetur vitae dolor. Pellentesque eleifend nisi nec congue volutpat. Aliquam non ex
                            quis justo auctor sagittis.</p>
                        <a href="#" class="btn button">ler mais!</a>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>


<section id="partners">
    <div class="container main-content">
        <div class="owl-carousel partners-slider">
            <div class="item">
                <a href="#"><img src="{{ asset('assets/front/images/partners/envato-logo.svg') }}"
                                 alt="image title"></a>
            </div>
            <div class="item">
                <a href="#"><img src="{{ asset('assets/front/images/partners/envato-logo.svg') }}"
                                 alt="image title"></a>
            </div>
            <div class="item">
                <a href="#"><img src="{{ asset('assets/front/images/partners/envato-logo.svg') }}"
                                 alt="image title"></a>
            </div>
            <div class="item">
                <a href="#"><img src="{{ asset('assets/front/images/partners/envato-logo.svg') }}"
                                 alt="image title"></a>
            </div>
            <div class="item">
                <a href="#"><img src="{{ asset('assets/front/images/partners/envato-logo.svg') }}"
                                 alt="image title"></a>
            </div>
            <div class="item">
                <a href="#"><img src="{{ asset('assets/front/images/partners/envato-logo.svg') }}"
                                 alt="image title"></a>
            </div>
            <div class="item">
                <a href="#"><img src="{{ asset('assets/front/images/partners/envato-logo.svg') }}"
                                 alt="image title"></a>
            </div>
            <div class="item">
                <a href="#"><img src="{{ asset('assets/front/images/partners/envato-logo.svg') }}"
                                 alt="image title"></a>
            </div>
        </div>
    </div>
</section>


<footer id="main-footer">
    <div class="container">

        <div class="row footer-top">

            <div class="col-md-4 col-xs-6 about">
                <img src="{{ asset('assets/front/images/logo-white.svg') }}" alt="">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    changed.</p>
                <ul>
                    <li><span><i class="fa fa-map-marker"></i>New York City, USA</span></li>
                    <li><span><i class="fa fa-phone"></i>(123) 456 789 0012</span></li>
                    <li><span><i class="fa fa-envelope-o"></i><a href="http://cariera.co/cdn-cgi/l/email-protection"
                                                                 class="__cf_email__"
                                                                 data-cfemail="097a7c7979667b7d497a7e6064646c7b6568676d276a6664">[email&#160;protected]</a></span>
                    </li>
                </ul>
            </div>


            <div class="col-md-2 col-xs-6 footer-nav">
                <h4>navigation</h4>
                <ul class="footer-links">
                    <li><a href="#">home</a></li>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">pages</a></li>
                    <li><a href="#">blog</a></li>
                    <li><a href="#">contact us</a></li>
                </ul>
            </div>


            <div class="col-md-2 col-xs-6 footer-social">
                <h4>follow us</h4>
                <ul class="footer-links">
                    <li><a href="#">facebook</a></li>
                    <li><a href="#">twitter</a></li>
                    <li><a href="#">instagram</a></li>
                    <li><a href="#">linkedin</a></li>
                    <li><a href="#">google+</a></li>
                </ul>
            </div>


            <div class="col-md-4 col-xs-6 footer-newsletter">
                <h4>newsletter</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s.</p>

                <form action="#" class="mailchimp">

                    <div id="subscribe-result"></div>

                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                            <button type="submit" class="btn">Subscribe</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>


        <div class="row">
            <div class="col-md-12 text-center copyright">
                <p>&copy; {{ env('APP_NAME') }}. Todos direitos reservados.</p>
            </div>
        </div>

    </div>
</footer>


<script data-cfasync="false"
        src="http://cariera.co/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('assets/front/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/front/js/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/front/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/front/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.shuffle.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.inview.min.js') }}"></script>
<script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/front/js/calendar.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.ajaxchimp.js') }}"></script>
<script src="{{ asset('assets/front/js/custom.js') }}"></script>

<!--[if lt IE 9]>
<script src="{{ asset('assets/front/js/respond.min.js') }}"></script>
<![endif]-->


<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</body>
</html>
