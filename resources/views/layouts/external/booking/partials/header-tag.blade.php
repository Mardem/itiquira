<header id="main-header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a class="logo" href="{{ route('/') }}">
                        <img src="{{ asset('images/front/logo.png') }}" alt="Image Alternative text" style="width: 45% !important;" title="Imagem da logo do {{ env('APP_NAME') }}" />
                    </a>
                </div>

                <div class="col-md-9">
                    <div class="top-user-area clearfix">
                        <ul class="top-user-area-list list list-horizontal list-border">
                            <li><a href="https://www.facebook.com/itiquirapark"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                            <li><a href="https://www.instagram.com/itiquirapark/"><i class="fa fa-instagram"></i> Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="container-menu">
        <div class="nav">
            <ul class="slimmenu" id="slimmenu">
                <li><a href="{{ route('/') }}">Home</a></li>
                <li><a href="{{ route('chalets.search') }}">Reservas</a></li>
            </ul>
        </div>
    </div>
</header>
