<!-- Left Panel -->
<aside id="left-panel" class="left-panel no-print">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="@yield('activeDash')">
                    <a href="{{ route('home.index') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>

                <li class="menu-title">Controle</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown @yield('activeHotpark')">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Ecopark</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="ti-calendar"></i><a href="{{ route('days.index') }}">Dias</a></li>
                        <li><i class="ti-folder"></i><a href="{{ route('products.index') }}">Produtos</a></li>
                    </ul>
                </li>
                <li class="@yield('activeUsers')">
                    <a href="{{ route('users.index') }}"><i class="menu-icon fa fa-users"></i>Usuários</a>
                </li>

                <li class="menu-item-has-children dropdown @yield('activeChalet')">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon ti-ticket"></i>Atrações</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="ti-home"></i><a href="{{ route('chalets.index') }}">Chalés</a></li>
                        <li class="@yield('activeCamping')"><i class="menu-icon ti-check-box">
                            <a href="{{ route('camping.index') }}"></i>Camping</a>
                        </li>
                    </ul>
                </li>
                <li class="@yield('activeTransaction')">
                    <a href="{{ route('transactions.index') }}"><i class="menu-icon ti-receipt"></i>Transações</a>
                </li>
                <li class="@yield('activeTitle')">
                    <a href="{{ route('titles.index') }}"><i class="menu-icon ti-write"></i>Títulos</a>
                </li>
                <li class="@yield('activeBlog')">
                    <a href="{{ route('posts.index') }}"><i class="menu-icon ti-calendar"></i>Blog</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#let-panel -->
