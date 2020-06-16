@extends('layouts.app')

@section('content')
    @include('layouts.header')
<style>
    .par {
        text-indent: 50px;
        text-align: justify;
        letter-spacing: 3px;
        font-size: 20px;
    }
</style>
    <!--================Contact Area =================-->
    <section class="contact_area p_120">
        <hr style="margin-top: -40px; border: 1px solid grey;">
{{--            <div class="container">--}}
            <div class="d-flex justify-content-center">
                <div class="col-md-2"></div>
                    <div class="col-lg-2 d-flex justify-content-center">
                        <img src="/images/tehnologii/fantana.png" width="300px" height="200px">
                    </div>
                    <div class="col-lg-2 d-flex justify-content-center">
                        <img src="/images/tehnologii/cemfort.png"  width="300px" height="200px">
                    </div>
                <div class="col-md-2"></div>
            </div>
            <div class="d-flex justify-content-center" style="margin-top: 50px;">
                <div class="col-lg-4 d-flex justify-content-center col-md-offset-6" >
                    <div>
                        <p class="par">@lang('translations.tehnologii1')</p>

                        <p class="par">@lang('translations.tehnologii2')</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center" style="margin-top: 50px;">
                <div class="col-md-2"></div>
                <div class="col-lg-2 d-flex justify-content-center">
                    <img src="/images/tehnologii/cetatea.png" width="300px" height="300px" style="margin-top: -30px;">
                </div>
                <div class="col-lg-2 d-flex justify-content-center" >
                    <img src="/images/tehnologii/armatura.png">
                </div>
                <div class="col-md-2"></div>
            </div>
    </section>
    <!--================Contact Area =================-->
    @include('layouts.footer')
@endsection
