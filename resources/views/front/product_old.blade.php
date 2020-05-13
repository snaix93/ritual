<!DOCTYPE html>
<html lang="en">
<body>
@include('layouts.css')
<?php   $title  = $portfolio->name  . ' ' . $pr_min = round($portfolio->ppi * $portfolio->min) . 'Ron - Buchetto';
$description = strlen($description = $portfolio->description) > 155 ? substr($description , 0, 155) : $description . '...';
$category = $portfolio->category_id;
?>
<title>{{ $title }}</title>
<meta name="description" content="{{$description}}">
<meta name="keywords" content="{{ $portfolio->tags()->pluck('name') }}">
<meta property="og:locale" content="ro">
<meta property="og:type" content="product"/>
<meta name="robots" content="index,follow">
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
{{--Modal shit--}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel='stylesheet' id='compiled.css-css'  href='https://www.buchetto.ro/css/options.css' type='text/css' media='all' />

<link rel="stylesheet" type="text/css" href="{{ asset('css/product.css')}}" />
<style>
	#discount{
		font-size: 1.7em;
		color: red;
	}
</style>
@include('layouts.header')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="{{ route('send-email') }}" method="POST">
			<div class="modal-body">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="message-text" class="col-form-label">Email:</label>
					<input class="form-control" type="email" name="email" id="message-text" required>
				</div>
				<input type="hidden" value="{{ $portfolio->id }}" name="product">
				<div class="checkbox">
					<label style="font-size: 1em">
						<input type="checkbox" name="newsletter" value="livrare_platita" class="delivery_type" onclick="delivery('livrare_platita')" id="livrare_platita">
						Abonare pentru promoții și coupoane?
					</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Închide</button>
				<button type="submit" class="btn btn-primary">Salvează</button>
			</div>
		</form>
		</div>
	</div>
</div>
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<ul itemscope="" itemType="http://schema.org/BreadcrumbList" id="br_crumb_ul">
		<li class="br_crumb_li" itemProp="itemListElement" itemscope="" itemType="http://schema.org/ListItem" >
			<a data-breadcrumb="Acasa" title="Acasa" itemProp="item" href="/" class="s-text16" >
				<span class="em15" itemProp="name">Acasa</span>
				<meta itemProp="position" content="1"/>
				<i class="em15 fa fa-angle-right m-l-8 m-r-9 Breadcrumbs-separator" aria-hidden="true"></i>
			</a>
		</li>
		<li class="br_crumb_li" itemProp="itemListElement" itemscope="" itemType="http://schema.org/ListItem">
			<a class="s-text16" data-breadcrumb="{{ ucwords($category) }}" title="{{ ucwords($category) }}" itemProp="item" href="{{ url(strtolower($category)) }}">
				<span itemProp="name" class="em15">{{ ucwords($category) }}</span>
				<meta itemProp="position" content="2"/>
				<i class="em15 fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
			</a>
		</li>
		<li class="br_crumb_li" itemProp="itemListElement" itemscope="" itemType="http://schema.org/ListItem">
			<a itemProp="item" class="s-text16" href="{{ url(strtolower($category) . '/' . $portfolio->slug) }}">
				<span class="em15" data-breadcrumb="{{ ucwords($portfolio->slug) }}" itemProp="name">{{ ucwords($portfolio->slug) }}</span>
				<meta itemProp="position" content="3"/>
			</a>
		</li>
	</ul>
</div>
<!-- Product Detail -->

<div class="container bgwhite">
	@if(!empty(session('message')))
		<div class="alert alert-success" role="alert">
			{{ session('message') }}
		</div>
	@endif
	<div class="flex-w flex-sb" itemscope itemtype="http://schema.org/IndividualProduct" itemid="#product" >
		<!-- Modal -->
		<div class="w-size13 p-t-30 respon5">
			<div class="wrap-slick3 flex-sb flex-w">
				<div class="{{ $portfolio->photos->count() > 1 ? 'wrap-slick3-dots' : ''}}"></div>
				<div class="slick3">
					@foreach($portfolio->photos as $key => $photo)
						@if(!empty($photo->file))
							<div class="item-slick3" data-thumb="{{ $photo->file }}">
								<div class="wrap-pic-w">
									<a href="{{ $photo->file }}"><img itemprop="image" src="{{ $photo->file }}" alt="{{ $portfolio->tags()->pluck('name') }}"></a>
								</div>
							</div>
						@endif
					@endforeach
				</div>
				<div class="row">
						<div  class="display_inline">
							<img src="{{ asset('images/icons/naturale.jpg') }}" width="40" height="40"/>
							@if($portfolio->category_id == 'criogen') Produs creat din flori criogenate @else Produs creat din flori naturale @endif
						</div>
						<div  class="display_inline">
							<img src="{{ asset('images/cs.png') }}" width="40" height="40"/>
							Livrare cu verificare
						</div>
						<div  class="display_inline">
							<img src="{{ asset('images/icons/delivery.png') }}" width="40" height="40"/>
							Livrare gratuită pentru comenzi peste 200 Ron
						</div>
				</div>
			</div>
		</div>
		<div class="w-size14 p-t-30 respon5">
			<h1 class="m-text16" itemprop="name">
				{{ $portfolio->name }}
			</h1>
			<p>Idul Produsului <strong>{{ $portfolio->id }}</strong></p>
			{{--<p class="s-text8 p-t-10">--}}
				{{--{{ $portfolio->keywords }}--}}
			{{--</p>--}}
			@if($category == 'funerara' && !$portfolio->lacrima)
				<p>{{ $min }} - {{ $med = round( $min * 1.1) }} Flori = 55 CM <br></p>
				<p>{{ $med }} - {{ $max = round($min * 1.6) }} Flori = 65 CM <br></p>
				<p>{{ $max }} - {{ round($min * 2.05) }} Flori = 70 CM <br></p>
			@endif
			<span class="m-text17" id="price">
						500
					</span>
			Ron <span id="discount" style="">  Reducere <span>5%</span></span> <br>
			<div class="m-text15 p-b-17">
				Dimensiunea selectata:  <span id="value-lower">610</span> Flori
			</div>
			{{--@if(!empty(auth()->user()) && auth()->user()->role == 'admin')--}}
				{{--Cost:--}}
				{{--<span class="m-text17"  id="net_price">--}}
				{{--5--}}
				{{--</span>--}}
				{{--Ron <br>--}}
				{{--Profit:--}}
				{{--<span class="m-text17"  id="profit">--}}
				{{--5--}}
				{{--</span>--}}
				{{--Ron <br>--}}
				{{--{{ $net_flower_price }}--}}

				{{--<h3>--}}
					{{--PPI:{{ $portfolio->ppi }} Ron--}}
				{{--</h3>--}}
			{{--@endif--}}
			<form method="POST" action="{{ route('checkout') }}">
				{{ csrf_field() }}
				<div class="filter-price p-t-22 p-b-50 bo3">
					<div class="m-text15 p-b-17">
						Selectati Dimensiunea:
					</div>
					<div class="row">
						@for($start = $min, $img = 1; $start < ($max = $min * 2.05); $start)
						<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10 col-md-6">
							<!-- Button -->
							<button type="button" onclick="selectType({{ $start }})" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 button_color">
								{{ $start }} Flori
							</button>
						</div>
							<div style="display:none">{{ $start  = $start + $multiply}} {{ $img = $img + 1 }}</div>
						@endfor
					</div>

					<span itemprop="brand" type="hidden">Buchetto</span>
					<input type="hidden" name="flow_amount" value="" id="flow_amount">
					<input  itemprop="sku" type="hidden" name="product_id" value="{{ $portfolio->id }}">
					<div class="wra-filter-bar">
						<div id="filter-bar"></div>
					</div>
					<hr>
					<p>
						Compoziția din poza este compusa din <span style="color:red">{{ $amount }} Flori </span><br>
					</p>
					<hr>
					<div class="m-text15 p-b-17">
						Selectati Data de livrare:
					</div>
					<select class=" sizefull bo4 of-hidden size15 m-b-20 col-md-8" name="date" id="exampleFormControlSelect1" style="font-size: 25px;">
						@foreach($dates as $key => $date)
							@if($key < 60)
								<option>{{ $date  }}</option>
							@else
								@break
							@endif
						@endforeach
					</select>
					<div class="w-size16 flex-m flex-wh">
						<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
							<!-- Button -->
							<a href="tel:0726688087">
								<button type="button" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" id="number" onclick="convert()">
									<i class="fa fa-phone"></i>
									Suna Oricand <br>&nbsp; 072 66 88 087
								</button>
							</a>
						</div>
						<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
							<!-- Button -->
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 plaseaza_comanda" id="plaseaza">
								Plaseaza Comanda
							</button>
						</div>
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
						{{--<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">--}}
							{{--<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2" onclick="down()">--}}
								{{--<i class="fs-12 fa fa-minus" aria-hidden="true"></i>--}}
							{{--</button>--}}
							{{--<input class="size8 m-text18 t-center num-product" type="number" id="quant" name="quant" value="1">--}}

							{{--<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2" onclick="up()">--}}
								{{--<i class="fs-12 fa fa-plus" aria-hidden="true"></i>--}}
							{{--</button>--}}
						{{--</div>--}}
					</div>
				</div>
			<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
				<!-- Button -->
				<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" data-toggle="modal" type="button" data-target="#exampleModal" id="save">
					Salveaza pe email
				</button>
			</div>
			@if(!empty(auth()->user()) && auth()->user()->role == 'admin')
				<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<a href="{{  route('admin.portfolios.edit', ['portfolios' => $portfolio->slug, 'slug' => $portfolio->slug] )}}">
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" type="button">
							Modify
						</button>
					</a>
				</div>
			@endif

			<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
				<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
					Descriere
					<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
					<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
				</h5>

				<div class="dropdown-content dis-none p-t-15 p-b-23">
					<p class="s-text8" itemprop="description">
						{{ $portfolio->description }}
					</p>
					<p>
						<br><br>
						{{ $portfolio->keywords }}
					</p>
				</div>
			</div>
			@if($portfolio->category_id == 'funerara')
				<h2>
					<a href="https://www.buchetto.ro/blog/mesaje-funerare">
						<strong> Mesaje funerare - Te ajutam noi cu textul funerar. Click... </strong>
					</a>
				</h2>
				@endif
			</form>
		</div>
	</div>
</div>
{{--<section class="slide1">--}}
	{{--<div class="wrap-slick1">--}}
		{{--<div class="slick1">--}}
			{{--<div class="item-slick1 item1-slick1" style="background-image: url(https://www.buchetto.ro/images/1581527893valenites.JPG);">--}}
				{{--<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">--}}
						{{--<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">--}}
							{{--Valentine's Day--}}
						{{--</span>--}}

					{{--<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">--}}
						{{--Colectie Nouă--}}
					{{--</h2>--}}

					{{--<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">--}}
						{{--<!-- Button -->--}}
						{{--<a href="/flori/valentine-s-day" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">--}}
							{{--Acceseaza--}}
						{{--</a>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}
{{--</section>--}}
<!-- Relate Product -->
<section class="relateproduct bgwhite p-t-45 p-b-138">
	<div class="container">
		<div class="sec-title p-b-60">
			<h3 class="m-text5 t-center">
				Produse similare
			</h3>
		</div>
		<div class="row">
			@foreach($similarProducts as $product)
				<div class="col-md-4">
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative {{$product->discount > 0 ? 'block2-labelsale': '' }}">
							<a href="{{ url((isset($product->category->name) ? $prCatName = $product->category->name : '') . '/' . $product->slug) }}">
								@if(!empty($product->photo->file))
									<img src="{{ $product->photo->file  }}" class="similarProductImg"  alt="{{ $product->tags()->pluck('name') }}">
								@endif
							</a>
						</div>
						<div class="block2-txt p-t-20">
							<a href="{{ url((isset($prCatName) ? $prCatName : '') . '/' . $product->slug) }}" class="block2-name dis-block s-text3 p-b-5">
								<strong>{{ $product->name }}, {{ $product->min  }} Flori</strong>
							</a>
							@if(($discount = $product->discount) > 0 )
								<span class="block2-oldprice m-text7 p-r-5">
											{{ $discount }} Ron
										</span>
								<span class="block2-newprice m-text8 p-r-5">
										De la {{ $pr_min = round($product->ppi * $product->min) }} Ron
										</span>
							@else
								<span class="block2-price m-text6 p-r-5">
										De la {{ $pr_min = round($product->ppi * $product->min) }} Ron
										</span>
							@endif
							<p class="card-description description" style="color:black">
								{{ substr($product->description , 0, 100) }}...
							</p>
							<br>
						</div>
					</div>
				</div>
			@endforeach
		</div>
			<ul style="white-space:nowrap;">
					<li class="paginat_li" style="white-space:nowrap; float: left; color: white">	<a class="item-pagination flex-c-m trans-0-4 active-pagination">1</a></li>
					<li class="paginat_li" style="white-space:nowrap; float: left;"><a class="item-pagination flex-c-m trans-0-4" href="{{ url(strtolower($category)) }}">2</a></li>
			</ul>
	</div>
</section>
<a href="tel: +40726688087" class="sticky-divi-button call" style="font-size: 12px;" onclick="convert()"> <i class="fa fa-phone my-float"></i> Suna Oricand <br>072 66 88 087</a>
<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>
@include('layouts.footer')
<div class="chat-popup" id="myForm">
	<div class="form-container">
		<a href="/whatsapp-message?product_id={{ $portfolio->id }}" onclick="tag()" target="_blank">
			<img src="{{ asset('images/icons/whatsapp.png') }}" width="50" height="50">
			WhatsApp2
		</a><br><br>
		<a href="sms:+40726688087?body=Buna! Ma intereseaza produsul cu idul {{ $portfolio->id  }}, ma puteti ajuta?" onclick="tag()"  target="_blank" style="margin-right: 5px;">
			<img src="{{ asset('images/icons/sms.png') }}" width="50" height="50">
			Sms
		</a>
		<br><br>
		<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@include('layouts.js')

<script type="text/javascript">
	/*[ No ui ]
    ===========================================================*/
	var filterBar = document.getElementById('filter-bar');
	var amount = '{!! json_encode($amount) !!}';
	var price = '{!! json_decode($portfolio->ppi) !!}';
	var min_val= '{!! json_decode($min) !!}';
	var expenses = '{!! json_decode($portfolio->expenses) !!}';
	var net = '{!! json_decode($net_flower_price) !!}';
	var category = '{!! $portfolio->category_id !!}';
	expenses = parseInt(expenses);
    min_val = min_val * 1;
	var max = (min_val * 2.05);

	var skipValues = [
		document.getElementById('value-lower'),
	];

	var total = [
		document.getElementById('price'),
	];

	var net_id = [
	     document.getElementById('net_price'),  document.getElementById('profit'),
    ];

	var flori = 15;
    function selectType(val){
        skipValues[0].innerHTML = flori = Math.round(val);
        total[0].innerHTML = Math.round(flori * price);
        filterBar.noUiSlider.set([flori]);
	}


	noUiSlider.create(filterBar, {
		start: [ min_val ],
		step: 2,
		connect: "lower",
		range: {
			'min': min_val,
			'max': max
		}
	});
    var big_bouquet = min_val * 1.5;
	let final;
	if( net_id[0] != null){
        filterBar.noUiSlider.on('update', function( values, handle ) {
            skipValues[handle].innerHTML = flori = Math.round(values[handle]) ;
            total[handle].innerHTML = final = Math.round(flori * price);
            document.getElementById("flow_amount").value = flori;
            net_id[0].innerText = Math.round(flori * net + expenses);
            net_id[1].innerText = final - Math.round(flori * net + expenses);
        });
	} else {
        filterBar.noUiSlider.on('update', function( values, handle ) {

            skipValues[handle].innerHTML = flori = Math.round(values[handle]) ;
            if(flori > big_bouquet && category != 'flori-angro'){
                total[handle].innerHTML = final = Math.round(flori * price * 0.95);
                document.getElementById("discount").style.display = 'block';
            } else {
                total[handle].innerHTML = final = Math.round(flori * price);
                document.getElementById("discount").style.display = 'none';
            }

            document.getElementById("flow_amount").value = flori;
        });
	}

</script>
</body>
</html>
