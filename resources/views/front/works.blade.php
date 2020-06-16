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
    <hr style="margin-top: 50px; border: 1px solid grey;">
    <section class="cat_product_area section_gap">
        <div class="container-fluid">
            @if(!empty(Auth::user()) && (Auth::user()->role) == 'admin')
            <div class="row">
                {{ Form::model('', ['route' => 'admin.works', 'method' => 'POST', 'files' => true]) }}
                @include('utils.alerts')
                <div class="form-group"> {!! Form::label('photo_id', 'Выбрать фото:') !!}
                    <input type="file" name="photo_id[]" multiple>
                </div>
                <div class="box-footer">
                    {{ Form::submit('Загрузить', ['class' => 'btn btn-success pull-right']) }}
                </div>
                {{ Form::close() }}
            </div>
            @endif
            <div class="row" style="margin-top: 50px;">
                @foreach($works as $work)
                    <div class="col-md-4">
                        <a style="margin-left: 50px;" href="{{  route('admin.photos.destroy', $work->id )}}"><button class="btn btn-danger"><i class="fa fa-times"></i></button></a>
                        <div class="thumbnail">
                            <a href="{{ $work->file }}" class="image-popup">
                                <img class="img-responsive" src="{{ $work->file }}" style="max-width: 500px;"/>
                            </a>
                        </div>

                    </div>

                @endforeach
            </div>
        </div>
    </section>
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
    @include('layouts.footer')
@endsection
