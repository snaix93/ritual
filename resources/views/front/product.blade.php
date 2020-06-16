@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/lawncare/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/lawncare/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/lawncare/css/magnific-popup.css">
    <script src="https://scripts.sirv.com/sirv.js"></script>
    @include('layouts.header')
    <?php   $title  = $portfolio->name;
    $description = strlen($description = $portfolio->description) > 155 ? substr($description , 0, 155) : $description . '...';
    $category = $portfolio->category_id;
    $ru = session('locale') == 'ru';
    $name = $ru ? 'name_ru' : 'name';
    $description = $ru ? 'description_ru' : 'description';
    $size = $ru ? 'size_ru' : 'size';
    ?>
    <!--================Header Menu Area =================-->
    <section class="bread-crumb banner_area" style="margin-top: -50px;">
        <ul itemscope="" itemType="http://schema.org/BreadcrumbList" id="br_crumb_ul">
            <div class="banner_inner">
                <div class="container">
                    <div class="banner_content text-center">
                        <h2></h2>
                        <div class="page_link" >
                            <a href="/" class="font-size15">Home</a>
                            <a href="{{ url(strtolower($category)) }}">{{ ucwords($category) }}</a>
                            <a>{{ ucwords($portfolio->slug) }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </ul>
    </section>
    <hr style="border: 1px solid grey;">
    <div class="product_image_area">
        <div class="row s_product_inner">
            <div class="col-lg-2">
                <div class="left_sidebar_area">
                    <aside class="left_widgets cat_widgets">
                        <div class="l_w_title">
                            <h3>@lang('translations.categories')</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                @foreach($categories as $category)
                                    @if($category->subcategories()->count() > 0)
                                        <li>
                                            <a href="{{ url('/' . $category->slug  ) }}">{{ $category->$name }}</a>
                                            <ul class="list">
                                                <?php $sub = $category->subCategories()->pluck($name, 'name'); ?>
                                                @foreach($sub as $key => $subCat)
                                                    <li>
                                                        <a href="{{ url('/' . $key ) }}">{{ $subCat }}</a>
                                                    </li>
                                                @endforeach
                                                <li>
                                                    <a href="{{ url('/' . $category->slug) }}">{{ $name == 'name_ru' ? 'Все' : 'Toate ' }}</a>
                                                </li>
                                            </ul>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ url('/' . $category->slug  ) }}">{{ $category->$name }}</a>
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
            </div>
            <div class="col-lg-4">
                <button class="btn btn-lg btn-success" onclick="goBack()">@lang('translations.back') <<</button>
                <div class="s_product_img">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php $add_val = 0 ?>
                            @if(!empty($r_image = $portfolio->rotating_image))
                                <?php $add_val = 1 ?>
                                <li data-target="#carouselExampleIndicators"  data-slide-to="0">

                                    <img src="/images/icons/rotating.png" alt="{{ $portfolio->tags()->pluck('name') }}" width="100%" height="60" style="background-color: white;">
                                </li>
                            @endif
                            @foreach($portfolio->photos as $key => $photo)
                                @if(!empty($photo->file))
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key + $add_val }}" class="{{ $key + $add_val == 0 ? 'active' : '' }}" >
                                        <img src="{{ $photo->file }}" alt="{{ $portfolio->tags()->pluck('name') }}" width="60" height="60" style="background-color: white;">
                                    </li>
                                @endif
                            @endforeach

                        </ol>
                        {{--                            <div class="carousel-inner zoom">--}}
                        <div class="carousel-inner">
                            @if(!empty($r_image))
                                <div class="carousel-item active">
                                    <div class="Sirv" data-src="{{ $portfolio->rotating_image }}"></div>
                                </div>
                            @endif
                            @foreach($portfolio->photos as $key => $photo)
                                @if(!empty($photo->file))
                                    <div class="carousel-item {{ $key + $add_val == 0 ? 'active' : '' }}">
                                        <div class="col-md-2 col-md-offset-0">
                                            <a href="{{ $photo->file }}" class="icon image-popup">
                                                <img class="img-responsive" src="{{ $photo->file }}" style="width: 500px; height: 100%;"/>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1" style="margin-left: 20px;">
                <div class="s_product_text">
                    <h1 style="color: black; font-size: 60px;">{{ $portfolio->$name }}</h1>
                    <form method="POST" action="{{ route('checkout', $portfolio) }}">

                        <h3>  @lang('translations.id'): <strong style="color: red; font-size: 35px"> {{ $portfolio->id }}</strong></h3>
                        <div>
                            @if($portfolio->sizes->count() > 1)
                                <select id="mySelect" name="size" onchange="myFunction()">
                                    @foreach($portfolio->sizes as $size)
                                        <option class="robotic" value="{{ $size->price }}">Размер: {{ $size->size }}</option>
                                    @endforeach
                                </select>
                                <script>
                                    function myFunction() {
                                        var x = document.getElementById("mySelect").value;
                                        document.getElementById("demo").innerHTML = "Цена: " + x;
                                    }
                                </script>
                                <br><br>
                                <h2 id="demo" class="robotic">@lang('translations.price') {{ $portfolio->sizes->first()->price }} Lei</h2>
                            @else
                                <h2>@lang('translations.price'): {{ $portfolio->price }} Lei</h2>
                                <h4 class="robotic"><strong>@lang('translations.size')</strong>: <br> {!! nl2br(e($portfolio->$size)) !!}</h4>
                            @endif

                        </div>
                        <ul class="list">
                            @foreach($portfolio->tags as $tag)
                                <li>
                                    <a class="active" href="#">
                                        <span>@lang('translations.category')</span> : {{$tag->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                        <p>@lang('translations.description'): {!! nl2br(e($portfolio->$description))!!}</p>
                        {{ csrf_field() }}
                        <div class="card_area">
                            <button class="main_btn" type="submit" style="color:white;">@lang('translations.place_order')</button>
                        </div>
                    </form>
                    <br>
                    @if(!empty(Auth::user()) && (Auth::user()->role) == 'admin')
                        <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                            <!-- Button -->
                            <a href="{{  route('admin.portfolios.edit',['portfolio' => $portfolio->slug, 'slug' => $portfolio->slug] )}}"><button class="btn btn-success"><i class="fa fa-pencil"></i> Edit</button></a>

                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
    <section class="feature_product_area section_gap" style="margin-top: 100px;">
        <div class="main_box">
            <div class="container-fluid">
                <div class="row">
                    <div class="main_title">
                        <h2>@lang('translations.produse_similare')</h2>
                    </div>
                </div>
                <div class="latest_product_inner row">
                    @foreach($similarProducts as $key => $portfolio)
                        <div class="col-lg-4 col-md-4 col-sm-6" itemprop=itemListElement itemscope itemtype=http://schema.org/ListItem>
                            <span itemprop=position hidden>{{($key + 1)}}</span>
                            <a  href="{{$url = url($portfolio->category->slug . '/' . ($slug = $portfolio->slug). '/')}}" itemprop=url>
                                <div class="f_p_item">
                                    <div class="f_p_img">
                                        @if(!empty($photo = $portfolio->photo))
                                            <img class="img-fluid" itemprop=image src="{{asset($photo = $portfolio->photo->file)}}" title="{{$slug}}" alt="{{$slug}}">
                                        @endif
                                    </div>
                                    <a href="{{$url = url($portfolio->category->slug . '/' . ($slug = $portfolio->slug). '/')}}">
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
    <script src="/lawncare/js/jquery.min.js"></script>
    <script src="/lawncare/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/lawncare/js/popper.min.js"></script>
    <script src="/lawncare/js/bootstrap.min.js"></script>
    <script src="/lawncare/js/jquery.easing.1.3.js"></script>
    <script src="/lawncare/js/jquery.waypoints.min.js"></script>
    <script src="/lawncare/js/jquery.stellar.min.js"></script>
    <script src="/lawncare/js/owl.carousel.min.js"></script>
    <script src="/lawncare/js/jquery.magnific-popup.min.js"></script>
    <script src="/lawncare/js/scrollax.min.js"></script>
    <script src="/lawncare/js/google-map.js"></script>
    <script src="/lawncare/js/main.js"></script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    @include('layouts.footer')
@endsection
