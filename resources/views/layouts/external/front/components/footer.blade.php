<footer id="main-footer">
    <div class="container">

        <div class="row footer-top">

            <div class="col-md-4 col-xs-6 about">
                <img src="{{ asset('images/front/logo.png') }}" width="234" style="height: 84px ;" alt="Logo itiquira">
                <ul>
                    <li><span><i class="fa fa-map-marker"></i>Itiquira Park, GO-524 - Zona Rural, Formosa - GO, 73801-010, Brasil</span></li>
                    <li><span><i class="fa fa-phone"></i>(61) 3718-1502</span></li>
                    <li><span><i class="fa fa-envelope-o"></i><a href="mailto:contato@itiquira.com.br">contato@itiquira.com.br</a></span></li>
                </ul>
            </div>


            <div class="col-md-2 col-xs-6 footer-nav">
                <h4>Navegação</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('/') }}">home</a></li>
                    <li><a href="{{ route('chalets.search') }}">Busca de chalé</a></li>
                    <li><a href="{{ route('/') }}#pricing">Títulos</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-xs-6 footer-social">
                <h4>Siga-nos</h4>
                <ul class="footer-links">
                    <li><a href="https://www.facebook.com/itiquirapark">facebook</a></li>
                    <li><a href="https://www.instagram.com/itiquirapark/">instagram</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-xs-6 footer-newsletter">
                <h4>newsletter</h4>
                <p>
                    Fique por dentro de todas as promoções e novidades que irão acontecer.
                </p>

                <form action="#" class="mailchimp">

                    <div id="subscribe-result"></div>

                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" name="email" class="form-control" placeholder="Endereço de e-mail">
                            <button type="submit" class="btn">Inscrever</button>
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
