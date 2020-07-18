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
            perspective: 1200px;
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
            animation: rotate 40s infinite linear;
            transform-style: preserve-3d;
        }
        .slider-content:hover{
            cursor: pointer;
            animation-play-state: paused;
        }

        .slider-content figure{
            width:110px;
            height:170px;
            border:1px solid #555;
            /*overflow:hidden;*/
            position:absolute;
        }
        .slider-content figure:nth-child(1){
            transform:rotateY(0deg) translateZ(320px);
        }

        .slider-content figure:nth-child(2){
            transform:rotateY(40deg) translateZ(320px);
        }
        .slider-content figure:nth-child(3){
            transform:rotateY(80deg) translateZ(320px);
        }
        .slider-content figure:nth-child(4){
            transform:rotateY(120deg) translateZ(320px);
        }
        .slider-content figure:nth-child(5){
            transform:rotateY(160deg) translateZ(320px);
        }
        .slider-content figure:nth-child(6){
            transform:rotateY(200deg) translateZ(320px);
        }
        .slider-content figure:nth-child(7){
            transform:rotateY(240deg) translateZ(320px);
        }
        .slider-content figure:nth-child(8){
            transform:rotateY(280deg) translateZ(320px);
        }
        .slider-content figure:nth-child(9){
            transform:rotateY(320deg) translateZ(320px);
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
                <div class="col-md-9">
                    <section class="slideshow" style="background-color: white;">
                        <div class="content">
                            <div class="slider-content">
                                @foreach($newProducts as $portfolio)
                                    @if(!empty($portfolio->photos->last()->file))
                                        <figure class="shadow">
                                            <a href="{{$url = url((empty($portfolio->category->name) ? '' : $portfolio->category->slug)  . '/' . ($slug = $portfolio->slug). '/')}}">
                                                <img src="{{ $portfolio->photos->last()->file }}">
                                            </a>
                                        </figure>
                                        @endif
                                @endforeach
{{--                                <figure class="shadow"><a href="http://fantana.md/Fantana/F-nt-na-Strugure-S-3c-cafenie-cu-capac-360"><img src="/images/carousel/2.jpg"></a></figure>--}}
{{--                                <figure class="shadow"><a href="http://fantana.md/Fantana/F-nt-na-Cetatea-C-3c-neagra-cu-capac-360"><img src="/images/carousel/3.jpg"></a></figure>--}}
{{--                                <figure class="shadow"><a href="http://fantana.md/Fantana/F-nt-na-Cetatea-C-3c-cafenie-cu-capac"><img src="/images/carousel/4.jpg"></a></figure>--}}
{{--                                <figure class="shadow"><a href="http://fantana.md/Fantana/F-nt-na-Moldova-M-3c-neagra-cu-capac-360"><img src="/images/carousel/6.jpg"></a></figure>--}}
{{--                                <figure class="shadow"><a href="http://fantana.md/Fantana/F-nt-na-Moldova-M-3c-cafeniu-cu-capac-360"><img src="/images/carousel/7.jpg"></a></figure>--}}
{{--                                <figure class="shadow"><a href="http://fantana.md/Fantana/F-nt-na-Strugure-Sn-3c-neagra-cu-capac-360"><img src="/images/carousel/8.jpg"></a></figure>--}}
{{--                                <figure class="shadow"><a href="http://fantana.md/Fantana/F-nt-na-Strugure-S-3c-cafenie-cu-capac-360"><img src="/images/carousel/9.jpg"></a></figure>--}}
{{--                                <figure class="shadow"><a href="http://fantana.md/Fantana/F-nt-na-Cruce-K-3c-neagra-cu-capac-360"><img src="/images/carousel/11.jpg"></a></figure>--}}
                            </div>
                        </div>
                    </section>
                </div>
                @include('layouts.categories_bar', ['side' => 'right'])
            </div>
        @include('layouts.footer')
    </section>

@endsection
