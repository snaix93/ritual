<!DOCTYPE html>
<html lang="en">
@include('layouts.css')
<body>
<?php   $title  = 'Buchete elegante si cutii unice din flori naturale';
$description = 'O colectie deosebita din flori naturale taiate, aranajate în cutii cu flori, buchete, aranjamente florale pentru a crea emoții memorabile si a transforma cea mai obișnuită zi într-o sărbătoare. Am combinat trandafiri de toate culorile, mini-trandafiri, lisiantus, hortensie, eucalipt si multe alte flori transformându-le într-o artă florală.';
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
<style>
	#titl{
		font-size: 20px;
	}
</style>
@include('layouts.header')
<!-- Slide1 -->
{{--<section class="slide1">--}}
	{{--<div class="wrap-slick1">--}}
		{{--<div class="slick1">--}}
			{{--<div class="item-slick1 item1-slick1" style="background-image: url({{ asset('images/bgd/flori-in-cutii.jpg')}})">--}}
				{{--<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">--}}
						{{--<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">--}}
							{{--Flori în cutie--}}
						{{--</span>--}}

					{{--<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">--}}
						{{--Colecție nouă--}}
					{{--</h2>--}}

					{{--<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">--}}
						{{--<!-- Button -->--}}
						{{--<a href="{{ url('flori-in-cutie')}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">--}}
							{{--Shop Now--}}
						{{--</a>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}

			{{--<div class="item-slick1 item2-slick1" style="background-image: url({{ asset('images/bgd/buch.jpg')}})">--}}
				{{--<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">--}}
						{{--<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn" >--}}
							{{--Buchete de Flori--}}
						{{--</span>--}}

					{{--<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">--}}
						{{--Plante Deosebite--}}
					{{--</h2>--}}

					{{--<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">--}}
						{{--<!-- Button -->--}}
						{{--<a href="/buchete-de-flori" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">--}}
							{{--Shop Now--}}
						{{--</a>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}

			{{--<div class="item-slick1 item3-slick1" style="background-image: url({{ asset('images/bgd/szon.jpg')}})">--}}
				{{--<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">--}}
						{{--<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">--}}
							{{--Flori de sezon--}}
						{{--</span>--}}

					{{--<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">--}}
						{{--Mix de culori--}}
					{{--</h2>--}}

					{{--<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">--}}
						{{--<!-- Button -->--}}
						{{--<a href="flori/flori-de-toamna"class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">--}}
							{{--Shop Now--}}
						{{--</a>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}

		{{--</div>--}}
	{{--</div>--}}
{{--</section>--}}

<!-- Banner -->
<section class="banner bgwhite p-t-40 p-b-40">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<a href="/flori/aniversare">
						<img src="{{ asset('images/bgd/aniversare.jpg') }}" alt="flori-de-aniversare">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<div class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Aniversare
							</div>
						</div>
					</a>
				</div>
				<!-- block1 -->
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<a href="/buchete-de-flori">
						<img src="{{ asset('images/bgd/buch_flori.jpg') }}" alt="buchet-de-flori">
						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<div class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Buchete de Flori
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
				<!-- block1 -->
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<a href="flori/trandafiri">
						<img src="{{ asset('images/bgd/trandaf.jpg')}}" alt="buchet-trandafiri-rosii">
						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<div class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Trandafiri
							</div>
						</div>
					</a>
				</div>

				<!-- block1 -->
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<a href="/flori/flori-de-lux">
						<img src="{{ asset('images/bgd/lux.jpg')}}" alt="flori-de-lux">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<div class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Flori de lux
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
				<!-- block1 -->
				<div class="block1 hov-img-zoom pos-relative m-b-30">
					<a href="/flori-in-cutie">
						<img src="{{ asset('images/bgd/flori_cutie.JPG') }}" alt="flori-in-cutie">
						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<div  class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Flori în Cutie
							</div>
						</div>
					</a>
				</div>

				<!-- block2 -->
				<div class="block2 wrap-pic-w pos-relative m-b-30">
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<a href="/funerara">
							<img src="{{ asset('images/bgd/crn.jpg') }}" alt="coroana-funerara">

							<div class="block1-wrapbtn w-size2">
								<!-- Button -->
								<div class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
									Funerare
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="relateproduct bgwhite p-t-45 p-b-138">
	<div class="container">
		<div class="sec-title p-b-60">
			<h1 class="m-text5 t-center" id="titl">
				{{ $title }}
			</h1>
			<h6 class="t-center">{{ $description }}</h6>
		</div>
		<div class="row" itemscope itemtype=http://schema.org/ItemList>
			<link itemprop=itemListOrder href=http://schema.org/ItemListOrderAscending/>
			<span itemprop=numberOfItems hidden>{{$newProducts->count()}}</span>
			@foreach($newProducts as $key => $product)
				<div class="col-md-4" itemprop=itemListElement itemscope itemtype=http://schema.org/ListItem>
					<span itemprop=position hidden>{{($key + 1)}}</span>
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative {{$product->discount > 0 ? 'block2-labelsale': '' }}">
							<a href="{{ url((isset($product->category->name) ? $prCatName = $product->category->name : '') . '/' . $product->slug) }}" itemprop=url>
								@if(!empty($product->photo->file))
									<img src="{{ $product->photo->file  }}" itemprop=image class="similarProductImg"  alt="{{ $product->name }}">
								@endif
							</a>
						</div>
						<div class="block2-txt p-t-20">
							<a href="{{ url((isset($prCatName) ? $prCatName : '') . '/' . $product->slug) }}" class="block2-name dis-block s-text3 p-b-5">
								<strong>{{ $product->name }}</strong>
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
							<p itemprop="description" class="card-description description" style="color:black">
								{{ substr($product->description , 0, 100) }}...
							</p>
							<br>
						</div>
					</div>
				</div>
			@endforeach
		</div>
		<div class="btn-addcart-product-detail size15 trans-0-4 m-t-10 m-b-10">
			<!-- Button -->
			<a href="{{ route('all_products') }}">
				<button type="button" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 more_products">
					&nbsp; Toate produsele Buchetto
				</button>
			</a>
		</div>

	</div>
</section>

<!-- Blog -->
<section class="blog bgwhite p-t-94 p-b-65">
	<div class="container">
		<div class="sec-title p-b-52">
			<h3 class="m-text5 t-center">
				Ocazii
			</h3>
		</div>

		<div class="row">
			<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
				<!-- Block3 -->
				<div class="block3">
					<a href="/flori/flori-si-dulciuri"class="block3-img dis-block hov-img-zoom">
						<img src="{{ asset('images/bgd/aniv.jpg')}}" alt="IMG-BLOG">
					</a>

					<div class="block3-txt p-t-14">
						<h4 class="p-b-7">
							<a href="/flori/flori-si-dulciuri"class="m-text11">
								Flori si dulciuri
							</a>
						</h4>

						<span class="s-text7">Cadouri delicioase</span>

						<p class="s-text8 p-t-16">
							Cutii cu flori si dulciuri aranjate in cutie din Kinders, Raffaello in combinatie cu trandafiri, bujori si alte flori si dulciuri vor deveni un cadou uimitor, plin de expansiune si gratie.
						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
				<!-- Block3 -->
				<div class="block3">
					<a href="flori/deosebite" class="block3-img dis-block hov-img-zoom">
						<img src="{{ asset('images/bgd/d2.jpg')}}" alt="IMG-BLOG">
					</a>

					<div class="block3-txt p-t-14">
						<h4 class="p-b-7">
							<a href="flori/deosebite"class="m-text11">
								Compozitii deosebite
							</a>
						</h4>
						<span class="s-text7">Hortensie, floarea soarelui, matiola & multe altele</span>

						<p class="s-text8 p-t-16">
							Am combinat în buchetele de flori, aranjamentele florale si în cutiile floristice flori deosebite care atât de rar sunt întâlnite pe piata si care pot deveni un cadou din flori deosebit impresionând prin finețea gustului si frumusetea florilor.

						</p>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
				<!-- Block3 -->
				<div class="block3">
					<a href="flori/aniversare" class="block3-img dis-block hov-img-zoom">
						<img src="{{ asset('images/bgd/d3.JPG')}}" alt="IMG-BLOG">
					</a>

					<div class="block3-txt p-t-14">
						<h4 class="p-b-7">
							<a href="flori/aniversare"class="m-text11">
								La multi ani!
							</a>
						</h4>

						<span class="s-text6"></span> <span class="s-text7">Compozitii interesante pentru o aniversare memorabila</span>

						<p class="s-text8 p-t-16">
							Colectia noastra de aniversare este compusa din buchete din flori, cutii cu flori si dulciuri, compozitii din trandafiri pentru o aniversare deosebita!
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Shipping -->
<section class="shipping bgwhite p-t-62 p-b-46">
	<div class="flex-w p-l-15 p-r-15">
		<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
			<h4 class="m-text12 t-center">
				Livrare Gratuita Bucuresti
			</h4>

			<a  class="s-text11 t-center">
				Pentru toate produsele cu pretul mai mare de 200 Ron, Livrarea este gratuită!
			</a>
		</div>

		<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
			<h4 class="m-text12 t-center">
				Return fară explicație
			</h4>

			<span class="s-text11 t-center">
					În momentul primirii produsului, dacă acesta nu corespunde cu cel așteptat, puteți renunța la el fără explicații.
				</span>
		</div>

		<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
			<h4 class="m-text12 t-center">
				Comandă oricând
			</h4>

			<span class="s-text11 t-center">
					Ne puteți contacta la orice ora pentru a comanda produse sau pentru a afla informații despre ele.
				</span>
		</div>
	</div>
</section>
<link rel="stylesheet" type="text/css" href="{{ asset('fache/vendor/slick/slick.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ asset('fache/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}" />
@include('layouts.footer')
<div class="chat-popup" id="myForm">
	<div class="form-container">
		<a href="/whatsapp-message" target="_blank">
			<img src="{{ asset('images/icons/whatsapp.png') }}" width="50" height="50">
			WhatsApp
		</a><br><br>
		<a href="sms:+40726688087?body=Buna!%20Ma%20intereseaza%20un%20produs,%20ma%20puteti%20ajuta?"  target="_blank" style="margin-right: 5px;">
			<img src="{{ asset('images/icons/sms.png') }}" width="50" height="50">
			Sms
		</a>
		<br><br>
		<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
	</div>
</div>
<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>

@include('layouts.js')
</body>
</html>
