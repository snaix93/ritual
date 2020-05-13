<!DOCTYPE html>
<html lang="en">
@include('layouts.css_products')
<?php
$title = empty($title) ? 'Памятники мраморные, Бетонные, Колодцы' : $title;
$description = empty($description) ? 'Мы обладаем огромным опытом работы в данной отрасли и в нашем профессиональном подходе Вы можете легко убедиться, посетив нас.Мы изготавливаем памятники из чёрного гранита,,архитектурного бетона,мраморной крошки и песчаника.' : $description;
?>
<title>{{ $title }}</title>
<meta name="description" content="{{$description}}">
<meta name="keywords" content="flori, buchete, livrare, flowers, bucuresti, cutii, cutie, ieftin, taiate, cutii cu flori, trandafiri, lalele, cutii-cu-trandafiri, livrare-gratuita, flori-taiate, trandafiri in cutie">
<meta property="og:locale" content="ro">
<meta property="og:type" content="product"/>
<meta property="og:title" content="{{$title}}">
<meta property="og:description" content="{{$description}}">
<meta property="og:url" content="https://www.buchetto.ro/">
<meta property="og:site_name" content="Buchetto">
<meta property="og:image" content="https://www.buchetto.ro/favicon.png"/>
<meta itemprop="name" content="{{$title}}">
<meta itemprop="description" content="{{$description}}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description" content="{{$description}}">
<meta name="twitter:title" content={{$title}}/>
<meta name="twitter:site" content="@bouquetto1">
<meta name="twitter:creator" content="@bouquetto1">
@include('layouts.header')

<body>

<div id="part1">
	<div class="inside">
	</div>
</div>
<style>
	.paginat_li{
		float: left;
	}
	@media (max-width : 700px) {
		.hid_mob {
			display: none;
		}
	}
</style>

<!-- Content page -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
    <ul itemscope="" itemType="http://schema.org/BreadcrumbList" id="br_crumb_ul" style="font-size: 2em">
        <li class="br_crumb_li" itemProp="itemListElement" itemscope="" itemType="http://schema.org/ListItem" >
            <a data-breadcrumb="Acasa" title="Acasa" itemProp="item" href="/" class="s-text16" >
                <span class="em15" itemProp="name">Acasa</span>
                <meta itemProp="position" content="1"/>
                <i class="em15 fa fa-angle-right m-l-8 m-r-9 Breadcrumbs-separator" aria-hidden="true"></i>
            </a>
        </li>
        <li class="br_crumb_li" itemProp="itemListElement" itemscope="" itemType="http://schema.org/ListItem">
            <a itemProp="item" class="s-text16" href="{{ url()->current() }}">
                @if($not_empty = !empty($portfolios->first()))
                <span class="em15" itemProp="name" data-breadcrumb="{{ $nam = isset($tag) ? ucwords($tag->name) : ($portfolios->count() > 0 ? $portfolios->first()->category->display_name : '') }}">{{$nam}}</span>
                @endif
                <meta itemProp="position" content="2"/>
            </a>
        </li>
    </ul>
</div>
{{--<section class="bgwhite p-t-55 p-b-65">--}}
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-md-4 col-lg-3 p-b-50 hid_mob">
			<div class="leftbar p-r-20 p-r-0-sm">
				<h4 class="m-text14 p-b-32">
					Categorii
				</h4>

				<ul class="p-b-54">
					<li class="p-t-4">
						<a href="{{ url('buchete-de-flori') }}" class="s-text13">
							Buchete de Flori
						</a>
					</li>

					<li class="p-t-4">
						<a href="{{ url('flori-in-cutie') }}" class="s-text13 active1">
							Cutii cu flori
						</a>
					</li>
					<li class="p-t-4">
						<a href="{{ url('flori/flori-si-dulciuri') }}" class="s-text13">
							Flori și dulciuri
						</a>
					</li>
					<li class="p-t-4">
						<a href="{{ url('flori/trandafiri') }}" class="s-text13">
							Trandafiri
						</a>
					</li>

					<li class="p-t-4">
						<a href="{{ url('flori/flori-de-lux') }}" class="s-text13">
							Buchete si cutii de Lux
						</a>
					</li>
                    <li class="p-t-4">
                        <a href="{{ url('funerara') }}" class="s-text13">
                            Coroane funerare
                        </a>
                    </li>
					<li class="p-t-4">
						<a href="{{ url('trandafiri-criogenati') }}" class="s-text13">
							Trandafiri Criogenati
						</a>
					</li>
					<li class="p-t-4">
						<a href="{{ url('flori/aniversare') }}" class="s-text13">
							Aniversare
						</a>
					</li>
					<li class="p-t-4">
						<a href="{{ url('flori/flori-de-primavara') }}" class="s-text13">
							Flori de Primavara
						</a>
					</li>
					<li class="p-t-4">
						<a href="{{ url('flori/8_martie') }}" class="s-text13">
							8 Martie
						</a>
					</li>
				</ul>
				<div class="filter-price p-t-22 p-b-50 bo3">
					<div class="m-text15 p-b-17">
						Preț
					</div>

					<div class="wra-filter-bar">
						<div id="filter-bar"></div>
					</div>

					<div class="flex-sb-m flex-w p-t-16">
						<div class="w-size11">
							<!-- Button -->
							<button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4" id="setPrice" onclick="setPrice()">
								Filtrează
							</button>
						</div>

						<div class="s-text3 p-t-10 p-b-10">
							Diapazon:  <span id="value-lower">610</span> -  <span id="value-upper">980</span>
						</div>
					</div>
				</div>

				<div class="filter-color p-t-22 p-b-50 bo3">
					<div class="m-text15 p-b-12">
						După culori
					</div>

					<ul class="flex-w">
						<li class="m-r-10">
							<a href="{{ url('flori/rosii') }}">
								<input class="checkbox-color-filter" id="color-filter4" type="button" name="color-filter4">
								<label class="color-filter color-filter4" for="color-filter4"></label>
							</a>
						</li>
						<li class="m-r-10" style="background:black;">
							<a href="{{ url('flori/albe') }}">
								<input class="checkbox-color-filter" id="color-filter1" type="button" name="color-filter1">
								<label class="color-filter color-filter1" for="color-filter1"></label>
							</a>
						</li>

						<li class="m-r-10">
							<a href="{{ url('flori/roz') }}">
								<input class="checkbox-color-filter" id="color-filter2" type="button" name="color-filter2">
								<label class="color-filter color-filter2" for="color-filter2"></label>
							</a>
						</li>

						<li class="m-r-10">
							<a href="{{ url('flori/mov') }}">
								<input class="checkbox-color-filter" id="color-filter3" type="button" name="color-filter3">
								<label class="color-filter color-filter3" for="color-filter3"></label>
							</a>
						</li>
						<li class="m-r-10">
							<a href="{{ url('flori/bej') }}">
								<input class="checkbox-color-filter" id="color-filter5" type="button" name="color-filter5">
								<label class="color-filter color-filter5" for="color-filter5"></label>
							</a>
						</li>
					</ul>
				</div>

				<div class="search-product pos-relative bo4 of-hidden">
					<form method="Get" action="{{ url('all-products') }}">
						<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search" placeholder="Ex: trandafiri, rosii">

						<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4" type="submit">
							<i class="fs-12 fa fa-search" aria-hidden="true"></i>
						</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
			<h1 class="m-text26 p-t-15 p-b-16">
				{{ $title }}
			</h1>
			<p class="p-b-28">
				{{ $description }}
			</p>
		@if($not_empty)
			@if($portfolios->first()->category_id != 'funerara')
				<form action="/price" method="GET">
					{{ csrf_field() }}
					<input type="hidden" value="{{ $portfolios->first()->id }}" name="product">
					<select class="form-control sizefull bo2 of-hidden size10 m-b-15 col-md-6" name="order" id="exampleFormControlSelect1" onchange="this.form.submit()">
						<option value="ranking">Popularitate</option>
						<option <?php if(!empty($order) && $order == 'asc') echo 'selected' ?> value="asc">Pret Crescator</option>
						<option <?php if(!empty($order) && $order == 'desc') echo 'selected' ?> value="desc">Pret Descrescator</option>
						<option <?php if(!empty($order) && $order == 'date') echo 'selected' ?> value="date">Data Crearii</option>
					</select>
				</form>
			@endif
			<!-- Product -->
			<div class="row" itemscope itemtype=http://schema.org/ItemList>
				<link itemprop=itemListOrder href=http://schema.org/ItemListOrderAscending/>
				<span itemprop=numberOfItems hidden>{{$portfolios->count()}}</span>
				@foreach($portfolios as $key => $portfolio)

					<div class="col-sm-12 col-md-6 col-lg-4 p-b-50" itemprop=itemListElement itemscope itemtype=http://schema.org/ListItem>
						<span itemprop=position hidden>{{($key + 1)}}</span>
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2">
								<a  href="{{$url = url($portfolio->category->name . '/' . ($slug = $portfolio->slug). '/')}}" itemprop=url>
									@if(!empty($photo = $portfolio->photo))
										<img itemprop=image src="{{asset($photo = $portfolio->photo->file)}}" title="{{$slug}}" alt="{{$slug}}">
									@endif
								</a>
							</div>
						</div>
						<div class="block2-txt p-t-20">
							<a  href="{{$url}}" class="block2-name dis-block s-text3 p-b-5">
								{{$portfolio->name}}, {{ $portfolio->min }} Flori
							</a>
							@if(($discount = $portfolio->discount) > 0 )
								<span class="block2-oldprice m-text7 p-r-5">
											{{ $discount }} Ron
										</span>
								<span class="block2-newprice m-text8 p-r-5">
										 {{ $pr_min = round($portfolio->ppi * $portfolio->min) }} Ron
										</span>
							@else
								<span class="block2-price m-text6 p-r-5">
										 {{ $pr_min = round($portfolio->ppi * $portfolio->min) }} Ron
										</span>
							@endif
							<br>
							<p itemprop="description" style="font-size: 0.8em">
								{{ substr($portfolio->description , 0, 100) }}...
							</p>
						</div>
						{{--TODO: don't remove--}}
						{{--@if(!empty(auth()->user()) 	 && auth()->user()->role == 'admin')--}}
							{{--<p>{{ $portfolio->ppi }}</p>--}}
						{{--<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">--}}
						{{--<!-- Button -->--}}
						{{--<a href="{{  route('admin.portfolios.edit', ['portfolios' => $portfolio->slug, 'slug' => $portfolio->slug] )}}">--}}
						{{--<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">--}}
						{{--Modify--}}
						{{--</button>--}}
						{{--</a>--}}
						{{--</div>--}}
						{{--@endif--}}
					</div>
				@endforeach
			</div>
			@if ($portfolios->lastPage() > 1)
				<ul>
					@for ($i = 1; $i <= $portfolios->lastPage(); $i++)
						<li class="paginat_li"><a class="item-pagination flex-c-m trans-0-4 {{ $portfolios->currentPage() == $i ? ' active-pagination' : '' }}" href="{{ $portfolios->url($i) . Request()->parameter }}">{{ $i }}</a></li>
					@endfor
				</ul>

			@endif
		@endif
		</div>
	</div>
</div>
{{--<a href="/whatsapp-message" class="float" target="_blank">--}}
{{--<i class="fa fa-comment my-float"></i><p style="font-size: 0.5em"></p>--}}
{{--</a>--}}
<div class="chat-popup" id="myForm">
	<div class="form-container">
		<a href="/whatsapp-message" target="_blank" onclick="tag()">
			<img src="{{ asset('images/icons/whatsapp.png') }}" width="50" height="50">
			WhatsApp
		</a><br><br>
		<a href="sms:+40726688087?body=Buna!%20Ma%20intereseaza%20un%20produs,%20ma%20puteti%20ajuta?" onclick="tag()"  target="_blank" style="margin-right: 5px;">
			<img src="{{ asset('images/icons/sms.png') }}" width="50" height="50">
			Sms
		</a>
		<br><br>
		<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
	</div>
</div>
{{--</section>--}}
{{--<a href="tel: +40726688087" class="sticky-divi-button call" onclick="call()"> <i class="fa fa-phone my-float"></i> 072 66 88 087</a>--}}
@include('layouts.footer')
<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>
<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
				new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WK5ZPJ3');</script>
<!-- End Google Tag Manager -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WK5ZPJ3"
				  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>
<link rel="stylesheet" type="text/css" href="{{ asset('fache/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}" />
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('fache/vendor/jquery/jquery-3.2.1.min.js')}}" ></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('fache/vendor/animsition/js/animsition.min.js')}}" ></script>
<script type="text/javascript">
	function setPrice() {
		window.location.replace(window.location.origin + window.location.pathname + '?price_min=' + document.getElementById('value-lower').innerHTML + '&price_max=' + document.getElementById('value-upper').innerHTML);
	}
</script>
<link rel="stylesheet" type="text/css" href="{{ asset('fache/vendor/noui/nouislider.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ asset('fache/css/util.css')}}" />

<link rel="stylesheet" type="text/css" href="{{ asset('fache/vendor/css-hamburgers/hamburgers.min.css')}}" />
<script type="text/javascript" src="{{ asset('fache/vendor/noui/nouislider.min.js')}}"></script>
<script type="text/javascript">
	/*[ No ui ]
    ===========================================================*/
	var filterBar = document.getElementById('filter-bar');

	noUiSlider.create(filterBar, {
		start: [ 50, 900 ],
		connect: true,
		range: {
			'min': 50,
			'max': 900
		}
	});

	var skipValues = [
		document.getElementById('value-lower'),
		document.getElementById('value-upper')
	];

	filterBar.noUiSlider.on('update', function( values, handle ) {
		skipValues[handle].innerHTML = Math.round(values[handle]) ;
	});
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135381263-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-135381263-1');
</script>
<!--===============================================================================================-->
<script src="{{ asset('fache/js/main.js')}}" ></script>
@include('layouts.smartlook')
</body>
</html>
