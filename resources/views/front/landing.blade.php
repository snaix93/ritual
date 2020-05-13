@extends('layouts.app')

@section('content')

@include('layouts.header')

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

<!--================Hot Deals Area =================-->
<section class="hot_deals_area section_gap">
{{--    <div class="container-fluid">--}}
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
{{--            <div class="col-lg-6">--}}
{{--                <div class="hot_deal_box">--}}
{{--                    <img class="img-fluid" src="images/main/1.jpg" alt="" width="100%" STYLE="height: 500px;">--}}
{{--                    <div class="content">--}}
{{--                        <h2>@lang('translations.mramura')</h2>--}}
{{--                    </div>--}}
{{--                    <a class="hot_deal_link" href="/Мраморные%20Памятники"></a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-6">--}}
{{--                <div class="hot_deal_box">--}}
{{--                    <img class="img-fluid" src="images/main/3.jpg" alt="" width="100%" STYLE="height: 500px;">--}}
{{--                    <div class="content">--}}
{{--                        <h2>@lang('translations.beton')</h2>--}}
{{--                    </div>--}}
{{--                    <a class="hot_deal_link" href="/Бетонные%20Памятники"></a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
{{--    </div>--}}

</section>


<!--================End Hot Deals Area =================-->

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
                        <a  href="{{$url = url((empty($portfolio->category->name) ? '' : $portfolio->category->name)  . '/' . ($slug = $portfolio->slug). '/')}}"  itemprop=url>
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    @if(!empty($photo = $portfolio->photo))
                                        <img class="img-fluid" itemprop=image style="width: 300px; height: 350px;" src="{{asset($photo = $portfolio->photo->file)}}" title="{{$slug}}" alt="{{$slug}}">
                                    @endif
                                </div>
                                <a  href="{{$url = url((empty($portfolio->category->name) ? '' : $portfolio->category->name)  . '/' . ($slug = $portfolio->slug). '/')}}" >
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
