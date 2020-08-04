@include('layouts.external.chalet.partials.header')

<div id="mobile-bar">
    <a class="menu-trigger" href="#mobilemenu"><i class="fa fa-bars"></i></a>
    <h1 class="mob-title">Hospedagem de chalé</h1>
</div>

<div id="page">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    @include('layouts.external.chalet.partials.components.menu')

                    <div id="mobilemenu">
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="index_alt.html">Home 2</a></li>
                            <li class='current'><a class='current' href="listing-3col.html">Listing</a></li>
                            <li><a href="listing-4col.html">Listing 4 Columns</a></li>
                            <li><a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="#">Sub Item</a></li>
                                    <li><a href="#">Sub Item</a></li>
                                    <li><a href="#">Sub Item Longer</a></li>
                                    <li><a href="#">Sub Item</a></li>
                                </ul>
                            </li>
                            <li><a href="booking.html">Booking Page</a></li>
                            <li><a href="gallery-single.html">Galleries</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div> <!-- main container -->
            </div>
        </div>
    </header>

    @stack('content')

    @include('layouts.external.chalet.partials.components.footer')
</div> <!-- #page -->

@include('layouts.external.chalet.partials.footer')
