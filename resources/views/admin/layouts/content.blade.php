<!DOCTYPE html>

<html lang="en">



<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Meta, title, CSS, favicons, etc. -->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Ritual.md Admin</title>

    <!-- Bootstrap -->

    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">

    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">

</head>



<body class="nav-md">

<div class="container body">

    <div class="main_container">

        @include('admin.layouts.navigation')

            <div class="right_col" role="main">

                @yield('content')

            </div>

    </div>

</div>

<!-- jQuery -->

<script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>

<script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script>

<script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>

<script src="{{ asset('build/js/custom.min.js') }}"></script>

</body>

</html>
