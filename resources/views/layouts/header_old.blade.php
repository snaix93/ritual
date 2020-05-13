<!-- Header -->
<header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">
        <div class="topbar">
            {{--<div class="topbar-social">--}}
                {{--<a href="https://www.facebook.com/buchetto.ro/" class="fs-18 color1 p-r-20 fa fa-facebook"></a>--}}
                {{--<a href="https://www.google.com/search?q=buchetto.romania+instagram&rlz=1C1CHBF_enRO822RO822&oq=buchetto.romania+instagram&aqs=chrome..69i57j69i60l3.10499j0j7&sourceid=chrome&ie=UTF-8" class="fs-18 color1 p-r-20 fa fa-instagram"></a>--}}
                {{--<a href="https://ro.pinterest.com/buchetto_ro/" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>--}}
                {{--<a href="http://g.page/buchetto" class="fs-18 color1 p-r-20 fa fa-google"></a>--}}
                {{--<a href="https://twitter.com/bouquetto1" class="fs-18 color1 p-r-20 fa fa-twitter"></a>--}}
            {{--</div>--}}

            <span class="topbar-child1">
                    Livrare gratuita Bucuresti pentru comenzi cu valoare mai mare de 200 Ron
                </span>
            <div class="topbar-child2">
                    <span class="topbar-email">
                        buchettoro@gmail.com
                          <br>
                        <a href="tel:0726688087" target="_blank" onclick="call()">072 66 88 087</a>
                    </span>

            </div>
        </div>
        <div class="wrap_header">
            <!-- Logo -->
            <a href="/" class="logo" >
                <img src="{{ asset('images/bgd/logo.png')}}" alt="IMG-LOGO">
            </a>

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="{{ url('/')}}">Home</a>
                        </li>

                        <li>
                            <a href="{{ url('/all-products')}}">Toate Produsele</a>
                        </li>
                        <li>
                            <a href="{{ url('flori/flori-de-primavara') }}" class="s-text13">
                                Primavara
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('flori/8_martie') }}" class="s-text13">
                                8 Martie
                            </a>
                        </li>
                        <li>
                            <a>Categorii</a>
                            <ul class="sub_menu">
                                <li><a href="{{ url('flori-in-cutie') }}">Flori în cutie</a></li>
                                <li><a href="{{ url('buchete-de-flori') }}">Buchete de flori</a></li>
                                <li><a href="{{ url('flori/flori-si-dulciuri') }}">Flori și dulciuri</a></li>
                                <li><a href="{{ url('flori/aranjamente-florale') }}">Aranjamente Florale</a></li>
                                <li><a href="{{ url('funerara') }}">Coroane funerare</a></li>
                                <li><a href="{{ url('flori-de-camera') }}">Flori de camera</a></li>
                                <li><a href="{{ url('trandafiri-criogenati') }}">Trandafiri Criogenati</a></li>
                            </ul>
                        </li>
                        <li>
                            <a>Ocazii</a>
                            <ul class="sub_menu">
                                <li><a href="{{ url('flori/aniversare') }}">Aniversare</a></li>
                                <li><a href="{{ url('flori/onomastica') }}">Onomastica</a></li>
                                <li><a href="{{ url('flori/majorat') }}">Majorat</a></li>
                                <li><a href="{{ url('flori/iubita') }}">Pentru Iubita</a></li>
                                <li><a href="{{ url('flori/mama') }}">Pentru Mama</a></li>
                                <li><a href="{{ url('flori/afaceri') }}">Corporate</a></li>
                            </ul>
                        </li>
                        <li>
                            <a>Tipuri de flori</a>
                            <ul class="sub_menu">
                                <li><a href="{{ url('flori/trandafiri') }}">Trandafiri</a></li>
                                <li><a href="{{ url('flori/mini-trandafiri') }}">Mini-trandafiri</a></li>
                                <li><a href="{{ url('flori/eustoma') }}">Lisiantus</a></li>
                                <li><a href="{{ url('flori/multicolor') }}">Mix de flori</a></li>
                                <li><a href="{{ url('flori/crizanteme') }}">Crizanteme</a></li>
                                <li><a href="{{ url('flori/hortensie') }}">Hortensie</a></li>
                            </ul>
                        </li>
                        <li>
                            <a>După culori</a>
                            <ul class="sub_menu">
                                <li><a href="{{ url('flori/rosii') }}">Rosu</a></li>
                                <li><a href="{{ url('flori/albe') }}">Albe</a></li>
                                <li><a href="{{ url('flori/mov') }}">Mov</a></li>
                                <li><a href="{{ url('flori/roz') }}">Roz</a></li>
                                <li><a href="{{ url('flori/bej') }}">Bej</a></li>
                                <li><a href="{{ url('flori/galben') }}">Galben</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('discounts')}}">Reduceri</a>
                        </li>
                        <li>
                            <a href="{{ url('about')}}">About</a>
                        </li>
                        <li>
                            <a href="{{ url('contact')}}">Contact</a>
                        </li>
                        <li>
                            <a href="tel:0726688087" onclick="call()">072 66 88 087</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="/"class="logo-mobile">
            <img src="{{ asset('images/bgd/logo.png')}} }}" alt="IMG-LOGO">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu" >
        <nav class="side-menu">
            <ul class="main-menu">
                <li class="item-menu-mobile">
                    <a href="{{ url('/')}}">Home</a>
                </li>
                <li class="item-menu-mobile">
                    <a href="{{ url('/all-products')}}">Toate Produsele</a>
                </li>
                <li class="item-menu-mobile">
                    <a href="{{  url('flori/8_martie')}}">8 Martie</a>
                </li>
                <li class="item-menu-mobile">
                    <a>Categorii</a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('flori-in-cutie') }}">Flori în cutie</a></li>
                        <li><a href="{{ url('buchete-de-flori') }}">Buchete de flori</a></li>
                        <li><a href="{{ url('flori/flori-si-dulciuri') }}">Flori și dulciuri</a></li>
                        <li><a href="{{ url('flori/aranjamente-florale') }}">Aranjamente Florale</a></li>
                        <li><a href="{{ url('funerara') }}">Coroane funerare</a></li>
                        <li><a href="{{ url('flori-de-camera') }}">Flori de camera</a></li>
                    </ul>
                    <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                </li>
                <li class="item-menu-mobile">
                    <a>Ocazii</a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('flori/aniversare') }}">Aniversare</a></li>
                        <li><a href="{{ url('flori/onomastica') }}">Onomastica</a></li>
                        <li><a href="{{ url('flori/majorat') }}">Majorat</a></li>
                        <li><a href="{{ url('flori/iubita') }}">Pentru Iubita</a></li>
                        <li><a href="{{ url('flori/mama') }}">Pentru Mama</a></li>
                        <li><a href="{{ url('flori/afaceri') }}">Corporate</a></li>
                    </ul>
                    <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                </li>
                <li class="item-menu-mobile">
                    <a>Tipuri de flori</a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('flori/trandafiri') }}">Trandafiri</a></li>
                        <li><a href="{{ url('flori/mini-trandafiri') }}">Mini-trandafiri</a></li>
                        <li><a href="{{ url('flori/eustoma') }}">Lisiantus</a></li>
                        <li><a href="{{ url('flori/multicolor') }}">Mix de flori</a></li>
                        <li><a href="{{ url('flori/crizanteme') }}">Crizanteme</a></li>
                        <li><a href="{{ url('flori/hortensie') }}">Hortensie</a></li>
                    </ul>
                    <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                </li>
                <li class="item-menu-mobile">
                    <a>După culori</a>
                    <ul class="sub-menu">
                        <li><a href="{{ url('flori/rosii') }}">Rosu</a></li>
                        <li><a href="{{ url('flori/albe') }}">Albe</a></li>
                        <li><a href="{{ url('flori/mov') }}">Mov</a></li>
                        <li><a href="{{ url('flori/roz') }}">Roz</a></li>
                        <li><a href="{{ url('flori/bej') }}">Bej</a></li>
                        <li><a href="{{ url('flori/galben') }}">Galben</a></li>
                    </ul>
                    <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                </li>
                <li class="item-menu-mobile">
                    <a href="{{ url('flori/flori-de-primavara') }}" class="s-text13">
                        Flori de Primavara
                    </a>
                </li>
                <li class="item-menu-mobile">
                    <a href="{{ url('trandafiri-criogenati') }}">Trandafiri Criogenati</a>
                </li>
                <li class="item-menu-mobile">
                    <a href="{{ url('flori/aniversare') }}">Aniversare</a>
                </li>
                <li class="item-menu-mobile">
                    <a href="{{ url('flori-in-cutie') }}">Flori în cutie</a>
                </li>
                <li class="item-menu-mobile">
                    <a href="{{ url('buchete-de-flori') }}">Buchete de flori</a>
                </li>
                <li class="item-menu-mobile">
                    <a href="{{ url('flori/flori-si-dulciuri') }}">Flori și dulciuri</a>
                </li>
                <li class="item-menu-mobile">
                    <a href="{{ url('flori/trandafiri') }}">Trandafiri</a>
                </li>
                <li class="item-menu-mobile">
                    <a href="{{ url('flori/flori-de-lux') }}">Flori de lux</a>
                </li>
                <li class="item-menu-mobile">
                    <a href="{{ url('funerara') }}">Coroane Funerare</a>
                </li>
                <li class="item-menu-mobile">
                    <a href="{{ url('discounts')}}">Reduceri</a>
                </li>
                <li class="item-menu-mobile">
                    <a href="{{ url('about')}}">About</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="{{ url('contact')}}">Contact</a>
                </li>
                <li class="item-menu-mobile">
                    <a href="tel:0726688087">072 66 88 087</a>
                </li>
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        <span class="topbar-child1">
                        Livrare gratuita Bucuresti pentru comenzi mai mari de 200 Ron
                        </span>
                </li>

                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <div class="topbar-child2-mobile">
                            <span class="topbar-email">
                                buchettoro@gmail.com
                                <br>
                                          <a href="tel:0726688087" target="_blank">072 66 88 087</a>
                            </span>
                    </div>
                </li>
                <li class="item-menu-mobile">
                    <form method="Get" action="{{ url('all-products') }}">
                        <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search" placeholder="Ex: trandafiri, rosii">

                    </form>
                </li>

                {{--<li class="item-topbar-mobile p-l-10">--}}
                    {{--<div class="topbar-social-mobile">--}}
                        {{--<a href="https://www.facebook.com/buchetto.ro/" class="fs-18 color1 p-r-20 fa fa-facebook"></a>--}}
                        {{--<a href="https://www.google.com/search?q=buchetto.romania+instagram&rlz=1C1CHBF_enRO822RO822&oq=buchetto.romania+instagram&aqs=chrome..69i57j69i60l3.10499j0j7&sourceid=chrome&ie=UTF-8" class="fs-18 color1 p-r-20 fa fa-instagram"></a>--}}
                        {{--<a href="https://ro.pinterest.com/buchetto_ro/" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>--}}
                        {{--<a href="http://g.page/buchetto" class="fs-18 color1 p-r-20 fa fa-google"></a>--}}
                        {{--<a href="https://twitter.com/bouquetto1" class="fs-18 color1 p-r-20 fa fa-twitter"></a>--}}
                    {{--</div>--}}
                {{--</li>--}}
            </ul>
        </nav>
    </div>
</header>