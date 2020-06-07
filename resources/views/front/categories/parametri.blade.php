@extends('layouts.app')

@section('content')

    @include('layouts.header')

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="/lawncare/css/animate.css">

        <link rel="stylesheet" href="/lawncare/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/lawncare/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="/lawncare/css/magnific-popup.css">

        <link rel="stylesheet" href="/lawncare/css/ionicons.min.css">

        <link rel="stylesheet" href="/lawncare/css/flaticon.css">
        <link rel="stylesheet" href="/lawncare/css/icomoon.css">
        <link rel="stylesheet" href="/lawncare/css/style.css">



    <style>
    .par {
        text-indent: 50px;
        text-align: justify;
        letter-spacing: 3px;
        font-size: 20px;
    }
        .ftco-animate{
            height: 1000px;
        }

        .image-popup{
            width: 300px; height: 400px
        }
        .img-responsive{
            margin-left: 150px;
            box-shadow: 5px 5px 7px #7f7c7c;
        }

</style>
    <body>
    <hr style="margin-top: 50px; border: 2px solid grey;">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-2 col-md-offset-0">
                <a href="/images/tehnologii/fantana_verde.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                    <img class="img-responsive" src="/images/tehnologii/small/fantana_verde.jpg" />
                </a>
            </div>
            <div class="col-md-2 col-md-offset-3">
                <a href="/images/tehnologii/fantana_taur.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                    <img class="img-responsive" src="/images/tehnologii/small/fantana_taur.jpg" />
                </a>
            </div>
            <div class="col-md-2">
                <a href="/images/tehnologii/fantana_rosie.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                    <img class="img-responsive" src="/images/tehnologii/small/fantana_rosie.jpg" />
                </a>
            </div>
            <div class="col-md-2">
                <a href="/images/tehnologii/fantana_cu_capac.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                    <img class="img-responsive" src="/images/tehnologii/small/fantana_cu_capac.jpg" />
                </a>
            </div>
            <div class="col-md-2 col-md-offset-1" >
                <a href="/images/tehnologii/fantana_neagra.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                    <img class="img-responsive" src="/images/tehnologii/small/fantana_neagra.jpg" />
                </a>
            </div>

        </div>
    </body>
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
    <!--================Contact Area =================-->
    @include('layouts.footer')
@endsection
