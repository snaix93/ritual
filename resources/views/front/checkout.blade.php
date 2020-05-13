@extends('layouts.app')
@section('content')
    @include('layouts.header')
    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <div>
                    <form class="row contact_form" method="POST" action="{{ route('comenzi.store', [$portfolio->category->slug, $portfolio->slug]) }}">
                    <div class="col-lg-8">
                        <h3>@lang('translations.dupa_plasarea')</h3>
                        <div class="col-md-12">
                            <p>@lang('translations.order_det')</p>
                        </div>
                            {{ csrf_field() }}
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select"  name="date">
                                    @if(!empty($selectedData))
                                        <option class="col-md-12">{{ $selectedData }}</option>
                                    @else
                                        <option>@lang('translations.delivery_d')</option>
                                    @endif

                                    @foreach($dates as $key => $date)
                                        @if($key < 60)
                                            <option>{{ $date  }}</option>
                                        @else
                                            @break
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="first" name="r_name" placeholder="Nume Prenume">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="number" name="r_number" placeholder="Numar de telefon">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="r_address" placeholder="Oras, Regiune si Adresa">
                                @if(!empty($size))
                                 <input type="hidden" class="form-control"  name="size" value="{{ $size->id }}">
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Mai multe informatii (Dupa caz)"></textarea>
                            </div>
                    </div>
                    <div class="col-lg-4" style="margin-top: 50px;">
                        <div class="order_box">
                            <h2>@lang('translations.your_order')</h2>
                            <div class="col-md-12">
                                @if(!empty($portfolio->photo->file))
                                    <img src="{{ $portfolio->photo->file }}" style="max-width: 300px; max-height: 400px;">
                                @endif
                            </div>
                            <ul class="list">
                                <li>
                                    <a >{{ $portfolio->name }}
                                    </a>
                                </li>
                            </ul>
                            @if(!empty($size))
                            <ul class="list list_2">
                                <li>
                                    <a>@lang('translations.size')
                                        <span>{{ $size->size }}</span>
                                    </a>
                                </li>
                            </ul>
                            @endif
                            <ul class="list list_2">
                                <li>
                                    <a>@lang('translations.price')
                                        <span>{{ $total }}</span>
                                    </a>
                                </li>
                            </ul>
                            <button class="main_btn" type="submit">@lang('translations.place_order')</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->
    @include('layouts.footer')
@endsection
