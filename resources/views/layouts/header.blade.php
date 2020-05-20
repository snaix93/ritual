<?php     $routeAs = isset(request()->route()->action['as']) ? request()->route()->action['as'] : 'contact'; ?>
<header class="header_area">
    <div class="top_menu row m0">
        <div class="container-fluid">
            <div class="float-left">
                <p>@lang('translations.call'): <a href="tel:069696111">+373 69 696 111</a></p>
            </div>
            <div class="float-right">
                <ul class="right_side">
                    <li>
                        <a>
                            @lang('translations.delivery')
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand logo_h" href="/">
                    <img src="/images/icons/fantana.png" alt="">
                </a>
                <h3 style="font-family: 'Just Another Hand', cursive, italic">{{ ucwords(request()->getHost()) }}</h3>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <div class="row w-100">
                        <div class="col-lg-7 pr-0">
                            <ul class="nav navbar-nav center_nav pull-right">
                                <li class="nav-item {{ $routeAs == '/' ? 'active' : '' }}">
                                    <a class="nav-link" href="/">@lang('translations.main')</a>
                                </li>
                                <li class="nav-item {{ in_array($routeAs, ['all_products', 'front.index', 'tag_category']) ? 'active' : ''}} )">
                                    <a class="nav-link" href="/all-products">@lang('translations.catalog')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/information/pages/contact">@lang('translations.contact')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/information/pages/tehnologii-de-producere">@lang('translations.tehnologii')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/information/pages/parametri-tehnici">@lang('translations.parametri')</a>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle"><img class="text-primary icon-settings_backup_restore" src="/images/icons/{{ Lang::locale() == 'ru' ? 'ru' : 'ro' }}.png"></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="{{ url('/all-products?language=en&link=' . url()->current()) }}">
                                            <img class="icon-settings_backup_restore" src="/images/icons/ro.png"></a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ url('/all-products?language=ru&link=' . url()->current()) }}">
                                                <img class="icon-settings_backup_restore" src="/images/icons/ru.png"></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
