@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
@section('content')

    <div style="background-image: url('{{ asset('assets/img/flowers/404.jpg') }}')">

        <html lang="en">

        <head>

            <meta charset="utf-8">

            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Page Not Found</title>

            <!-- Fonts -->

            <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">



            <!-- Styles -->

            <style>

                html, body {

                    background-color: #fff;

                    color: #636b6f;

                    font-family: 'Raleway', sans-serif;

                    font-weight: 100;

                    height: 100vh;

                    margin: 0;

                }



                .full-height {

                    height: 100vh;

                }



                .flex-center {

                    align-items: center;

                    display: flex;

                    justify-content: center;

                }



                .position-ref {

                    position: relative;

                }



                .content {

                    text-align: center;

                }



                .title {

                    font-size: 36px;

                    padding: 20px;

                }

            </style>

        </head>

        <body>

        <div class="flex-center position-ref full-height">

            <div class="content">

                <div class="title">Pagina care incercati sa o accesati nu exista.</div>

                <button class="btn btn-primary btn-round" name="price" onclick="location.href = '{{  route('/', 'livrare-flori-bucurest&price=5' ) }}'">Home</button>



            </div>

        </div>

        </body>

        </html>

    </div>

@endsection





