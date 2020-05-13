
    {{--<style>.contact_form{font-family:'Raleway';font-weight:300;color:#333; text-align: center;}@media(min-width:0) and (max-width:1050px){.input-btn{width:135px}}</style>--}}

        {{--<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />--}}
        {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />--}}

        {{--<!-- CSS Files -->--}}

        {{--<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">--}}
        {{--<link href="{{ asset('assets/css/now-ui-kit.css?v=1.2.0') }}" rel="stylesheet">--}}
        {{--<link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet">--}}
        {{--<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">--}}
        {{--<link href="{{ asset('css/style.css') }}" rel="stylesheet">--}}

    {{--<style>--}}
        {{--.tooltip-inner {--}}
            {{--color: black;--}}
        {{--}--}}
        {{--@media screen and (min-width:1px) and (max-width:800px) {--}}
           {{--.page-header {--}}
               {{--min-height: 60vh;--}}
           {{--}--}}
        {{--}--}}

    {{--</style>--}}
    {{--</head>--}}

    {{--<body class="ecommerce-page" >--}}
    {{--<!-- Navbar -->--}}
    {{--<nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-transparent" color-on-scroll="500">--}}
        {{--<div class="container">--}}
            {{--<div class="navbar-translate">--}}
                {{--<a class="navbar-brand" href="/" rel="tooltip" title="Designed by Invision. Coded by Alexandru Statnii" data-placement="bottom">--}}
                    {{--WebNinjas--}}
                {{--</a>--}}
                    {{--@include('utils.alerts')--}}
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">--}}
                    {{--<span class="navbar-toggler-bar bar1"></span>--}}
                    {{--<span class="navbar-toggler-bar bar2"></span>--}}
                    {{--<span class="navbar-toggler-bar bar3"></span>--}}
                {{--</button>--}}
            {{--</div>--}}

            {{--<div class="collapse navbar-collapse" data-nav-image="../assets/img/blurred-image-1.jpg" data-color="orange">--}}
                {{--<ul class="navbar-nav ml-auto">--}}

                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link btn btn-primary" href="#contact_form">--}}
                            {{--<p class="more_info">I want more info</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}

                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</nav>--}}
    {{--<!-- End Navbar -->--}}
    {{--<div class="wrapper">--}}
        {{--<div id="carouselExampleIndicators" class="carousel slide">--}}
            {{--<ol class="carousel-indicators">--}}
                {{--@foreach($portfolioPhotos as $photo)--}}
                {{--<li data-target="#carouselExampleIndicators" data-slide-to="{{ $photo->id }}" class=""></li>--}}
                {{--@endforeach--}}
                {{--<li data-target="#carouselExampleIndicators" data-slide-to="{{ $portfolio->id }}" class=""></li>--}}
            {{--</ol>--}}
            {{--<div class="carousel-inner" role="listbox">--}}
                {{--@foreach($portfolioPhotos as $photo)--}}
                    {{--<div class="carousel-item">--}}
                        {{--<div class="page-header header-filter">--}}
                            {{--<div class="page-header-image" style="background-image: url({{ asset('images/' . $photo->filename) }})"></div>--}}
                            {{--<div class="content-center text-center">--}}
                                {{--<div class="row">--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
                {{--<div class="carousel-item active">--}}
                    {{--<div class="page-header header-filter">--}}
                        {{--<div class="page-header-image" style="background-image: url({{ $portfolio->photo->file }})"></div>--}}
                        {{--<div class="content-center">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-8 text-left">--}}
                                    {{--<h1 class="title">{{ $portfolio->name }}</h1>--}}
                                    {{--<h4 class="description text-white">{{ $portfolio->description }}.</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
                {{--<i class="now-ui-icons arrows-1_minimal-left"></i>--}}
            {{--</a>--}}
            {{--<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
                {{--<i class="now-ui-icons arrows-1_minimal-right"></i>--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<div id="contact_us"></div>--}}
        {{--<div class="contact-content" id="contact_us" style="margin-top: 60px;">--}}
            {{--<div class="container">--}}
                {{--<div class="row" id="contact_form">--}}
                    {{--<div class="col-md-5 ml-auto mr-auto" style="color: #9A9A9A; min-width: 600px;">--}}
                        {{--<h2 class="title text-left">Contact Us</h2>--}}
                        {{--<p class="description">Send us a message with a short description and we will find the most relevant solution for our future project.<br><br>--}}
                        {{--</p>--}}
                        {{--<h5 class="contact_form"></h5>--}}
                        {{--{{ Form::model($order, ['route' => ['admin.order.store', $portfolio], 'method' => 'POST', 'class' => 'form']) }}--}}
                            {{--<label>Name</label>--}}
                            {{--<div class="input-group">--}}
                                 {{--<div class="input-group-prepend">--}}
                                    {{--<span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>--}}
                                {{--</div>--}}
                                {{--<input type="text" name="name" class="form-control" placeholder="Name..." aria-label="Your Name..." >--}}
                            {{--</div>--}}
                            {{--<label>Email address</label>--}}
                            {{--<div class="input-group">--}}
                                {{--<div class="input-group-prepend">--}}
                                    {{--<span class="input-group-text" ><i class="now-ui-icons ui-1_email-85"></i></span>--}}
                                {{--</div>--}}
                                {{--<input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email..." required>--}}
                            {{--</div>--}}
                            {{--<label>Best way to contact</label>--}}
                            {{--<div class="input-group">--}}
                                {{--<div class="input-group-prepend">--}}
                                    {{--<span class="input-group-text"><i class="now-ui-icons tech_mobile"></i></span>--}}
                                {{--</div>--}}
                                {{--<input type="text" name="contact" class="form-control" placeholder="Contact">--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label>Website Description</label>--}}
                                {{--<textarea name="description" class="form-control" id="message" placeholder="Description" rows="6" required></textarea>--}}
                            {{--</div>--}}
                            {{--<div class="submit text-center">--}}
                                {{--<input type="submit" class="btn btn-primary btn-raised btn-round" value="Contact Us" />--}}
                            {{--</div>--}}
                        {{--<input type="hidden" name="portfolio_id" class="form-control" value="{{ $portfolio->id }}" >--}}
                        {{--{{ Form::close() }}--}}
                    {{--</div>--}}
                    {{--<div class="col-md-5 ml-auto mr-auto">--}}
                        {{--<div class="submit text-center" style="margin-left: -10px;">--}}
                            {{--<input onclick="window.location='{{ $portfolio->link }}'" type="button" class="btn btn-primary btn-raised btn-round" value="Open Template">--}}
                        {{--</div>--}}
                        {{--<div class="info info-horizontal mt-5">--}}
                            {{--<div class="icon icon-primary">--}}
                                {{--<i class="now-ui-icons location_pin"></i>--}}
                            {{--</div>--}}
                            {{--<div class="description">--}}
                                {{--<h4 class="info-title">Find us at the office</h4>--}}
                                {{--<p> Bulevardul Vasile Milea 4,<br>--}}
                                    {{--061344 Bucharest,<br>--}}
                                    {{--Romania--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="info info-horizontal">--}}
                            {{--<div class="icon icon-primary">--}}
                                {{--<i class="now-ui-icons tech_mobile"></i>--}}
                            {{--</div>--}}
                            {{--<div class="description">--}}
                                {{--<h4 class="info-title">Contact Us</h4>--}}
                                {{--<p> Alexandru Statnii<br>--}}
                                    {{--statniialex@gmail.com<br>--}}
                                    {{--<a href="https://telegram.me/statalex"> Telegram</a><br>--}}
                                    {{--<a href="https://www.facebook.com/webninjas77/"> Facebook</a>--}}
                                    {{--<br><br>--}}
                                    {{--We are available 24/7, <br> submit a request any time. <br> Your request will be reviewed asap.--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="text-center col-md-8 ml-auto mr-auto" style="margin-top: 80px;">--}}
            {{--<h3>Thank you for supporting us!</h3>--}}
        {{--</div>--}}
        {{--<div class="text-center col-md-8 ml-auto mr-auto">--}}
            {{--<a href="https://twitter.com/WebNinjas77" class="btn btn-icon btn-lg btn-round btn-twitter twitter-sharrre sharrre" rel="tooltip" title="" data-original-title="Tweet!">--}}
                {{--<i class="fa fa-twitter"></i>--}}
            {{--</a>--}}
            {{--<a href="https://www.facebook.com/webninjas77/" class="btn btn-lg btn-round btn-icon btn-facebook facebook-sharrre sharrre" rel="tooltip" title="" data-original-title="Up!">--}}
                {{--<i class="fa fa-facebook-square"></i>--}}
            {{--</a>--}}
            {{--<a href="https://telegram.me/statalex" class="btn btn-lg btn-round btn-icon btn-linkedin linkedin-sharrre sharrre" rel="tooltip" title="" data-original-title="Mess!">--}}
                {{--<i class="fa fa-telegram"></i>--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<div class="subscribe-line subscribe-line-image" style="background-image: url({{ asset('img/backgrounds/2.JPG') }}); margin-top: 50px;">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-6 ml-auto mr-auto">--}}
                        {{--<div class="text-center">--}}
                            {{--<h4 class="title">Subscribe to our Newsletter</h4>--}}
                            {{--<p class="description">--}}
                                {{--Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.--}}
                            {{--</p>--}}
                        {{--</div>--}}

                        {{--<div class="card card-raised card-form-horizontal">--}}
                            {{--<div class="card-body">--}}
                                {{--<form method="" action="#">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-sm-8">--}}
                                            {{--<div class="input-group">--}}
                                                {{--<div class="input-group-prepend">--}}
                                                    {{--<span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>--}}
                                                {{--</div>--}}
                                                {{--<input type="text" class="form-control" placeholder="Email Here...">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-sm-4">--}}
                                            {{--<button type="button" class="btn btn-primary btn-block">Subscribe</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--</body>--}}

{{--<!--   Core JS Files   -->--}}
{{--<script src="{{ asset("assets/js/core/jquery.3.2.1.min.js") }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset("assets/js/core/popper.min.js") }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset("assets/js/core/bootstrap.min.js") }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset("assets/js/plugins/moment.min.js") }}" type="text/javascript"></script>--}}

{{--<script src="{{ asset("assets/js/plugins/bootstrap-switch.js") }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset("assets/js/plugins/bootstrap-tagsinput.js") }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset("assets/js/plugins/bootstrap-selectpicker.js") }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset("assets/js/plugins/jasny-bootstrap.min.js") }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset("assets/js/plugins/nouislider.min.js") }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset("assets/js/plugins/bootstrap-datetimepicker.min.js") }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset("assets/js/plugins/presentation-page/jquery.sharrre.js") }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset("assets/js/now-ui-kit.js?v=1.2.0") }}" type="text/javascript"></script>--}}

{{--<script>--}}
        {{--// Handler for .ready() called.--}}
        {{--$(".more_info").click(function(){--}}
            {{--$('html, body').animate({--}}
                {{--scrollTop: $('#contact_us').offset().top--}}
            {{--}, 'slow');--}}
        {{--});--}}
{{--</script>--}}
{{--<script type="text/javascript">--}}
    {{--$(document).ready(function(){--}}

        {{--var slider2 = document.getElementById('sliderRefine');--}}

        {{--noUiSlider.create(slider2, {--}}
            {{--start: [42, 880],--}}
            {{--connect: true,--}}
            {{--range: {--}}
                {{--'min': [30],--}}
                {{--'max': [900]--}}
            {{--}--}}
        {{--});--}}

        {{--var limitFieldMin = document.getElementById('price-left');--}}
        {{--var limitFieldMax = document.getElementById('price-right');--}}

        {{--slider2.noUiSlider.on('update', function( values, handle ){--}}
            {{--if (handle){--}}
                {{--limitFieldMax.innerHTML= $('#price-right').data('currency') + Math.round(values[handle]);--}}
            {{--} else {--}}
                {{--limitFieldMin.innerHTML= $('#price-left').data('currency') + Math.round(values[handle]);--}}
            {{--}--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}