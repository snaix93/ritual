@extends('layouts.app')

@section('content')
    <script src="https://scripts.sirv.com/sirv.js"></script>
    @include('layouts.header')
    <?php   $title  = $portfolio->name;
    $description = strlen($description = $portfolio->description) > 155 ? substr($description , 0, 155) : $description . '...';
    $category = $portfolio->category_id;
    ?>
    <style>
        .zoomD {
            width: 600px;
            height: auto;
            cursor: pointer;
        }

        /* [LIGHTBOX BACKGROUND] */
        #lb-back {
            position: fixed;
            top: 0;
            left: 20%;
            width: 50%;
            height: 100%;
            background: rgba( 0, 0, 0, 0.8 );
            z-index: 999;
            visibility: hidden;
            opacity: 0;
            transition: all ease 0.4s;
        }
        #lb-back.show {
            visibility: visible;
            opacity: 1;
        }

        /* [LIGHTBOX IMAGE] */
        #lb-img {
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
        }
        #lb-img img {
            /* You might want to play around with
               width, height, max-width, max-height
               to fit portrait / landscape pictures properly. */
            /* ALTERNATE EXAMPLE
            width: 100%;
            max-width: 1200px;
            height: auto;
            margin: 0 auto; */
        }
    </style>
    <div id="lb-back">
        <div id="lb-img"></div>
    </div>

    <!-- [THE IMAGES] -->
{{--    <img src="http://ritual.test/images/main/fantana.jpg" class="zoomD1"/>--}}
{{--    <img src="http://ritual.test/images/15886668921588596991aa.jpg" width="500" height="500" class="zoomD1"/>--}}
    <button onclick="zoomImgs('zoomD1')">2</button>
    <button onclick="zoomImgs('zoomD')">1</button>
    <script type="text/javascript">
        // function zoomImgs(id){
        //     console.log(1);
            var zoomImg = function () {
                // Create evil image clone
                var clone = this.cloneNode();
                clone.classList.remove('zoomD1');

                // Put evil clone into lightbox
                var lb = document.getElementById("lb-img");
                lb.innerHTML = "";
                lb.appendChild(clone);

                // Show lightbox
                lb = document.getElementById("lb-back");
                lb.classList.add("show");
            };

            window.addEventListener("load", function(){
                // Attach on click events to all .zoomD images
                var images = document.getElementsByClassName('zoomD1');
                if (images.length>0) {
                    for (var img of images) {
                        img.addEventListener("click", zoomImg);
                    }
                }

                // Click event to hide the lightbox
                document.getElementById("lb-back").addEventListener("click", function(){
                    this.classList.remove("show");
                })
            });
        // }

    </script>
    <!--================Header Menu Area =================-->
    <section class="bread-crumb banner_area" style="margin-top: -80px;">
        <ul itemscope="" itemType="http://schema.org/BreadcrumbList" id="br_crumb_ul">
            <div class="banner_inner">
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>{{ $portfolio->name }}</h2>
                        <div class="page_link">
                            <a href="/">Home</a>
                            <a href="{{ url(strtolower($category)) }}">{{ ucwords($category) }}</a>
                            <a>{{ ucwords($portfolio->slug) }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </ul>
    </section>
    <style>
        * {
            box-sizing: border-box;
        }

        .zoom {
            transition: transform .2s;
        }

        .zoom:hover {
            -ms-transform: scale(1.5); /* IE 9 */
            -webkit-transform: scale(1.5); /* Safari 3-8 */
            transform: scale(1.5);
        }
    </style>
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
                                        <?php $name = session('locale') == 'ru' ? 'name_ru' : 'name' ?>
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
                    <div class="s_product_img">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php $add_val = 0 ?>
                                @if(!empty($r_image = $portfolio->rotating_image))
                                    <?php $add_val = 1 ?>
                                <li data-target="#carouselExampleIndicators"  data-slide-to="0">
                                    <img src="/images/icons/rotating.png" alt="{{ $portfolio->tags()->pluck('name') }}" width="60" height="60" style="background-color: white;">
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
{{--                                            <a href="{{ $photo->file }}">--}}
                                                <img class="d-block w-100 zoomD1" src="{{ $photo->file }}" alt="{{ $portfolio->tags()->pluck('name') }}" style="max-height: 700px">
{{--                                            </a>--}}

                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1" style="margin-left: 20px;">
                    <div class="s_product_text">
                        <form method="POST" action="{{ route('checkout', $portfolio) }}">
                        <h1>{{ $portfolio->name }}</h1>
                        <div>
                            @if($portfolio->sizes->count() > 1)
                                <select id="mySelect" name="size" onchange="myFunction()">
                                    @foreach($portfolio->sizes as $size)
                                        <option value="{{ $size->price }}">Размер: {{ $size->size }}</option>
                                    @endforeach
                                </select>
                                <script>
                                    function myFunction() {
                                        var x = document.getElementById("mySelect").value;
                                        document.getElementById("demo").innerHTML = "Цена: " + x;
                                    }
                                </script>
                            <br><br>
                                <h2 id="demo">Цена: {{ $portfolio->sizes->first()->price }} Lei</h2>
                            @else
                                <h2>@lang('translations.price'): {{ $portfolio->price }} Lei</h2>
                                <h4>@lang('translations.size'): {{ $portfolio->price3 }}</h4>
                            @endif

                        </div>
                        <h4>@lang('translations.id'): {{ $portfolio->price2 }} - {{ $portfolio->id }}</h4>
                        <ul class="list">
                            @foreach($portfolio->tags as $tag)
                            <li>
                                <a class="active" href="#">
                                    <span>@lang('translations.category')</span> : {{$tag->name}}</a>
                            </li>
                            @endforeach
                            <li>
                                {{ $portfolio->available ? 'Есть в наличии' : 'Нет в наличии' }}
                            </li>

                        </ul>
                        <p>@lang('translations.description'): {{ $portfolio->description }}</p>
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
    @include('layouts.footer')
@endsection
