@extends('layouts.app')

@section('content')

    @include('layouts.header')


    <!--================Order Details Area =================-->
    <section class="order_details p_120">
        <div class="container">
            <h3 class="title_confirmation">Multumim! Comanda a fost plasta cu success.</h3>
            @if(!empty($portfolio))
            <div class="row">
                    <div class="col-md-6">
                        @if(!empty($portfolio->photo))
                        <img src="{{ $portfolio->photo->file }}">
                            @endif
                    </div>
                    <div class="col-md-6">
                        <p>{{ $portfolio->name }}</p>
                        <h6>{{ $order->price }} Lei</h6>
                    </div>
                </div>
            @endif

    </section>

    <!--================End Order Details Area =================-->

    @include('layouts.footer')
@endsection
