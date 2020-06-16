<?php     $routeAs = isset(request()->route()->action['as']) ? request()->route()->action['as'] : ''; ?>
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand logo_h" href="/">
                    <img src="/images/icons/fantana.png" alt="">
                </a>
                {{--                <h3 style="font-family: 'Just Another Hand', cursive, italic">{{ ucwords(request()->getHost()) }}</h3>--}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <div class="row">
                        <ul class="nav navbar-nav center_nav pull-right">
                            <li class="nav-item">
                                <h2 class="nav-link" href="/" style="font-size: 2em; font-family: 'Times New Roman', Times, serif;">Fantana.md</h2>
                            </li>
                            <li class="nav-item {{ $routeAs == '/' ? 'active' : '' }}">
                                <a class="nav-link" href="/">@lang('translations.main')</a>
                            </li>
                            <li class="nav-item {{ in_array($routeAs, ['all_products', 'front.index', 'tag_category']) ? 'active' : ''}} )">
                                <a class="nav-link" href="/all-products">@lang('translations.catalog')</a>
                            </li>
                            <li class="nav-item  {{ $routeAs == 'tehnologii' ? 'active' : '' }}">
                                <a class="nav-link" href="/information/pages/tehnologii-de-producere">@lang('translations.tehnologii')</a>
                            </li>
                            <li class="nav-item  {{ $routeAs == 'works' ? 'active' : '' }}">
                                <a class="nav-link" href="/information/pages/lucrarile-noastre">@lang('translations.works')</a>
                            </li>
                            <li class="nav-item  {{ $routeAs == 'parametri' ? 'active' : '' }}">
                                <a class="nav-link"  href="/information/pages/parametri-tehnici">@lang('translations.parametri')</a>
                            </li>
                            <li class="nav-item {{ $routeAs == 'contact' ? 'active' : '' }}">
                                <a class="nav-link" href="/information/pages/contact">@lang('translations.contact')</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/all-products?language=en&link=' . url()->current()) }}">
                                    <img class="icon-settings_backup_restore" src="/images/icons/ro.png"></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/all-products?language=ru&link=' . url()->current()) }}">
                                    <img class="icon-settings_backup_restore" src="/images/icons/ru.png"></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/fantana.md/">
                                    <img class="icon-settings_backup_restore" src="/images/icons/facebook.png"></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/fantana.md/">
                                    <img class="icon-settings_backup_restore" src="/images/icons/instagram-sketched.png"></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://api.whatsapp.com/send?phone=0037369696111">
                                    <img class="icon-settings_backup_restore" src="/images/icons/wp.png"></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="viber://chat/?number=%2B0037369696111">
                                    <img class="icon-settings_backup_restore" src="/images/icons/viber.png"></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="top_menu">
        <div class="container-fluid">
{{--            <div class="float-left">--}}
{{--                <p>@lang('translations.call'): <a href="tel:069696111">+373 69 696 111</a></p>--}}
{{--            </div>--}}
            <div class="float-left">
                <ul class="right_side">
                    <li>
                        <a style="color: red;">
                            <h6> <img class="icon-settings_backup_restore" src="/images/icons/mover-truck.png">@lang('translations.delivery')</h6>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
