@extends('layouts.app')

@section('content')

@include('layouts.header')
<?php
$title = empty($title) ? __('translations.catalog_produse') : $title;
$description = empty($description) ? __('translations.all_products_descr') : $description;
?>

<style>
    .border{
        border: 10px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
</style>

<section class="bread-crumb banner_area mobile_none"  style="margin-top: -60px;">
    <ul itemscope="" itemType="http://schema.org/BreadcrumbList" id="br_crumb_ul">
        <div class="banner_inner">
            <div class="container">
                <div class="banner_content text-center">
                    @if(!empty($category))
                        <h2>{{ $category->name}}</h2>
                        <div class="page_link">
                            <a href="/">@lang('translations.home')</a>
                            <a>{{ ucwords($category->name) }}</a>
                        </div>
                        @else
                        <h2>@lang('translations.all_products')</h2>
                        <div class="page_link">
                            <a href="/">@lang('translations.home')</a>
                            <a>@lang('translations.all_products')</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </ul>
</section>
{{--<!--================End Home Banner Area =================-->--}}
{{--<!--================Category Product Area =================-->--}}
<section class="cat_product_area section_gap">
    <div class="container-fluid">
        <div class="row">
            @include('layouts.categories_bar', ['side' => 'left'])
            <div class="col-lg-9">
                <div class="product_top_bar mobile_none">
                    <div class="left_dorp">
                        @if(!empty($category))
                            <div class="row">
                                <div class="col-md-5">
                                    <h3>@lang('translations.sorting'):</h3>
                                </div>
                                <div class="col-md-6">
                                    <form action="{{ route('front.index', ['category' => $category]) }}">
                                        <select class="sorting" onchange="this.form.submit()" name="sorting">
                                            <option value="ranking">@lang('translations.popularity')</option>
                                            <option {{ request()->sorting == 'price' ? 'selected' : '' }} value="price">@lang('translations.price')</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="right_page ml-auto">
                        <nav class="cat_page" aria-label="Page navigation example">
                            @if ($portfolios->lastPage() > 1)
                                <ul class="pagination">
                                    @for ($i = 1; $i <= $portfolios->lastPage(); $i++)
                                        <li class="page" ><a style="background-color: grey;" class="page-link {{ $portfolios->currentPage() == $i ? ' active-pagination' : '' }}" href="{{ $portfolios->url($i) . Request()->parameter }}">{{ $i }}</a></li>
                                    @endfor
                                </ul>

                            @endif
                        </nav>
                    </div>
                </div>
                <h1 class="m-text26 p-t-15 p-b-16">
                    {{ $title }}
                </h1>
                <p class="text-justify" style="font-size: 19px;">
                    {{ $description }}
                </p>
                <div class="latest_product_inner row">
                    @foreach($portfolios as $key => $portfolio)
                        <div class="col-lg-4 col-md-4 col-sm-6 {{ $key % 5 == 0 ? 'col-md-offset-1' : '' }}" itemprop=itemListElement itemscope itemtype=http://schema.org/ListItem>
                            <span itemprop=position hidden>{{($key + 1)}}</span>
                            <a  href="{{$url = url((empty($portfolio->category->name) ? '' : $portfolio->category->slug)  . '/' . ($slug = $portfolio->slug). '/')}}" itemprop=url>
                                <div class="f_p_item">
                                    <div class="f_p_img">
                                        @if(!empty($photo = $portfolio->photo))
                                            <img class="img-fluid" itemprop=image src="{{asset($photo = $portfolio->photo->file)}}" title="{{$slug}}" alt="{{$slug}}">
                                        @endif
                                    </div>
                                    <a href="{{$url}}">
                                        <h4>{{$portfolio->name}}</h4>
                                    </a>
                                    <h5 class="robotic" style="color: red;">{{ $portfolio->sizes->count() > 1 ? $portfolio->sizes->first()->price : $portfolio->price }} Lei</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        <div class="row">
            <nav class="cat_page mx-auto" aria-label="Page navigation example">
                @if ($portfolios->lastPage() > 1)
                    <ul class="pagination">
                        @for ($i = 1; $i <= $portfolios->lastPage(); $i++)
                            <li class="page"><a style="background-color: grey;" class="page-link {{ $portfolios->currentPage() == $i ? ' active-pagination' : '' }}" href="{{ $portfolios->url($i) . Request()->parameter }}">{{ $i }}</a></li>
                        @endfor
                    </ul>

                @endif
            </nav>
        </div>
        </div>
    </div>
</section>
<!--================End Category Product Area =================-->
    @include('layouts.footer')
@endsection
