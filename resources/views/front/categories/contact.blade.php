@extends('layouts.app')

@section('content')

    @include('layouts.header')

    <!--================Contact Area =================-->
    <section class="contact_area p_120">
        <hr style="border: 2px solid grey;">
        <div class="container">
            <div id="mapBox" class="mapBox">
                <img src="">
                <iframe src="https://www.google.com/maps/d/embed?mid=1o6Wmkv9jTbyRR6VGi1TJtZ7tp-pEeCKX&hl=ro" width="640" height="480"></iframe>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>г. Сорока</h6>
                            <p>Str. Cosăuților 10</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6>
                                <a>Тел.: (0230) 9-29-42</a>
                                <a> Моб.: 069007959</a>
                                <a> Моб.: 069693473</a>
                            </h6>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6>
                                <a>vanzari@fantana.md</a>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>г. Бельцы</h6>
                            <p>ул. Гагарина 110</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6>
                                <a> Моб.: 060170736</a>
                            </h6>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6>
                                <a>funerare@rambler.ru</a>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>г. Унгены</h6>
                            <p>ул. Романэ 39</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6>
                                <a> Моб.: 060925111</a>
                                <a> Моб.: 069007959</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="margin-top: 20px; border: 2px solid grey;">
            <div class="row" style="margin-top: 70px;">
                <div class="col-lg-4">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>г. Дрокия</h6>
                            <p>ул. Н. Григореску 20</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6>
                                <a> Моб.: 068844119</a>
                                <a> Моб.: 079056765</a>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>г. Единец</h6>
                            <p>ул. 31 Августа 9/1</p>
                            <p>ул. Гагарин 47</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6>
                                <a> Моб.: 069215451</a>
                                <a> Моб.: 061111014</a>
                                <a> Моб.: 061111928</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->
    @include('layouts.footer')
@endsection
