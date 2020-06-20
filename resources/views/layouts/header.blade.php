<?php     $routeAs = isset(request()->route()->action['as']) ? request()->route()->action['as'] : ''; ?>
<header class="header_area">
    <style>
        .nav{
           padding: 0 15px;
        }
    </style>
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
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
                                <img src="/images/icons/fantana.png" alt="">
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
                            <h6> <img class="icon-settings_backup_restore" src="/images/icons/mover-truck.png" style="margin-right: 15px;">@lang('translations.delivery')</h6>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
