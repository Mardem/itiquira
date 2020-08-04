@extends('layouts.external.plans.main')
@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="https://www.itiquira.com.br/images/logo.png" alt="" width="250">
            <h2>
                Contratação de título
                <br> {{ request()->get('item-title') }}
            </h2>
            <p class="lead">Torne-se sócio e obtenha vantagens exclusivas!</p>
            <small>Preencha os campos com seus dados para poder prosseguir na contratação do plano</small>
            @if(Session::has('error'))
                <div class="alert alert-danger" style="color: #ffffff;background-color: #ca0012;border-color: #960b13;">
                    {{ Session::get('error') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Seu carrinho</span>
                    <span class="badge badge-secondary badge-pill">1</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Título {{ request()->get('item-title') }}</h6>
                            <small class="text-muted">Contratação de título ({{ request()->get('item-title') }})</small>
                        </div>
                        <span class="text-muted">R$ {{ number_format(request()->get('item-price'), 2, ',', '.') }}</span>
                    </li>
                </ul>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Principais vantagens do sócio</h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <small>Acesso ao Park das Águas e Área VIP gratuito</small>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <small>Área de Churrasco na beira do rio, exclusivo para sócios</small>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <small>Acesso a shows e eventos no interior do clube</small>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <small>Desconto de 50% nas diárias dos Chalés</small>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <small>Desconto de 50% nos pernoites de Camping</small>
                    </li>

                    <li class="btn-toggle d-flex" element-toggle=".link-element">
                        <a href="#toggle" data-toggle="tab" class="btn btn-outline-primary btn-sm mt-2 mb-2" aria-expanded="false">
                            <i class="lni-plus"></i> Ver mais
                        </a>
                    </li>
                    <li class="btn-toggle d-flex sr-only" element-toggle=".link-element">
                        <a href="#toggle" data-toggle="tab" class="btn btn-outline-primary btn-sm mt-2 mb-2" aria-expanded="false">
                            <i class="lni-minus"></i> Ver menos</a>
                    </li>

                    <li class="link-element list-group-item d-flex justify-content-between lh-condensed sr-only">
                        <small>Desconto na locação de espaço para festas</small>
                    </li>
                    <li class="link-element list-group-item d-flex justify-content-between lh-condensed sr-only">
                        <small>Desconto na locação de Som, Iluminação e serviços de DJ</small>
                    </li>
                    <li class="link-element list-group-item d-flex justify-content-between lh-condensed sr-only">
                        <small>Seus amigos e convidados pagam valor reduzido no pernoite de camping</small>
                    </li>
                    <li class="link-element list-group-item d-flex justify-content-between lh-condensed sr-only">
                        <small>Estando presente, você pode alugar mais 02 chalés para seus amigos e convidados e todos eles pagarão o valor de sócio</small>
                    </li>
                </ul>
            </div>

            <div class="col-md-8 order-md-1">
                <h4 class="mb-3"></h4>
                <form class="needs-validation" method="post" action="{{ route('title.store') }}" novalidate>
                    @csrf
                    <input type="hidden" name="plan" value="{{ request()->get('item-title') }}">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="firstName">Nome completo do titular</label>
                            <input type="text" name="name" class="form-control" id="firstName" placeholder="" value="{{ old('name') }}"
                                   required>
                            <div class="invalid-feedback">
                                Digite seu nome completo
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cpf">CPF</label>
                            <input type="text" name="cpf" class="form-control" id="cpf" data-mask="000.000.000-00" value="{{ old('cpf') }}" required>
                            <div class="invalid-feedback">
                                Preencha o campo de CPF
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="rg">RG</label>
                            <input type="text" name="rg" class="form-control" id="rg" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="{{ old('rg') }}" required>
                            <div class="invalid-feedback">
                                Preencha o campo de RG
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="areaCode">Código de área <span class="text-muted">(DDD)</span></label>
                            <input type="text" class="form-control" id="areaCode" name="areaCode" data-mask="00" placeholder="61" value="{{ old('areaCode') }}" required>
                            <div class="invalid-feedback">
                                Preencha o código de área
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone">Número de telefone</label>
                            <input type="text" class="form-control" id="phone" name="phone" data-mask="9 9999-9999" placeholder="9 9999-9999" value="{{ old('phone') }}" required>
                            <div class="invalid-feedback">
                                Preencha o número de telefone
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="rulesAndConditions" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                         aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" style="font-size: 15px">REGULAMENTO DE DIREITO DE FREQUÊNCIA E USO DO SÓCIO FAMILIAR PREFERENCIAL </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Pelo presente instrumento e na melhor forma de direito, de um lado como
                                    CEDENTE, ESTÂNCIA ÁGUAS DO ITIQUIRA, com sede às margens da
                                    Rodovia GO-440, Km 33, inscrita no CNPJ Nº 02.551.257/0001-67, doravante
                                    denominada ESTÂNCIA e do outro lado como CESSIONÁRIO, qualificado
                                    descrito na inclusa proposta, sendo sócio usuário familiar ou quality, com o
                                    pagamento de taxa de manutenção antecipada, doravante denominado
                                    SÓCIO, conforme justo e contratado o que segue: <br><br>
                                    <b>CLÁUSULA 1ª</b> - O presente Certificado tem por objetivo o direito de uso das
                                    instalações internas da ESTÂNCIA, que neste ato é cedido, em caráter
                                    promocional, isento de pagamento do Título, que nesta data está avaliado em
                                    R$ 5.500,00 (cinco mil e quinhentos reais), bastando o SÓCIO qualificado,
                                    estar em concordância com as regras do Art. 61 do DL 70.951/72, arcar com o
                                    pagamento das taxas de manutenção antecipadas, com o pagamento anual de
                                    carteiras (independentes de uso ou frequência do clube) e, realização de
                                    triagem de pele com pagamento trimestral, tanto sua como de seus
                                    dependentes.
                                    <b>PARÁGRAFO ÚNICO</b> – Referido Certificado é entregue ao SÓCIO totalmente
                                    quitado através do programa de fidelidade, onde consiste no pontual
                                    pagamento da taxa de manutenção assumida no período pleiteado descrito no
                                    nesse desse contrato.
                                    <br><br>
                                    <b>CLÁUSULA 2ª</b> - Este contrato terá prazo determinado, podendo ser renovado
                                    pelo mesmo período contratado, automaticamente, desde que o SÓCIO não se
                                    manifeste ou comunique a devida rescisão mediante vontade por escrito, com
                                    antecedência mínima de 30 (trinta) dias. Cumprindo tais exigências o SÓCIO
                                    se isenta de qualquer taxa ou multa, dando por encerrado o contrato.
                                    CLÁUSULA 3ª- Conforme legislação vigente, devido este contrato ser de
                                    vontade bilateral, está sendo assinado somente após o SÓCIO ter vistoriado
                                    todas as dependências da ESTÂNCIA e aceito todas as condições atuais de
                                    uso e gozo.
                                    <br><br>
                                    <b>CLÁUSULA 3ª</b> - Conforme legislação vigente, devido este contrato ser de
                                    vontade bilateral, está sendo assinado somente após o SÓCIO ter vistoriado
                                    todas as dependências da ESTÂNCIA e aceito todas as condições atuais de
                                    uso e gozo. <br><br>
                                    <b>PARÁGRAFO ÚNICO</b> – À parte que der causa ao rompimento da relação
                                    contratual, estará penalizada em pagar uma multa equivalente a 20 (vinte por
                                    cento) do valor do Título e da manutenção pactuada.<br><br>
                                    <b>CLÁUSULA 4ª</b> - O ingresso nas dependências sociais e a utilização das
                                    instalações da ESTÂNCIA estão condicionados a apresentação da Carteira
                                    Social, triagem de pele e comprovante da taxa de manutenção em dia e em
                                    nenhum momento será permitido à entrada e permanência de menores sem
                                    autorização de seus pais ou responsáveis. <br><br>
                                    <b>CLÁUSULA 5ª</b> - Para confecção das Carteiras Sociais, serão exigidos RG do
                                    SÓCIO e dependentes ou certidão de nascimento.<br><br>
                                    <b>CLÁUSULA 6ª</b> - Poderão utilizar das dependências da ESTÂNCIA o SÓCIO e
                                    seus dependentes por este indicado em número de até seis (seis) pessoas
                                    físicas, em hipótese nenhuma será aceito pessoa jurídica como SÓCIO ou
                                    dependente.<br><br>
                                    <b>PARÁGRAFO ÚNICO</b> – Fica o SÓCIO responsável pelos pagamentos das
                                    carteiras de todos dependentes cadastrados, anualmente, independente de
                                    uso ou frequência na ESTÂNCIA, bem como da triagem de pele, que deverá
                                    ser realizada trimestralmente.<br><br>
                                    <b>CLÁUSULA 7ª</b> - Ao SÓCIO e seus dependentes em dia com os pagamentos
                                    citados acima, será garantido o direito de uso, nos dias e horários de
                                    funcionamento estabelecidos pela ESTÂNCIA, pelo período de tempo
                                    estipulado neste instrumento e seguido o estatuto da ESTÂNCIA que será
                                    entregue ao SÓCIO e seus dependentes até trinta dias da data da compra,
                                    devendo o mesmo ser solicitado pelo SÓCIO no caso de não recebimento.<br><br>

                                    <b>PARÁGRAFO PRIMEIRO:</b> O SÓCIO terá desconto de 50% (cinquenta por
                                    cento) nas diárias praticadas nos Chalés da ESTÂNCIA, desde que haja
                                    disponibilidade de vagas no momento da reserva solicitada, terá ainda
                                    desconto de 50% (cinquenta por cento) nas diárias do camping da ESTÂNCIA.
                                    PARÁGRAFO SEGUNDO: A área dos Chalés e suas instalações, são de uso
                                    exclusivo dos associados que estiverem hospedados, ou em condições de day-
                                    user, respeitando o número de vagas disponíveis.<br><br>
                                    <b>CLÁUSULA 8ª</b> - O horário e dias de funcionamento das instalações da
                                    ESTÂNCIA, para efeito desta proposta, compreende-se, as sextas, sábados,
                                    domingos e feriados das 09h00 às 17:00 horas e funcionará em dias e horários
                                    especiais no verão, ou seja em alta temporada, conforme for estabelecido.<br><br>
                                    <b>CLÁUSULA 9ª</b> - Os convidados para adentrar e utilizar as dependências da
                                    ESTÂNCIA, deverão estar acompanhados do SÓCIO e concordar com as taxas
                                    exigidas.<br><br>
                                    <b>CLÁUSULA 10ª</b> - Os pagamentos em cheque pré-datados serão considerados
                                    pagamentos à vista e em hipótese alguma poderão ser cancelados (salvo com
                                    a concordância de ambas as partes), sustados ou suspensos pelo seu emissor,
                                    estando o portador com o direito de tomar as medidas cabíveis para pronta
                                    cobrança e inclusão em órgãos de proteção ao crédito (SPC/SERASA) e/ou
                                    cobranças extra ou judicial, quando não honradas.<br><br>
                                    <p><b>PARÁGRAFO ÚNICO</b> – Da mesma forma acima, a inadimplência de quaisquer pagamentos, inclusive cheques devolvidos por insuficiência de fundos, bem como o não pagamento da taxa de renovação, das carteiras sociais anualmente, facultará a ESTÂNCIA, a também efetuar cobranças pelos meios legais, inclusive incluir o nome do SÓCIO como inadimplente nos órgãos competentes.</p><p><b>CLÁUSULA 11ª</b> - Este certificado é transferível e vendável em qualquer época cabendo exclusivamente ao SÓCIO a indicação do pretendente (devidamente aprovado pela ESTÂNCIA), apresentando na oportunidade o certificado com taxa de manutenção devidamente atualizada, carteiras sociais em dia e mediante pagamento de taxa de transferência de 20% (vinte por cento) do valor do Título. O SÓCIO poderá substituir seus dependentes por outros independente de anuência dos mesmos e mediante pagamento de taxa de transferência equivalente a 20% (vinte por cento) do valor de tabela atual do&nbsp; título por cada dependente; A transferência deverá ser feita na administração da ESTÂNCIA.</p><p><b>CLÁUSULA 12ª&nbsp;</b>- O SÓCIO na aceitação e recebimento do Título impresso no anverso acata integralmente o conteúdo do presente contrato bem como todas as obrigações consignadas no Estatuto Social da ESTÂNCIA e conforme determina a legislação civil brasileira.</p><p><b>CLÁUSULA 13ª</b> - A ESTÂNCIA, não reconhecerá quaisquer outros benefícios que não constem neste certificado ou no estatuto social, que neste ato o SÓCIO declara conhecer e aceitar.</p><p><b>CLÁUSULA 14ª</b> - As partes elegem o Fórum de Formosa – GO para dirimir quaisquer dúvidas do presente contrato. Declaro ter recebido o Certificado de Sócio Familiar Preferencial da Estância Águas do Itiquira, no valor de R$5.500,00 (cinco mil e quinhentos reais). Declaro ainda que o mesmo foi-me entregue totalmente quitado, tendocontribuído apenas com a taxa de manutenção.</p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="accepted" id="same-address" required>
                        <label class="custom-control-label" for="same-address">
                            <a href="#" data-toggle="modal" data-target="#rulesAndConditions">Aceito e estou de acordo com o regulamento</a>
                            <br>
                            <small class="text-muted">O certificado será entregue na sua primeira visita ao clube após todo o procedimento de pagamento ser confirmado.</small>
                        </label>
                        <div class="invalid-feedback">
                            Para continuar leia o termo  e selecione o item
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Próxima etapa</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ asset('js/plugins/jquery.mask.min.js') }}"></script>
    <script>
        $(`.btn-toggle`).click(function(){
            let elementToggle = $(this).attr(`element-toggle`);
            $(elementToggle).toggleClass(`sr-only`);
            $(`.btn-toggle`).toggleClass(`sr-only`);
        });
    </script>
@endpush
