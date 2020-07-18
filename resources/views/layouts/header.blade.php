<?php     $routeAs = isset(request()->route()->action['as']) ? request()->route()->action['as'] : ''; ?>
<header class="header_area">
    <style>
        .nav{
            padding: 0 15px;
        }
        .heightNav{
            height: 31px;
        }
        @media screen and (max-width: 700px) {
            .mobile_hide {
                display: block;
            }
            .product_image_area{
                margin-top: -90px
            }
            .mobile_none{
                display: none;
            }
        }
        @media screen and (min-width: 700px) {
            .mobile_hide {
                display: none;
            }
            .mobile_none{
                display: block;
            }
        }
    </style>
    <?php $name = session('locale') == 'ru' ? 'name_ru' : 'name' ?>
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <button class="btn btn-lg btn-success mobile_hide" onclick="goBack()">@lang('translations.back') <img src="/images/icons/back.png"></button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <div class="row">
                        <ul class="nav navbar-nav center_nav pull-right">
                            <li class="nav-item">
                                <a class="nav-link" href="/">
                                    <h2 class="nav-link" href="/" style="font-size: 2em; font-family: 'Times New Roman', Times, serif;"><img src="/images/icons/fantana.png" alt="">Fantana.md</h2>
                                </a>
                            </li>
                            {{--                            <li class="nav-item heightNav {{ $routeAs == '/' ? 'active' : '' }}">--}}
                            {{--                               <a class="nav-link" href="/">@lang('translations.main')</a>--}}
                            {{--                            </li>--}}
                            @if(!empty($categories))
                                @foreach($categories as $categ)
                                    @if($categ->subcategories()->count() > 0)
                                        <li class="nav-item submenu dropdown mobile_hide">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="{{ url('/' . $categ->slug  ) }}">{{ $categ->$name }}         <img class="pull-center" src="/images/icons/down.png" alt=""></a>
                                            <ul class="dropdown-menu">
                                                <?php $sub = $categ->subCategories()->pluck( $name, 'slug'); ?>
                                                @foreach($sub as $key => $subCat)
                                                    <li class="nav-item heightNav">
                                                        <a class="nav-link"  href="{{ url('/' . $key ) }}">{{ $subCat }}</a>
                                                    </li>
                                                @endforeach
                                                <li class="nav-item heightNav">
                                                    <a class="nav-link"  href="{{ url('/' . $categ->slug) }}">{{ $name == 'name_ru' ? 'Все' : 'Toate ' }}</a>
                                                </li>
                                            </ul>
                                        </li>
                                    @else
                                        <li class="nav-item heightNav mobile_hide">    <a class="nav-link" href="{{ url('/' . $categ->slug  ) }}">{{ $categ->$name }}</a></li>
                                    @endif
                                @endforeach
                            @endif
                            @if(!empty($tags_categories))
                                <li class="nav-item heightNav submenu dropdown mobile_hide">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="{{ url('/' . $categ->slug  ) }}">Tip de fantani<img class="pull-center" src="/images/icons/down.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        @foreach($tags_categories as $tag)
                                            <li class="nav-item heightNav mobile_hide">
                                                <a class="nav-link" href="/category/tag/{{ $tag->name }}">{{ $tag->$name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                            <li class="nav-item heightNav {{ in_array($routeAs, ['all_products', 'front.index', 'tag_category']) ? 'active' : ''}} )">
                                <a class="nav-link" href="/all-products">@lang('translations.catalog')</a>
                            </li>
                            <li class="nav-item heightNav  {{ $routeAs == 'tehnologii' ? 'active' : '' }}">
                                <a class="nav-link" href="/information/pages/tehnologii-de-producere">@lang('translations.tehnologii')</a>
                            </li>
                            <li class="nav-item heightNav  {{ $routeAs == 'works' ? 'active' : '' }}">
                                <a class="nav-link" href="/information/pages/lucrarile-noastre">@lang('translations.works')</a>
                            </li>
                            <li class="nav-item heightNav  {{ $routeAs == 'parametri' ? 'active' : '' }}">
                                <a class="nav-link"  href="/information/pages/parametri-tehnici">@lang('translations.parametri')</a>
                            </li>
                            <li class="nav-item heightNav {{ $routeAs == 'contact' ? 'active' : '' }}">
                                <a class="nav-link" href="/information/pages/contact">@lang('translations.contact')</a>
                            </li>
                            <li class="nav-item heightNav"><a class="nav-link" href="{{ url('/all-products?language=en&link=' . url()->current()) }}">
                                    <img class="icon-settings_backup_restore" src="/images/icons/ro.png"></a>
                            </li>
                            <li class="nav-item heightNav"><a class="nav-link" href="{{ url('/all-products?language=ru&link=' . url()->current()) }}">
                                    <img class="icon-settings_backup_restore" src="/images/icons/ru.png"></a>
                            </li>
                            <li class="nav-item heightNav mobile_hide">
                                <a style="color: red;" class="nav-link mobile_hide"><img class="icon-settings_backup_restore" src="/images/icons/mover-truck.png" style="margin-right: 15px;">@lang('translations.delivery')</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="top_menu">
        <div class="container-fluid">
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
