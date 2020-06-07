@extends('layouts.app')

@section('content')

@include('layouts.header')
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
{{--<script src="https://scripts.sirv.com/sirv.js"></script>--}}
<!--================Home Banner Area =================-->
{{--<section class="home_banner_area">--}}
{{--    <div class="overlay"></div>--}}
{{--    <div class="banner_inner d-flex align-items-center">--}}
{{--        <div class="container">--}}
{{--            <div class="banner_content row">--}}
{{--                <div class="offset-lg-2 col-lg-8">--}}
{{--                    <h3>Fashion for--}}
{{--                        <br />Upcoming Winter</h3>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna--}}
{{--                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>--}}
{{--                    <a class="white_bg_btn" href="#">View Collection</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!--================End Home Banner Area =================-->
<section class="cat_product_area section_gap" style="margin-top: 80px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="left_sidebar_area">
                    <aside class="left_widgets cat_widgets">
                        <div class="l_w_title">
                            <h3>@lang('translations.categories')</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <?php $name = session('locale') == 'ru' ? 'name_ru' : 'name' ?>
                                @foreach($categories as $categ)
                                    @if($categ->subcategories()->count() > 0)
                                        <li>
                                            <a href="{{ url('/' . $categ->slug  ) }}">{{ $categ->$name }}</a>
                                            <ul class="list">
                                                <?php $sub = $categ->subCategories()->pluck($name, 'name'); ?>
                                                @foreach($sub as $key => $subCat)
                                                    <li>
                                                        <a href="{{ url('/' . $key ) }}">{{ $subCat }}</a>
                                                    </li>
                                                @endforeach
                                                <li>
                                                    <a href="{{ url('/' . $categ->slug) }}">{{ $name == 'name_ru' ? 'Все' : 'Toate ' }}</a>
                                                </li>
                                            </ul>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ url('/' . $categ->slug  ) }}">{{ $categ->$name }}</a>
                                        </li>
                                    @endif
                                @endforeach

                            </ul>
                        </div>
                    </aside>
                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>@lang('translations.contains')</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                @foreach($tags_categories as $tag)
                                    <li>
                                        <a href="/category/tag/{{ $tag->name }}">{{ $tag->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
                <br>
                <form action="{{ url('all-products') }}" method="GET" class="subscription relative">
                    <div class="input-group mb-12">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">@lang('translations.cauta')</button>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-9">
                <video controls autoplay>
                    <source src="/video/slideshow.mov" type="video/mov">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</section>
<!--================Hot Deals Area =================-->
<section class="hot_deals_area section_gap">
    <div class="container-fluid">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="1000">
                    <img src="images/main/fantana.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="1000">
                    <img src="images/main/fantana.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="1000">
                    <img src="images/main/fantana.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h1>Fantana de Piatra Cetatea</h1>
                        <a href="https://www.google.co.uk/" target="_blank"><button type="button" class="btn btn-primary btn-lg">Read More</button></a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="hot_deal_box">
                    <img class="img-fluid" src="images/main/1.jpg" alt="" width="100%" STYLE="height: 500px;">
                    <div class="content">
                        <h2>@lang('translations.mramura')</h2>
                    </div>
                    <a class="hot_deal_link" href="/Мраморные%20Памятники"></a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hot_deal_box">
                    <img class="img-fluid" src="images/main/3.jpg" alt="" width="100%" STYLE="height: 500px;">
                    <div class="content">
                        <h2>@lang('translations.beton')</h2>
                    </div>
                    <a class="hot_deal_link" href="/Бетонные%20Памятники"></a>
                </div>
            </div>
        </div>
    </div>

</section>
<style>
    .carousel {
        margin: 50px auto;
        padding: 0 70px;
    }
    .carousel .item {
        min-height: 330px;
        text-align: center;
        overflow: hidden;
    }
    .carousel .item .img-box {
        height: 160px;
        width: 100%;
        position: relative;
    }
    .carousel .item img {
        max-width: 100%;
        max-height: 100%;
        display: inline-block;
        position: absolute;
        bottom: 0;
        margin: 0 auto;
        left: 0;
        right: 0;
    }
    .carousel .item h4 {
        font-size: 18px;
        margin: 10px 0;
    }
    .carousel .item .btn {
        color: #333;
        border-radius: 0;
        font-size: 11px;
        text-transform: uppercase;
        font-weight: bold;
        background: none;
        border: 1px solid #ccc;
        padding: 5px 10px;
        margin-top: 5px;
        line-height: 16px;
    }
    .carousel .item .btn:hover, .carousel .item .btn:focus {
        color: #fff;
        background: #000;
        border-color: #000;
        box-shadow: none;
    }
    .carousel .item .btn i {
        font-size: 14px;
        font-weight: bold;
        margin-left: 5px;
    }
    .carousel .thumb-wrapper {
        text-align: center;
    }
    .carousel .thumb-content {
        padding: 15px;
    }
    .carousel .carousel-control {
        height: 100px;
        width: 40px;
        background: none;
        margin: auto 0;
        background: rgba(0, 0, 0, 0.2);
    }
    .carousel .carousel-control i {
        font-size: 30px;
        position: absolute;
        top: 50%;
        display: inline-block;
        margin: -16px 0 0 0;
        z-index: 5;
        left: 0;
        right: 0;
        color: rgba(0, 0, 0, 0.8);
        text-shadow: none;
        font-weight: bold;
    }
    .carousel .item-price {
        font-size: 13px;
        padding: 2px 0;
    }
    .carousel .item-price strike {
        color: #999;
        margin-right: 5px;
    }
    .carousel .item-price span {
        color: #86bd57;
        font-size: 110%;
    }
    .carousel .carousel-control.left i {
        margin-left: -3px;
    }
    .carousel .carousel-control.left i {
        margin-right: -3px;
    }
    .carousel .carousel-indicators {
        bottom: -50px;
    }
    .carousel-indicators li, .carousel-indicators li.active {
        width: 10px;
        height: 10px;
        margin: 4px;
        border-radius: 50%;
        border-color: transparent;
    }
    .carousel-indicators li {
        background: rgba(0, 0, 0, 0.2);
    }
    .carousel-indicators li.active {
        background: rgba(0, 0, 0, 0.6);
    }
    .star-rating li {
        padding: 0;
    }
    .star-rating i {
        font-size: 14px;
        color: #ffc000;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Trending <b>Products</b></h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item carousel-item active">
                        <div class="row">
{{--                            @foreach($carousel as $portfolio)--}}
{{--                            <div class="col-sm-3">--}}
{{--                                <div class="thumb-wrapper">--}}
{{--                                    <div class="img-box">--}}
{{--                                        <img src="{{asset($photo = $portfolio->photo->file)}}" title="{{$portfolio->slug}}" alt="{{$portfolio->slug}}" class="img-responsive img-fluid">--}}
{{--                                    </div>--}}
{{--                                    <div class="thumb-content">--}}
{{--                                        <h4>Apple iPad</h4>--}}
{{--                                        <p class="item-price"><strike>{{ $portfolio->discount }}</strike> <span>{{ $portfolio->sizes->count() > 1 ? $portfolio->sizes->first()->price : $portfolio->price }}</span></p>--}}
{{--                                        <div class="star-rating">--}}
{{--                                            <ul class="list-inline">--}}
{{--                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <a href="#" class="btn btn-primary">Add to Cart</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            @endforeach--}}
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="http://dev.website-price.com/images/1589895024cetatea_burlan_cu%20mecanizm%20mic.jpg" class="img-responsive img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Fantana Piatra</h4>
                                        <p class="item-price"><strike>3900</strike> <span>3555</span></p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="http://dev.website-price.com/images/1589895024cetatea_burlan_cu%20mecanizm%20mic.jpg" class="img-responsive img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Fantana Piatra</h4>
                                        <p class="item-price"><strike>3900</strike> <span>3555</span></p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="http://dev.website-price.com/images/1589895024cetatea_burlan_cu%20mecanizm%20mic.jpg" class="img-responsive img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Fantana Piatra</h4>
                                        <p class="item-price"><strike>3900</strike> <span>3555</span></p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="http://dev.website-price.com/images/1589895024cetatea_burlan_cu%20mecanizm%20mic.jpg" class="img-responsive img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Fantana Piatra</h4>
                                        <p class="item-price"><strike>3900</strike> <span>3555</span></p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item carousel-item">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="http://dev.website-price.com/images/1589895024cetatea_burlan_cu%20mecanizm%20mic.jpg" class="img-responsive img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Fantana Piatra</h4>
                                        <p class="item-price"><strike>3900</strike> <span>3555</span></p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="http://dev.website-price.com/images/1589895024cetatea_burlan_cu%20mecanizm%20mic.jpg" class="img-responsive img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Fantana Piatra</h4>
                                        <p class="item-price"><strike>3900</strike> <span>3555</span></p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="http://dev.website-price.com/images/1589895024cetatea_burlan_cu%20mecanizm%20mic.jpg" class="img-responsive img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Fantana Piatra</h4>
                                        <p class="item-price"><strike>3900</strike> <span>3555</span></p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="http://dev.website-price.com/images/1589895024cetatea_burlan_cu%20mecanizm%20mic.jpg" class="img-responsive img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Fantana Piatra</h4>
                                        <p class="item-price"><strike>3900</strike> <span>3555</span></p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item carousel-item">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="/examples/images/products/iphone.jpg" class="img-responsive img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Apple iPhone</h4>
                                        <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="/examples/images/products/canon.jpg" class="img-responsive img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Canon DSLR</h4>
                                        <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="/examples/images/products/pixel.jpg" class="img-responsive img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Google Pixel</h4>
                                        <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="/examples/images/products/watch.jpg" class="img-responsive img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Apple Watch</h4>
                                        <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!--================Feature Product Area =================-->
<section class="feature_product_area section_gap" style="margin-top: 100px;">
    <div class="main_box">
        <div class="container-fluid">
            <div class="row">
                <div class="main_title">

                    @lang('translations.last')
                </div>
            </div>
            <div class="row">
                @foreach($newProducts as $key => $portfolio)
                    <div class="col-lg-3 col-md-3 col-sm-6" itemprop=itemListElement itemscope itemtype=http://schema.org/ListItem>
                        <span itemprop=position hidden>{{($key + 1)}}</span>
                        <a href="{{$url = url((empty($portfolio->category->name) ? '' : $portfolio->category->slug)  . '/' . ($slug = $portfolio->slug). '/')}}" itemprop=url>
                            <div class="f_p_item">
                                <div class="f_p_img">
{{--                                    @if(!empty($r_image))--}}
                                        <div class="carousel-item active">
                                            <div class="Sirv" data-src="{{ $portfolio->rotating_image }}"></div>
                                        </div>
{{--                                    @endif--}}
{{--                                    @if(!empty($photo = $portfolio->photo))--}}
{{--                                        <img class="img-fluid" itemprop=image style="width: 300px; height: 350px;" src="{{asset($photo = $portfolio->photo->file)}}" title="{{$slug}}" alt="{{$slug}}">--}}
{{--                                    @endif--}}
                                </div>
                                <a  href="{{$url = url((empty($portfolio->category->name) ? '' : $portfolio->category->slug)  . '/' . ($slug = $portfolio->slug). '/')}}" >
                                    <h4>{{$portfolio->name}}</h4>
                                </a>
                                <h5>{{ $portfolio->sizes->count() > 1 ? $portfolio->sizes->first()->price : $portfolio->price  }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--================End Feature Product Area =================-->
    @include('layouts.footer')
@endsection
