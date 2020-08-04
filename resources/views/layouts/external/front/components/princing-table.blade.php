<section id="pricing">
    <div class="container main-content">
        <div class="pricing-tables">

            <div class="col-md-3" id="basic">
                <div class="pricing-wrapper">

                    <div class="pricing-header">
                        <div class="price">
                            <span class="value">R$ 526</span>
                        </div>
                        <div class="pricing-plan">
                            <img src="{{ asset('images/plan-1.svg') }}" style="width: 150px;height: 112px;">
                            <h4>LIGTH</h4>
                        </div>
                    </div>


                    <div class="pricing-body">
                        <ul class="pricing-features">
                            <li>Titular + 4 dependentes</li>
                            <li><b class="plan-1">Período de 12 meses</b></li>
                            <li>Park das águas + Área VIP</li>
                            <li>50% de desc. na hospedagem</li>
                            <li>50% de desc. no camping</li>
                        </ul>
                    </div>


                    <div class="pricing-footer">
                        <a class="btn" href="{{ route('title.contract',[
                        'item-title' => 'LIGTH',
                        'item-price' => 526,
                        ]) }}">Comprar agora</a>
                    </div>

                </div>
            </div>


            <div class="col-md-3" id="pro">
                <div class="pricing-wrapper">

                    <div class="pricing-header">
                        <div class="price">
                            <span class="value">R$ 960</span>
                        </div>
                        <div class="pricing-plan">
                            <img src="{{ asset('images/plan-2.svg') }}" style="width: 150px;height: 112px;">
                            <h4>PLUS</h4>
                        </div>
                    </div>


                    <div class="pricing-body">
                        <ul class="pricing-features">
                            <li>Titular + 5 dependentes</li>
                            <li><b class="plan-2">Período de 24 meses</b></li>
                            <li>Park das águas + Área VIP</li>
                            <li>50% de desc. na hospedagem</li>
                            <li>50% de desc. no camping</li>
                        </ul>
                    </div>


                    <div class="pricing-footer">
                        <a class="btn" href="{{ route('title.contract',[
                        'item-title' => 'PLUS',
                        'item-price' => 960,
                        ]) }}">Comprar agora</a>
                    </div>

                </div>
            </div>
            <div class="col-md-3" id="pro">
                <div class="pricing-wrapper">

                    <div class="pricing-header">
                        <div class="price">
                            <span class="value">R$ 1.590</span>
                        </div>
                        <div class="pricing-plan" style="background: #ffbf01;">
                            <img src="{{ asset('images/plan-3.svg') }}" style="width: 150px;height: 112px;">
                            <h4>GOLD</h4>
                        </div>
                    </div>


                    <div class="pricing-body">
                        <ul class="pricing-features">
                            <li>Titular + 6 dependentes</li>
                            <li><b class="plan-3">Período de 60 meses</b></li>
                            <li>Park das águas + Área VIP</li>
                            <li>50% de desc. na hospedagem</li>
                            <li>50% de desc. no camping</li>
                        </ul>
                    </div>


                    <div class="pricing-footer">
                        <a class="btn" href="{{ route('title.contract',[
                        'item-title' => 'GOLD',
                        'item-price' => 1590,
                        ]) }}" style="background: #ffbf01;">Comprar agora</a>
                    </div>

                </div>
            </div>


            <div class="col-md-3" id="ultra">
                <div class="pricing-wrapper">

                    <div class="pricing-header">
                        <div class="price">
                            <span class="value">R$ 2.490</span>
                        </div>
                        <div class="pricing-plan">
                            <img src="{{ asset('images/plan-4.svg') }}" style="width: 150px;height: 112px;">
                            <h4>VIP</h4>
                        </div>
                    </div>


                    <div class="pricing-body">
                        <ul class="pricing-features">
                            <li>Titular + 7 dependentes</li>
                            <li><b class="plan-4">Período de 120 meses</b></li>
                            <li>Park das águas + Área VIP</li>
                            <li>50% de desc. na hospedagem</li>
                            <li>50% de desc. no camping</li>
                        </ul>
                    </div>


                    <div class="pricing-footer">
                        <a class="btn" href="{{ route('title.contract',[
                        'item-title' => 'VIP',
                        'item-price' => 2490,
                        ]) }}">Comprar agora</a>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
