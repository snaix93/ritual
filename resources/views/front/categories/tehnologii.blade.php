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
{{--            <div class="container">--}}
            <div class="row">
                <div class="col-lg-3">
                    <img src="/images/tehnologii/fantana.png" width="300px" height="200px">
                </div>
                <div class="col-lg-6">
                </div>
                <div class="col-lg-3">
                    <img src="/images/tehnologii/cemfort.png"  width="300px" height="200px">
                </div>
                <div class="col-lg-3">
                    <img src="/images/tehnologii/cetatea.png" width="300px" height="300px">
                </div>
                <div class="col-lg-6" >
                    <div>
                        <p class="par">@lang('translations.tehnologii1')</p>

                        <p class="par">@lang('translations.tehnologii2')</p>
                    </div>
                </div>
                <div class="col-lg-3" >
                    <img src="/images/tehnologii/armatura.png">
                </div>
            </div>
{{--           </div>--}}
    </section>
    <!--================Contact Area =================-->
    @include('layouts.footer')
@endsection