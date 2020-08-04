@extends('layouts.hotpark.main')
@push('content')

    <div class="menu-extra-mobile menu-rio-mobile d-block d-lg-none">
        <div class="menu-flutuante">
            <ul>
                <li class="item">
                    <a href="https://www.rioquente.com.br/explorar/hoteis">
                        <i class="icon-bed"></i>
                        Nossos Hotéis </a>
                </li>
                <li class="item">
                    <a href="https://www.rioquente.com.br/explorar/diversao">
                        <i class="icon-snorkeling"></i>
                        Diversão para todos </a>
                </li>
                <li class="item">
                    <a href="https://www.rioquente.com.br/explorar/restaurantes">
                        <i class="icon-platter"></i>
                        Restaurantes incríveis </a>
                </li>
                <li class="item">
                    <a href="https://www.rioquente.com.br/explorar/galeria-de-fotos">
                        <i class="icon-camera3"></i>
                        Galeria de fotos </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="menu-site">
        <div class="hamburger" id="ham-3">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="menu-flutuante">
            <ul class="busca-menu">
                <li>
                    <form class="form-search" action="https://www.rioquente.com.br/busca" method="get">
                        <div class="input-group">
                            <input type="search" class="form-control" autocomplete="off"
                                   placeholder="Digite aqui a sua pesquisa" value="" name="s" required="required"
                                   minlength="4" maxlength="456">
                            <button class="btn btn-search" type="submit" id="btn-search"></button>
                        </div>
                    </form>
                </li>
            </ul>
            <a class="btn-abre-reserva" href="https://www.rioquente.com.br/reservar" title="Fazer reserva">Fazer
                Reserva</a>
            <a class="btn-web-checkin d-flex d-sm-none" href="http://webcheckin.aviva.com.br/" target="_blank"
               title="Web Check-in">Web Check-in</a>
            <span class="titulo-menu d-block d-sm-none">Menu</span>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-pills" id="navMenu" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-menu-explorar" data-toggle="pill"
                                   href="#menu-explorar"
                                   role="tab" aria-controls="menu-explorar" aria-selected="true"><span>Rio Quente</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-menu-hotpark" data-toggle="pill" href="#menu-hotpark"
                                   role="tab" aria-controls="menu-hotpark"
                                   aria-selected="false"><span>Hot Park</span></a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="menu-explorar" role="tabpanel"
                                 aria-labelledby="pills-menu-explorar">
                                <div class="row">
                                    <div class="col-6 col-md-6 col-lg-3 d-none d-sm-block">
                                        <nav class="nav-menu-rioquente">
                                            <ul>
                                                <li class="main-link">
                                                    <a href="https://www.rioquente.com.br/explorar">
                                                        Explorar </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/">
                                                        Home </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/explorar/diversao">
                                                        Atrações </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/explorar/hoteis">
                                                        Hotéis </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/explorar/restaurantes">
                                                        Restaurantes </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-3 d-none d-sm-block">
                                        <nav class="nav-menu-rioquente">
                                            <ul>
                                                <li class="main-link">
                                                    <a href="https://www.rioquente.com.br/pacotes-promocionais">
                                                        Pacotes e promoções </a>
                                                </li>
                                                <!--                                                <br />
    <b>Notice</b>:  Undefined variable: promotions in <b>/home/site/wwwroot/app/views/includes/header.php</b> on line <b>324</b><br />
    <br />
    <b>Warning</b>:  Invalid argument supplied for foreach() in <b>/home/site/wwwroot/app/views/includes/header.php</b> on line <b>324</b><br />
                                                -->
                                                <li>
                                                    <a href="https://www.rioquente.com.br/pacotes-promocionais">
                                                        Promoções em destaque </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/pacotes-promocionais">
                                                        Vantagens de comprar </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/reservar">
                                                        Escolha uma data </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/pacotes-promocionais">
                                                        Promoções por mês </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-3 d-none d-sm-block">
                                        <nav class="nav-menu-rioquente">
                                            <ul>
                                                <li class="main-link"><span>Contato</span></li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/perguntas-frequentes">
                                                        Perguntas frequentes </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/ajuda-contato">
                                                        Ajuda </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/ajuda-contato">
                                                        Reservas para grupos </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/institucional">
                                                        Sobre o Rio Quente </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-3 d-none d-sm-block">
                                        <nav class="nav-menu-rioquente">
                                            <ul>
                                                <li class="icone">
                                                    <a href="http://webcheckin.aviva.com.br/" target="_blank">
                                                        <span class="icon-webchekin"></span> Web Check-in </a>
                                                </li>
                                                <li class="icone">
                                                    <a href="https://www.rioquente.com.br/ajuda-contato/#como-chegar">
                                                        <span class="icon-como-chegar"></span> Como chegar </a>
                                                </li>
                                                <li class="icone">
                                                    <a href="https://api.whatsapp.com/send?1=pt_BR&amp;phone=5511972987455&amp;text=Ol%C3%A1.%20Quero%20conversar%20sobre%20hospedagens%20no%20Rio%20Quente"
                                                       target="_blank" rel="noopener" title="1197298-7455">
                                                        <span class="icon-whatsapp1"></span> WhatsApp </a>
                                                </li>
                                                <li class="icone">
                                                    <a href="https://sac-rioquentesp.ascbrazil.com.br/Chat/"
                                                       target="_blank"
                                                       rel="noopener">
                                                        <span class="icon-faq"></span> Chat </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-12 d-block d-sm-none">
                                        <nav class="nav-menu-rioquente">
                                            <ul>
                                                <li class="main-link">
                                                    <a href="https://www.rioquente.com.br/">
                                                        Home </a>
                                                </li>
                                                <li class="main-link">
                                                    <a href="https://www.rioquente.com.br/explorar">
                                                        Explorar </a>
                                                </li>
                                                <li class="main-link">
                                                    <a href="https://www.rioquente.com.br/pacotes-promocionais">
                                                        Pacotes e promoções </a>
                                                </li>
                                                <li class="main-link">
                                                    <a href="https://www.rioquente.com.br/ajuda-contato">
                                                        Contato </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/ajuda-contato/#como-chegar">
                                                        Como chegar </a>
                                                </li>
                                                <li>
                                                    <a href="https://api.whatsapp.com/send?1=pt_BR&amp;phone=5511972987455&amp;text=Ol%C3%A1.%20Quero%20conversar%20sobre%20hospedagens%20no%20Rio%20Quente"
                                                       target="_blank" rel="noopener" title="1197298-7455">
                                                        WhatsApp </a>
                                                </li>
                                                <li>
                                                    <a href="https://sac-rioquentesp.ascbrazil.com.br/Chat/"
                                                       target="_blank"
                                                       rel="noopener">
                                                        Chat </a>
                                                </li>
                                                <li>
                                                    <a class="btn-ver-mais" href="#">ver +</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <nav class="nav-menu-rioquente sub-menu">
                                            <ul>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/explorar/diversao">
                                                        Atrações </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/explorar/hoteis">
                                                        Hotéis </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/explorar/restaurantes">
                                                        Restaurantes </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/explorar/galeria-de-fotos">
                                                        Fotos </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/perguntas-frequentes">
                                                        Perguntas frequentes </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/ajuda-contato">
                                                        Ajuda </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/ajuda-contato">
                                                        Reservas para grupos </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/institucional">
                                                        Sobre o Rio Quente </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="menu-hotpark" role="tabpanel"
                                 aria-labelledby="pills-menu-hotpark">
                                <div class="row">
                                    <div class="col-6 col-md-6 col-lg-3 d-none d-sm-block">
                                        <nav class="nav-menu-rioquente">
                                            <ul>
                                                <li class="main-link">
                                                    <a href="https://www.rioquente.com.br/hot-park">
                                                        Explorar </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/hot-park">
                                                        Home </a>
                                                </li>
                                                <li>
                                                    <a href="atracoes.html">
                                                        Atrações </a>
                                                </li>
                                                <li>
                                                    <a href="club.html">
                                                        Hot Park Club </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-3 d-none d-sm-block">
                                        <nav class="nav-menu-rioquente">
                                            <ul>
                                                <li class="main-link"><span>Ingressos</span></li>
                                                <li>
                                                    <a href="ingressos.html">
                                                        Comprar ingressos </a>
                                                </li>
                                                <li>
                                                    <a href="ingressos.html">
                                                        Formas de pagamento </a>
                                                </li>
                                                <li>
                                                    <a href="ingressos.html">
                                                        Encontre uma loja </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-3 d-none d-sm-block">
                                        <nav class="nav-menu-rioquente">
                                            <ul>
                                                <li class="main-link"><span>Institucional</span></li>
                                                <li>
                                                    <a href="sobre.html">
                                                        Parque Aquático </a>
                                                </li>
                                                <li>
                                                    <a href="http://ekoaventurapark.com.br/" target="_blank">
                                                        Eko Aventura Park </a>
                                                </li>
                                                <li>
                                                    <a href="http://www.turminhadazooeira.com.br/" target="_blank">
                                                        Turminha da Zooeira </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-6 col-md-3 d-none d-sm-block">
                                        <nav class="nav-menu-rioquente">
                                            <ul>
                                                <li class="icone">
                                                    <a href="https://www.rioquente.com.br/ajuda-contato">
                                                        <span class="icon-Phone"></span> Contato </a>
                                                </li>
                                                <li class="icone">
                                                    <a href="https://www.rioquente.com.br/ajuda-contato/#como-chegar">
                                                        <span class="icon-como-chegar"></span> Como chegar </a>
                                                </li>
                                                <li class="icone">
                                                    <a href="https://www.rioquente.com.br/perguntas-frequentes">
                                                        <span class="icon-faq"></span> FAQ </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-12 d-block d-sm-none">
                                        <nav class="nav-menu-rioquente">
                                            <ul>
                                                <li class="main-link">
                                                    <a href="https://www.rioquente.com.br/hot-park">
                                                        Home </a>
                                                </li>
                                                <li class="main-link">
                                                    <a href="atracoes.html">
                                                        Atrações </a>
                                                </li>
                                                <li class="main-link">
                                                    <a href="ingressos.html">
                                                        Comprar ingressos </a>
                                                </li>
                                                <li class="main-link">
                                                    <a href="https://www.rioquente.com.br/ajuda-contato">
                                                        Contato </a>
                                                </li>
                                                <li>
                                                    <a href="club.html">
                                                        Hot Park Club </a>
                                                </li>
                                                <li>
                                                    <a href="sobre.html">
                                                        Sobre o Hot Park </a>
                                                </li>
                                                <li>
                                                    <a href="http://www.turminhadazooeira.com.br/" target="_blank">
                                                        Turminha da Zooeira </a>
                                                </li>
                                                <li>
                                                    <a class="btn-ver-mais" href="#">ver +</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <nav class="nav-menu-rioquente sub-menu">
                                            <ul>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/hot-park">
                                                        Explorar </a>
                                                </li>
                                                <li>
                                                    <a href="http://ekoaventurapark.com.br/" target="_blank">
                                                        Eko Aventura Park </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/ajuda-contato/#como-chegar">
                                                        Como chegar </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.rioquente.com.br/perguntas-frequentes">
                                                        FAQ </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <nav class="nav-redes">
                            <ul>
                                <li><h4>Redes Sociais</h4></li>
                                <li>
                                    <a href="https://www.facebook.com/rioquenteresorts/" target="_blank" rel="noopener">
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="https://api.whatsapp.com/send?1=pt_BR&amp;phone=5511972987455&amp;text=Ol%C3%A1.%20Quero%20conversar%20sobre%20hospedagens%20no%20Rio%20Quente"
                                       target="_blank" rel="noopener" title="WhatsApp">
                                        WhatsApp
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/rioquenteresorts/" target="_blank"
                                       rel="noopener">
                                        Instagram
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/user/rioquente" target="_blank" rel="noopener">
                                        YouTube
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal para Regulamento -->
    <div class="modal fade" id="legal-modal" tabindex="-1" role="dialog" aria-labelledby="legal-modal-label"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="legal-modal-label">Regulamentos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim da Modal para Regulamento -->
    <div class="banner-hoteis banner-hot"
         style="background-image: url(https://www.rioquente.com.br/assets/client/img/ingresso-pelo-site.jpg)">
        <div class="slide-pattern2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-9 order-12 order-md-first">
                        <h1 class="titulo1 wow fadeInDown d-none d-md-block">Economize comprando seu ingresso pelo
                            site</h1>
                    </div>
                    <div class="col-12 col-md-3">
                        <img src="https://www.rioquente.com.br/assets/client/img/logo-hot-park.png"
                             class="img-fluid logo-hotpark-internas wow fadeIn" data-wow-delay="1.5s">
                    </div>
                </div>
            </div>
        </div>
        <a class="btn-down scroll d-none d-md-block" href="#seasons-calendar" title="Veja Mais"><i
                class="icon-chevron-down"></i></a>
    </div>

    @include('layouts.hotpark.partials.table')

    <div class="overflow-janelas"></div>
    <div class="janelas-tel-lojas">
        <div class="fecha-janela"><i class="icon-cross"></i></div>
        <!-- Janela Telefones -->
        <div class="janela-telefones-lojas">
            <div class="row">
                <div class="col-12 col-sm-10 col-xl-12">
                    <h3>Compre seus ingressos ou hospedagens nas nossas lojas oficiais.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-6">
                    <div class="box-loja-1">
                        <h2>Caldas Novas / GO</h2>
                        <h3>Lojas Hot Park</h3>
                        <p class="item-endereco">
                            R. I L de Moraes, 61 – Centro - CEP: 75690-000
                        </p>
                        <p class="item-email">
                            <a href="mailto:loja.caldasnovas@aviva.com.br"
                               title="E-mail">loja.caldasnovas@aviva.com.br</a>
                        </p>
                        <p class="item-phone">
                            <a href="tel:+556434533091" title="(64) 3453-3091">(64) 3453-3091</a> e <a
                                href="tel:+556434533078" title="(64) 3453-3078">(64) 3453-3078</a>
                        </p>
                        <p class="item-atendimento">
                            Atendimento: De domingo a domingo das 8h30 as 23h30.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="box-loja-1">
                        <h2>Goiânia / GO</h2>
                        <h3>Shopping Flamboyant – Quiosque Piso 1</h3>
                        <p class="item-endereco">
                            Av. Dep. Jamel Cecílio, 3.300 – Jardim Goiás CEP: 74810-907
                        </p>
                        <p class="item-email">
                            <a href="mailto:quiosqueflamboyant@aviva.com.br"
                               title="E-mail">quiosqueflamboyant@aviva.com.br</a>
                        </p>
                        <p class="item-phone">
                            <a href="tel:+556235317900" title="(62) 3531-7900">(62) 3531-7900</a> e <a
                                href="tel:+556230863160" title="(62) 3086-3160">(62) 3086-3160</a>
                        </p>
                        <p class="item-whats">
                            <a href="https://wa.me/5562999845375?text=Quero%20saber%20mais%20sobre%20pacotes"
                               title="(62) 99984-5375">(62) 99984-5375</a>
                        </p>
                        <p class="item-atendimento">
                            Atendimento: De segunda a sábado das 10h. as 22h. Domingos e feriados das 14h. as 20h.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="box-loja-1">
                        <h2>Goiânia / GO</h2>
                        <h3>Goiânia Shopping – Quiosque Piso 2</h3>
                        <p class="item-endereco">
                            Av. T-10, nº 1.300 – Setor Bueno CEP: 74223-060
                        </p>
                        <p class="item-email">
                            <a href="mailto:quiosquegoiania@aviva.com.br"
                               title="E-mail">quiosquegoiania@aviva.com.br</a>
                        </p>
                        <p class="item-phone">
                            <a href="tel:+556239320314" title="(62) 3932-0314">(62) 3932-0314</a>
                        </p>
                        <p class="item-whats">
                            <a href="https://wa.me/5564999431008?text=Quero%20saber%20mais%20sobre%20pacotes"
                               title="(64) 99943-1008">(64) 99943-1008</a>
                        </p>
                        <p class="item-atendimento">
                            Atendimento: De segunda a sábado das 10h. as 22h. Domingos e feriados das 14h. as 20h.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="box-loja-2">
                        <div class="row">
                            <div class="col-12 col-xl-12">
                                <h2>Quer comprar só o ingresso. Sem problemas.</h2>
                                <p>Veja como é facíl comprar os ingressos para o Hot park, clique e saiba mais.</p>
                            </div>
                            <div class="col-12 col-xl-7">
                                <a class="btn-lojas" href="https://www.rioquente.com.br/lojas" title="Ver no mapa">ver
                                    pontos de venda de ingresso</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="cards-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <a class="card-foot card-costa"
                       href="https://www.costadosauipe.com.br/?utm_source=rio_quente&amp;utm_medium=banner&amp;utm_campaign=crosslink"
                       target="_blank" title="Conheça outros destinos Aviva: Costa do Sauípe na Bahia">
                        <img src="https://www.rioquente.com.br/assets/client/img/cards-footer/costa.png"
                             alt="Site Costa do Sauípe"/>
                        <p>Conheça outros destinos Aviva: Costa do Sauípe na Bahia</p>
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <a class="card-foot card-relatorio"
                       href="https://www.rioquente.com.br/assets/client/pdf/Relatório de Sustentabilidade_revisado2703.pdf"
                       target="_blank" title="Relatório de sustentabilidade revisado 2017">
                        <img src="https://www.rioquente.com.br/assets/client/img/cards-footer/Relatorio.png"
                             alt="Certificado de Sustentabilidade"/>
                        <p>Veja nosso relatório de sustentabilidade de 2017 e saiba como aprimoramos nosso maior bem, a
                            natureza.</p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card-foot card-trip">
                        <a class="link-trip"
                           href="https://www.tripadvisor.com.br/Attraction_Review-g2229474-d2349342-Reviews-Hot_Park-Rio_Quente_State_of_Goias.html"
                           target="_blank" rel="noopener" title="Certificado Trip Advisor">
                            <img src="https://www.rioquente.com.br/assets/client/img/cards-footer/advisor.png"
                                 alt="Certificado Trip Advisor"/>
                        </a>
                        <p><a href="https://www.rioquente.com.br/depoimentos" title="Depoimentos">"Um dos melhores
                                parques
                                aquáticos do mundo, segundo TripAdvisor e o único com águas quentes correntes e
                                naturais"</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-4">
                    <a class="logo-footer" href="https://www.rioquente.com.br/" title="Rio Quente">
                        <img class="img-fluid"
                             src="https://www.rioquente.com.br/assets/client/img/logo-horizontal-fundo-escuro.svg"
                             alt="Rio Quente"/>
                    </a>
                </div>
                <div class="col-12 col-md-9 col-lg-8">
                    <a href="http://webcheckin.aviva.com.br/" class="btn-2" target="_blank">Check-in</a>
                    <button type="button" class="btn-2 btn-newsletter" data-toggle="modal"
                            data-target="#modalNewsletter">
                        Receba promoções
                    </button>
                </div>
            </div>
        </div>
        <hr/>
        <div class="container d-none d-md-block" id="map-site">
            <div class="row">
                <div class="col-3">
                    <h4>Explorar</h4>
                    <hr/>
                    <ul>
                        <li>
                            <a href="https://www.rioquente.com.br/explorar/diversao">Atrações</a>
                        </li>
                        <li>
                            <a href="https://www.rioquente.com.br/explorar/hoteis">Hotéis</a>
                        </li>
                        <li>
                            <a href="https://www.rioquente.com.br/explorar/restaurantes">Restaurantes</a>
                        </li>
                        <li>
                            <a href="http://webcheckin.aviva.com.br/" target="_blank">Check-in</a>
                        </li>
                    </ul>
                </div>
                <div class="col-3">
                    <h4>Mais</h4>
                    <hr/>
                    <ul>
                        <li>
                            <a href="https://www.rioquente.com.br/institucional">Institucional</a>
                        </li>
                        <li>
                            <a href="https://www.rioquente.com.br/promocoes">Pacotes e promoções</a>
                        </li>
                        <li>
                            <a href="https://www.rioquente.com.br/promocoes/feriados">Feriados</a>
                        </li>
                        <li>
                            <a href="https://www.rioquente.com.br/ajuda-contato">Reservas para grupos</a>
                        </li>
                    </ul>
                </div>
                <div class="col-3">
                    <h4>Hot Park</h4>
                    <hr/>
                    <ul>
                        <li>
                            <a href="atracoes.html">Atrações</a>
                        </li>
                        <li>
                            <a href="sobre.html">Sobre</a>
                        </li>
                        <li>
                            <a href="dicas.html">Dicas e dúvidas</a>
                        </li>
                        <li>
                            <a href="http://ekoaventurapark.com.br/" target="_blank" rel="noopener">Eko Ventura Park</a>
                        </li>
                        <li>
                            <a href="http://www.turminhadazooeira.com.br/" target="_blank" rel="noopener">Turminha da
                                Zooeira</a>
                        </li>
                    </ul>
                </div>
                <div class="col-3">
                    <h4>Ajuda e contato</h4>
                    <hr/>
                    <ul>
                        <li>
                            <a href="https://www.rioquente.com.br/ajuda-contato">Fale com o Rio Quente</a>
                        </li>
                        <li>
                            <a href="https://www.rioquente.com.br/ajuda-contato">Telefones</a>
                        </li>
                        <li>
                            <a href="https://www.rioquente.com.br/ajuda-contato">Central de vendas</a>
                        </li>
                        <li>
                            <a href="https://www.rioquente.com.br/ajuda-contato">Como Chegar</a>
                        </li>
                        <li>
                            <a href="https://www.rioquente.com.br/perguntas-frequentes">Perguntas Frequentes</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12">
                    <a class="assinatura" href="http://www.neotix.com.br/" title="By Neotix">By Neotix</a>
                </div>
            </div>
        </div>
        <hr/>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <ul id="links-rodape" class="d-none d-md-block">
                        <li>
                            <!-- <a href="/ajuda-contato#trabalhe-conosco" class="btn-fale-trabalhe-footer">Trabalhe conosco</a> -->
                            <a href="https://portal.rhobot.com.br/" target="_blank">Trabalhe conosco</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-7">
                    <ul id="social-media">
                        <li>
                            <a aria-label="facebook" href="https://www.facebook.com/rioquenteresorts/" target="_blank"
                               rel="noopener">
                                <i class="icon-social-media icon-fb"></i>
                            </a>
                        </li>
                        <li>
                            <a aria-label="instagram" href="https://www.instagram.com/rioquenteresorts/" target="_blank"
                               rel="noopener">
                                <i class="icon-social-media icon-insta"></i>
                            </a>
                        </li>
                        <li>
                            <a aria-label="youtube" href="https://www.youtube.com/user/rioquente" target="_blank"
                               rel="noopener">
                                <i class="icon-social-media icon-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <div class="logo-aviva">
                                <a href="http://aviva.com.br/" target="_blank" rel="noopener"><img alt="logo-aviva"
                                                                                                   src="https://www.rioquente.com.br/assets/client/img/logo-aviva.png"></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <a class="assinaturaMobile d-block d-md-none" href="http://www.neotix.com.br/" title="By Neotix">By
                    Neotix</a>
            </div>
        </div>
    </footer>
    <!--JANELA DE NOTIFICAÇÕES-->
    <div class="overflow-notificacao"></div>
    <div class="janela-notificacoes">
        <div class="fecha-notificacao"><i class="icon-cross"></i></div>
        <h3>
            Nós mudamos algumas coisas no nosso site recentemente. Veja algumas delas: </h3>

        <ul>

            <li>
                <a href="https://www.rioquente.com.br/pacotes-promocionais/especial-de-agosto-11-a-17-de-agosto"
                   class="type-pacote-promocional">
                    <span>Agora mesmo ALTERAMOS</span>
                    Especial de Agosto </a>
            </li>

            <li>
                <a href="atracoes/quadras-de-areia.html" class="type-atracao">
                    <span>Há 2 horas ALTERAMOS</span>
                    Quadras de areia </a>
            </li>

            <li>
                <a href="https://www.rioquente.com.br/pacotes-promocionais/fique-7-e-pague-6-04-a-11-de-julho"
                   class="type-pacote-promocional">
                    <span>Há 17 horas ALTERAMOS</span>
                    Fique 7 e Pague 6 </a>
            </li>

            <li>
                <a href="https://www.rioquente.com.br/pacotes-promocionais/dia-do-amigo-18-a-21-de-julho"
                   class="type-pacote-promocional">
                    <span>Há 17 horas ALTERAMOS</span>
                    Dia do amigo </a>
            </li>

            <li>
                <a href="https://www.rioquente.com.br/pacotes-promocionais/julho-com-dpa-04-a-11-de-julho"
                   class="type-pacote-promocional">
                    <span>Há 17 horas ALTERAMOS</span>
                    Julho com D.P.A </a>
            </li>

            <li>
                <a href="atracoes/girolesa.html" class="type-atracao">
                    <span>Ontem ALTERAMOS</span>
                    Girolesa </a>
            </li>

            <li>
                <a href="https://www.rioquente.com.br/blog/ferias-de-julho-com-missao-dpa-clubinho-secreto-no-hot-park"
                   class="type-artigo">
                    <span>Ontem ALTERAMOS</span>
                    Ferias de Julho com Missão D.P.A - Clubinho Secreto no Hot Park! </a>
            </li>

            <li>
                <a href="https://www.rioquente.com.br/blog/ferias-julho-detetives-do-predio-azul" class="type-artigo">
                    <span>Ontem ALTERAMOS</span>
                    FERIAS JULHO - Detetives do Prédio Azul </a>
            </li>

            <li>
                <a href="atracoes/clubinho-da-crianca.html" class="type-atracao">
                    <span>Há 2 dias ALTERAMOS</span>
                    Clubinho da criança </a>
            </li>

            <li>
                <a href="atracoes/acqua-river-fini.html" class="type-atracao">
                    <span>Há 5 dias ALTERAMOS</span>
                    Acqua River Fini </a>
            </li>

            <li>
                <a href="https://www.rioquente.com.br/pacotes-promocionais/direto-porto-alegre-21-a-28-de-julho"
                   class="type-pacote-promocional">
                    <span>Há 1 semana ALTERAMOS</span>
                    Direto Porto Alegre </a>
            </li>

            <li>
                <a href="https://www.rioquente.com.br/pacotes-promocionais/julho-com-dpa-14-a-18-de-julho"
                   class="type-pacote-promocional">
                    <span>Há 1 semana ALTERAMOS</span>
                    Julho com D.P.A </a>
            </li>

            <li>
                <a href="https://www.rioquente.com.br/pacotes-promocionais/direto-rio-21-a-28-de-julho"
                   class="type-pacote-promocional">
                    <span>Há 1 semana ALTERAMOS</span>
                    Direto RIO </a>
            </li>

            <li>
                <a href="https://www.rioquente.com.br/pacotes-promocionais/direto-rio-14-a-21-de-julho"
                   class="type-pacote-promocional">
                    <span>Há 1 semana ALTERAMOS</span>
                    Direto RIO </a>
            </li>

            <li>
                <a href="https://www.rioquente.com.br/pacotes-promocionais/junho-27-a-30-de-junho"
                   class="type-pacote-promocional">
                    <span>Há 1 semana ALTERAMOS</span>
                    JUNHO </a>
            </li>

            <li>
                <a href="https://www.rioquente.com.br/explorar/restaurantes/sorveteria-bello-gelatto"
                   class="type-restaurante">
                    <span>Há 1 semana ALTERAMOS</span>
                    Sorveteria Bello Gelatto </a>
            </li>

            <li>
                <a href="https://www.rioquente.com.br/explorar/restaurantes/marolo-cafe" class="type-restaurante">
                    <span>Há 2 semanas ALTERAMOS</span>
                    Marolo Café </a>
            </li>

            <li>
                <a href="https://www.rioquente.com.br/pacotes-promocionais/julho-com-dpa-28-a-01-de-agosto"
                   class="type-pacote-promocional">
                    <span>Há 2 semanas ALTERAMOS</span>
                    Julho com D.P.A </a>
            </li>

            <li>
                <a href="https://www.rioquente.com.br/pacotes-promocionais/julho-com-dpa-25-a-28-de-julho"
                   class="type-pacote-promocional">
                    <span>Há 2 semanas ALTERAMOS</span>
                    Julho com D.P.A </a>
            </li>

            <li>
                <a href="https://www.rioquente.com.br/pacotes-promocionais/julho-com-dpa-21-a-25-de-julho"
                   class="type-pacote-promocional">
                    <span>Há 2 semanas ALTERAMOS</span>
                    Julho com D.P.A </a>
            </li>

        </ul>

    </div>
    <!-- Modal Newsletter -->
    <div class="modal fade" id="modalNewsletter" tabindex="-1" role="dialog" aria-labelledby="modalNewsletterLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content modal-news">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-cross"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="titulo2">Receba nossas promoções no seu e-mail</h3>
                    <p>Assine nossa newsletter e seja o primeiro a saber.</p>
                    <div class="form-news">
                        <form action="https://www.rioquente.com.br/ajuda-contato/enviar" method="POST"
                              accept-charset="UTF-8" class="ajax">
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Digite seu E-mail"
                                       required="required">
                                <input type="hidden" name="form_id" value="newsletter">
                                <input type="hidden" name="newsletter" value="Sim">
                                <input type="hidden" name="midia" value="direct-direct-direct">
                                <div class="input-group-append">
                                    <button class="btn-2" type="submit" id="11">assinar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalNewsletterPromo" tabindex="-1" role="dialog"
         aria-labelledby="modalNewsletterPromoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content modal-news">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-cross"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="titulo2">Receba nossas promoções no seu e-mail</h3>
                    <p>Assine nossa newsletter e seja o primeiro a saber.</p>
                    <div class="form-news">
                        <form action="https://www.rioquente.com.br/ajuda-contato/enviar" method="POST"
                              accept-charset="UTF-8" class="ajax">
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Digite seu E-mail"
                                       required="required">
                                <input type="hidden" name="form_id" value="newsletter">
                                <input type="hidden" name="newsletter" value="Sim">
                                <input type="hidden" name="midia" value="direct-direct-direct">
                                <div class="input-group-append">
                                    <button class="btn-2" type="submit" id="btn-assinar2">assinar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <!-- Newsletter 2 usada apenas em promoções pontuais -->
    <div class="modal fade" id="modalNewsletter2" tabindex="-1" role="dialog" aria-labelledby="modalNewsletter2Label"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content modal-news">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-cross"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="titulo2">Promo Week</h3>
                    <p>Se inscreva para receber promoções especiais de até 15% de desconto + 2 crianças gratuitas!</p>
                    <div class="form-news">
                        <form action="https://www.rioquente.com.br/ajuda-contato/enviar" method="POST"
                              accept-charset="UTF-8" class="ajax">
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="Digite seu E-mail"
                                       required="required">
                                <input type="hidden" name="form_id" value="newsletter">
                                <input type="hidden" name="newsletter" value="Sim">
                                <input type="hidden" name="midia" value="direct-direct-direct">
                                <div class="input-group-append">
                                    <button class="btn-2" type="submit" id="btn-assinar3">assinar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <div class="overflow-janelas"></div>
    <div class="janelas-tel">
        <div class="fecha-janela"><i class="icon-cross"></i></div>
        <!-- Janela Telefones -->
        <div class="janela-telefones">
            <div class="listaTels">
                <div class="row">
                    <div class="col-12 col-xl-6">
                        <h3>Nossos Telefones</h3>
                    </div>
                    <div class="col-12 col-xl-6">
                    </div>
                </div>
                <div class="row rowPai">
                    <div class="col-12 col-xl-6">
                        <div class="row">
                            <div class="col-6">
                                <p><strong>Para RJ, RS, PR, MG e NE</strong></p>
                            </div>
                            <div class="col-6">
                                <p><a href="tel:08009400818">0800 9400 818</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>Belo Horizonte</p>
                            </div>
                            <div class="col-6">
                                <p><a href="tel:+553135155600">(31) 3515 5600</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>Campinas</p>
                            </div>
                            <div class="col-6">
                                <p><a href="tel:+551935129898">(19) 3512 9898</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>Goiânia</p>
                            </div>
                            <div class="col-6">
                                <p><a href="tel:+556234121515">(62) 3412 1515</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>Pernambuco</p>
                            </div>
                            <div class="col-6">
                                <p><a href="tel:+558137712345">(81) 3771 2345</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>Ribeirão Preto</p>
                            </div>
                            <div class="col-6">
                                <p><a href="tel:+551635140400">(16) 3514 0400</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>Rio Quente</p>
                            </div>
                            <div class="col-6">
                                <p><a href="tel:+556435129999">(64) 3512 9999</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>Rio de Janeiro</p>
                            </div>
                            <div class="col-6">
                                <p><a href="tel:+552135120909">(21) 3512 0909</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="row">
                            <div class="col-6">
                                <p>Santo André</p>
                            </div>
                            <div class="col-6">
                                <p><a href="tel:+551135124830">(11) 3512 4830</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>Santos</p>
                            </div>
                            <div class="col-6">
                                <p><a href="tel:+551335139709">(13) 3513 9709</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>São José do Rio Preto</p>
                            </div>
                            <div class="col-6">
                                <p><a href="tel:+551735120500">(17) 3512 0500</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>São José dos Campos</p>
                            </div>
                            <div class="col-6">
                                <p><a href="tel:+551235129808">(12) 3512 9808</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>São Paulo (24Hs)</p>
                            </div>
                            <div class="col-6">
                                <p><a href="tel:+551135124830">(11) 3512 4830</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>Uberaba</p>
                            </div>
                            <div class="col-6">
                                <p><a href="tel:+553433259602">(34) 3325 9602</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>Uberlândia</p>
                            </div>
                            <div class="col-6">
                                <p><a href="tel:+553432217017">(34) 3221 7017</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endpush
@push('scripts')
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('plugins/fullcalendar/packages/core/main.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/packages/daygrid/main.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/packages/timegrid/main.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/packages/list/main.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/packages/interaction/main.js') }}"></script>
    <script src="{{ asset('calendar/ingressos.js') }}"></script>
    <script>
        startCalendar('{{ route('api.get-day') }}');
    </script>
@endpush

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"/>
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/packages/core/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/packages/daygrid/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/packages/timegrid/main.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/packages/daygrid/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.13.0/dist/sweetalert2.min.css">
    <style>
        .fc-past {
            background: #f5f1ee;
        }
        .fc-bgevent {
            opacity: 1;
        }
    </style>
@endpush
