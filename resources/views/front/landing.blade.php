@extends('layouts.app')

@section('content')

    @include('layouts.header')
    <?php
    $title = 'Fantani din Beton armat din cimient';
    $description = "Este realizat din materiale de inalta calitate conform standardelor stabilite. Parametri fintinei: diametru exterior 980mm, diametru interior 650mm, inaltime 1400mm si greutate 620 kg"
    ?>
    {{--//3d carousel style--}}
    <style>
        .slideshow{
            margin: 0 auto;
            padding-top: 50px;
            height: 700px;
            background: #444;
            perspective: 1000px;
        }
        .content{
            margin: auto;
            width: 150px;
            perspective: 1000px;
            position:relative;
            padding-top: 80px;
            transform-style: preserve-3d;
        }
        .slider-content{
            width: 100%;
            position:absolute;
            float:right;
            animation: rotate 30s infinite linear;
            transform-style: preserve-3d;
        }
        .slider-content:hover{
            cursor: pointer;
            animation-play-state: paused;
        }

        .slider-content figure{
            width:130px;
            height:200px;
            border:1px solid #555;
            /*overflow:hidden;*/
            position:absolute;
        }
        .slider-content figure:nth-child(1){
            transform:rotateY(0deg) translateZ(300px);
        }

        .slider-content figure:nth-child(2){
            transform:rotateY(40deg) translateZ(300px);
        }
        .slider-content figure:nth-child(3){
            transform:rotateY(80deg) translateZ(300px);
        }
        .slider-content figure:nth-child(4){
            transform:rotateY(120deg) translateZ(300px);
        }
        .slider-content figure:nth-child(5){
            transform:rotateY(160deg) translateZ(300px);
        }
        .slider-content figure:nth-child(6){
            transform:rotateY(200deg) translateZ(300px);
        }
        .slider-content figure:nth-child(7){
            transform:rotateY(240deg) translateZ(300px);
        }
        .slider-content figure:nth-child(8){
            transform:rotateY(280deg) translateZ(300px);
        }
        .slider-content figure:nth-child(9){
            transform:rotateY(320deg) translateZ(300px);
        }

        .shadow{
            /*position: absolute;*/
            /*box-shadow: 0px 0px 0px #000;*/

        }
        .slider-content img{

            width: 100%;
            height: 100%;
        }
        .slider-content img:hover{
            transform: scale(1.2);
            transition: all 300ms;

        }

        @keyframes rotate {
            from {
                transform: rotateY(0deg);
            }
            to {
                transform: rotateY(360deg);
            }
        }
    </style>
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
                </div>
                <div class="col-md-9">
                    <section class="slideshow" style="background-color: white;">
                        <div class="content">
                            <div class="slider-content">
                                <figure class="shadow"><img src="/images/carousel/0.jpg"></figure>
                                <figure class="shadow"><img src="/images/carousel/1.jpg"></figure>
                                <figure class="shadow"><img src="/images/carousel/2.jpg"></figure>
                                <figure class="shadow"><img src="/images/carousel/3.jpg"></figure>
                                <figure class="shadow"><img src="/images/carousel/4.jpg"></figure>
                                <figure class="shadow"><img src="/images/carousel/6.jpg"></figure>
                                <figure class="shadow"><img src="/images/carousel/7.jpg"></figure>
                                <figure class="shadow"><img src="/images/carousel/8.jpg"></figure>
                                <figure class="shadow"><img src="/images/carousel/9.jpg"></figure>
                                <figure class="shadow"><img src="/images/carousel/11.jpg"></figure>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        @include('layouts.footer')
    </section>

@endsection
