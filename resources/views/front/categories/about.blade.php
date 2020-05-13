<!DOCTYPE html>
<html lang="en">
@include('layouts.css')
<?php   $title  = 'Flori in cutie si Buchete superbe din flori naturale proaspete';
$description = 'Buchete de trandafiri, bujori, crizanteme, mini-trandafiri, eustoma, matiola si multe altele! Buchetele din flori sunt o modalitate ideala de a surprinde si impresiona si deaceaea am pregatit o colectetie indrazneata si totodata plina de expansiune care va satisface cele mai specifice gusturi';
?>
<title>{{ $title }}</title>
<meta name="description" content="{{$description}}">
<meta name="keywords" content="flori, buchete, livrare, flowers, bucuresti, cutii, cutie, ieftin, taiate, cutii cu flori, trandafiri, lalele, cutii-cu-trandafiri, livrare-gratuita, flori-taiate, trandafiri in cutie">
<meta property="og:locale" content="ro">
<meta property="og:type" content="product"/>
<meta property="og:title" content="{{$title}}">
<meta property="og:description" content="{{$description}}">
<meta property="og:url" content="https://www.buchetto.ro/">
<meta property="og:site_name" content="Buchetto">
<meta property="og:image" content="https://www.buchetto.ro/favicon.png"/>
<meta itemprop="name" content="{{$title}}">
<meta itemprop="description" content="{{$description}}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="{{$description}}">
<meta name="twitter:title" content={{$title}}/>
<meta name="twitter:site" content="@bouquetto1">
<meta name="twitter:creator" content="@bouquetto1">
@include('layouts.header')
<body>

<!-- content page -->
<div id="part1">
    <div class="inside">
    </div>
</div>

<style>
    .paginat_li{
        float: left;
    }
</style>
<section class="bgwhite p-t-66 p-b-38">
    <div class="container">
        <div class="row">
            <div class="col-md-4 p-b-30">
                <div class="hov-img-zoom">
                    <img src="https://www.buchetto.ro/images/1567703565IMG_2051-min.jpg" alt="IMG-ABOUT">
                </div>
            </div>

            <div class="col-md-8 p-b-30">
                <h3 class="m-text26 p-t-15 p-b-16">
                    Buchetto - Flori in cutie si Buchete superbe din flori naturale proaspete
                </h3>

                <p class="p-b-28">
                    Suntem o florărie situată în capitala României care livrează flori de calitate înaltă la prețuri accesibile. <br> Am pregătit o coleție unică de buchete și compoziții florale strâduindune să păstrăm frumusețea și finețea florilor dată de natură, totodată selectând cele mai proaspete flori pentru a crea compoziții nemaipomenite și specifice pentru fiecare client în parte.
                </p>

                <div class="bo13 p-l-29 m-l-9 p-b-10">
                    <p class="p-b-11">
                        Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
                    </p>

                    <span class="s-text7">
							- Steve Job’s
						</span>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')


<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('fache/vendor/jquery/jquery-3.2.1.min.js')}}" ></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('fache/vendor/animsition/js/animsition.min.js')}}" ></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('fache/vendor/bootstrap/js/popper.js')}}" ></script>
<script type="text/javascript" src="{{ asset('fache/vendor/bootstrap/js/bootstrap.min.js')}}" ></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('fache/vendor/select2/select2.min.js')}}" ></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect2')
    });
</script>

<script type="text/javascript" src="{{ asset('fache/vendor/daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('fache/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('fache/vendor/slick/slick.min.js')}}" ></script>
<script type="text/javascript" src="{{ asset('fache/js/slick-custom.js')}}" ></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('fache/vendor/sweetalert/sweetalert.min.js')}}" ></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('fache/vendor/lightbox2/js/lightbox.min.js')}}" ></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('fache/vendor/noui/nouislider.min.js')}}"></script>
<script src="{{ asset('fache/js/main.js')}}" ></script>

</body>
</html>
