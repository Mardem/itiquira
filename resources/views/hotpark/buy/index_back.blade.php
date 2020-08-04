@extends('layouts.hotpark.buy.main')
@push('content')

    <div id="revealMobile" class="reveal mobile" data-reveal>

        <style type="text/css">

            .reveal.mobile .image {
                background-image: url("https://api.qrserver.com/v1/create-qr-code/?format=svg&amp;size=300x300&amp;data=https://loja.multiclubes.com.br:443/rqr/ingressos/b2c/28062019");
                background-position: center center !important;
                background-size: contain;
                background-repeat: no-repeat;
            }

        </style>

        <div class="name">Acesse também pelo celular</div>

        <div class="row data">

            <div class="columns large-5">

                <div class="image"></div>

            </div>
            <div class="columns large-7">

                <div class="text">
                    <span>Acesse pelo celular</span>
                    <p>Use a camera do seu celular para escanear o código ao lado e abrir o site diretamente no
                        aparelho.</p>
                </div>

            </div>

        </div>

        <div class="row bar">

            <div class="columns large-5 medium-5">

                <div class="brands">
                    Todos os aparelhos<br/>
                    <span class="icon-appleinc"></span>
                    <span class="icon-android"></span>
                    <span class="icon-windows8"></span>
                </div>

            </div>
            <div class="columns large-7 medium-7">

                <div class="image"></div>

            </div>

        </div>

        <button class="close-button" data-close aria-label="Fechar" type="button">
            <span aria-hidden="true">&times;</span>
        </button>

    </div>

    <section class="main" id="app">

        <div class="row">
            <div class="columns large-8 large-centered">

                <div class="loader">

                    <div class="animation">
                        <div></div>
                        <div>Carregando</div>
                        <div>Por favor aguarde</div>
                    </div>

                    <div class="holder content">


                        <div class="steps clearfix">

                            <div class="step current" v-show="step1">
                                <div>1</div>
                                <div>
                                    <div>PASSO 1</div>
                                    <div id="currentStepName">Ingressos</div>
                                </div>
                            </div>

                            <div class="step next">
                                <div>2</div>
                                <div>
                                    <div>PASSO 2</div>
                                    <div>Pagamento</div>
                                </div>
                            </div>

                        </div>

                        <div class="alert" style="display: none">
                            <span class="icon-warning"></span>
                            <span class="text"></span>
                        </div>

                        <div class="row">
                            <div class="container">
                                <b>Itens selecionados</b>
                                <table class="table">
                                    <tbody>
                                    <tr v-for="item in items">
                                        <td scope="row">@{{ item.name }}</td>
                                        <td>@{{ item.price }}</td>
                                        <td>@{{ item.plan }}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>R$ @{{ formatted }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tickets packages" v-show="step1">

                            <div class="cart">

                                <div class="action" role="button">

                                    <div class="row">

                                        <div class="columns large-6 medium-6 small-6 center-left">

                                            <div class="field">
                                                <div class="icon-calendar-check-o"></div>
                                                <div>
                                                    <div>Dia</div>
                                                    <div class="date">
                                                        {{ $date->format('d/m/Y') }}
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="columns large-6 medium-6 small-6 center-right">

                                            <div class="field float-right">
                                                <div class="icon-shopping_cart"></div>
                                                <div class="total">
                                                    <div>Total</div>
                                                    <div>R$ @{{ formatted }}</div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="menu-container">
                                    <div class="menu-centered">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">

                                                @foreach($plans as $plan)
                                                    <div class="swiper-slide swiper-no-swiping">
                                                        <div class="plan-data" data-id="{{ $plan->id }}">
                                                            <p>{{ $plan->name }}</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                @foreach($plans as $plan)
                                    <div id="plan{{ $plan->id }}" class="plan">

                                        <div class="holder clearfix">

                                            <div class="row sale-items">

                                                @foreach($plan->products as $product)
                                                    <div class="columns no-instructions large-4 medium-6">

                                                        <div id="2611" hasTicket="True" class="package sale-item">

                                                            <div data-open="reveal2611" class="columns data clickable"
                                                                 role="button"
                                                                 title="Ver regras e condições"
                                                                 style="border-radius: 0 !important;">


                                                                <div class="equalizer-caption">
                                                                    <div class="name">{{ $product->name }}</div>
                                                                </div>

                                                                <div class="equalizer-price">

                                                                    <div class="price">
                                                                        R$ {{ number_format($product->price, 2, ',', '.') }}</div>

                                                                    <div
                                                                        class="rules">{{ $product->description ?? 'Nenhuma descrição' }}</div>

                                                                </div>
                                                            </div>
                                                            <div class="columns data clickable"
                                                                 role="button" title="Adicionar"
                                                                 id="hot-add{{ $product->id }}"
                                                                 data-available="{{ $product->available }}"
                                                                 data-name="{{ $product->name }}"
                                                                 data-plan="{{ $product->plan->name }}"
                                                                 data-price="{{ $product->price }}"
                                                                 @click="add({{ $product->price }}, 'hot-add{{ $product->id }}')"
                                                                 style="border-radius: 0 !important;padding: 0px!important;font-size: 30px">
                                                                <span>+</span>
                                                            </div>
                                                            <div class="columns data clickable"
                                                                 role="button" title="Adicionar"
                                                                 id="{{ $product->id }}hot-rm"
                                                                 @click="remove({{ $product->price }})"
                                                                 style="border-radius: 0 !important;padding: 0px!important;font-size: 30px">
                                                                <span>-</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                                <form action="https://loja.multiclubes.com.br/rqr/ingressos/b2c/28062019"
                                      data-ajax="true"
                                      data-ajax-begin="navigation.next(); return false;" id="packages" method="post">
                                    <div class="form">

                                        <input type="hidden" name="selection" id="selection" value=""/>
                                        <input type="hidden" name="exceedAvailableQuantity" id="exceedAvailableQuantity"
                                               value="1"/>

                                    </div>
                                    <div class="navigation clearfix">


                                        <button type="submit" class="next success button" @click="showStep2()">
                                            <span>Próximo</span>
                                        </button>

                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="tickets packages" v-show="step2">
                            Analise os produtos que você e finalize a compra
                            <br>
                            <button type="submit" class="next button" @click="notify('Etapa ainda não implementada')">
                                <span>Finalizar compra</span>
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>

@endpush
@push('scripts')
    <script src="https://unpkg.com/vue@2.6.10/dist/vue.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                total: 0,
                formatted: '0',
                items: [],
                step1: true,
                step2: false
            },
            methods: {
                add(value, id) {
                    let input = document.querySelector('#' + id);
                    //input.dataset.available

                    this.items.push({
                        name: input.dataset.name,
                        price: 'R$ ' + (input.dataset.price).toLocaleString('pt-BR'),
                        plan: input.dataset.plan
                    });

                    let fim = this.total += value;
                    this.formatted = (fim).toLocaleString('pt-BR');
                },
                remove(value) {
                    if (this.total <= 0) {
                        this.total = 0;
                    } else {
                        this.items.pop();
                        this.total -= value;
                    }
                },
                showStep2() {
                    this.step1 = false;
                    this.step2 = true;
                },
                notify(msg) {
                    alert(msg);
                }
            }
        });
    </script>
    <script src="{{ asset('assets/js/cart.js') }}"></script>
@endpush
