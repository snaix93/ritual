@extends('layouts.app')

@section('content')

@include('layouts.header')
<?php
$title = empty($title) ? 'Памятники мраморные, Бетонные, Колодцы' : $title;
$description = empty($description) ? 'Мы обладаем огромным опытом работы в данной отрасли и в нашем профессиональном подходе Вы можете легко убедиться, посетив нас.Мы изготавливаем памятники из чёрного гранита,,архитектурного бетона,мраморной крошки и песчаника.' : $description;
?>
<section class="bread-crumb banner_area" style="margin-top: -80px;">
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
            <div class="col-lg-3">
                <div class="left_sidebar_area">
                    <aside class="left_widgets cat_widgets">
                        <div class="l_w_title">
                            <h3>@lang('translations.categories')</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <?php $name = session('locale') == 'ru' ? 'name_ru' : 'name' ?>
                                @foreach($categories as $categ)
                                    @if($categ->subcategories()->count() > 0)
                                        <li>
                                            <a href="{{ url('/' . $categ->slug  ) }}">{{ $categ->$name }}</a>
                                            <ul class="list">
                                                <?php $sub = $categ->subCategories()->pluck($name, 'name'); ?>
                                                @foreach($sub as $key => $subCat)
                                                    <li>
                                                        <a href="{{ url('/' . $key ) }}">{{ $subCat }}</a>
                                                    </li>
                                                @endforeach
                                                <li>
                                                    <a href="{{ url('/' . $categ->slug) }}">{{ $name == 'name_ru' ? 'Все' : 'Toate ' }}</a>
                                                </li>
                                            </ul>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ url('/' . $categ->slug  ) }}">{{ $categ->$name }}</a>
                                        </li>
                                    @endif
                                @endforeach

                            </ul>
                        </div>
                    </aside>
                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>@lang('translations.contains')</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                @foreach($tags_categories as $tag)
                                    <li>
                                        <a href="/category/tag/{{ $tag->name }}">{{ $tag->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
                <br>
                <form action="{{ url('all-products') }}" method="GET" class="subscription relative">
                    <div class="input-group mb-12">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">@lang('translations.cauta')</button>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-lg-9">
                <div class="product_top_bar">
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
                                        <li class="page"><a class="page-link {{ $portfolios->currentPage() == $i ? ' active-pagination' : '' }}" href="{{ $portfolios->url($i) . Request()->parameter }}">{{ $i }}</a></li>
                                    @endfor
                                </ul>

                            @endif
                        </nav>
                    </div>
                </div>
                <h1 class="m-text26 p-t-15 p-b-16">
                    {{ $title }}
                </h1>
                <p class="text-justify">
                    {{ $description }}
                </p>
                <div class="latest_product_inner row">
                    @foreach($portfolios as $key => $portfolio)
                        <div class="col-lg-2 col-md-2 col-sm-6 {{ $key % 5 == 0 ? 'col-md-offset-1' : '' }}" itemprop=itemListElement itemscope itemtype=http://schema.org/ListItem>
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
                                    <h5>{{ $portfolio->sizes->count() > 1 ? $portfolio->sizes->first()->price : $portfolio->price }}</h5>
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
                            <li class="page"><a class="page-link {{ $portfolios->currentPage() == $i ? ' active-pagination' : '' }}" href="{{ $portfolios->url($i) . Request()->parameter }}">{{ $i }}</a></li>
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
