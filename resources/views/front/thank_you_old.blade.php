<!DOCTYPE html>
<html lang="en">
@include('layouts.css')
<body>
@include('layouts.header')
	<style>
		#br_crumb_ul{
			list-style-type:none
		}
		.br_crumb_li{
			display:inline
		}
	</style>
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm" itemscope="" itemType="http://schema.org/BreadcrumbList">
	<ul itemscope="" itemType="http://schema.org/BreadcrumbList" id="br_crumb_ul">
		<li class="br_crumb_li" itemProp="itemListElement" itemscope="" itemType="http://schema.org/ListItem" >
			<a data-breadcrumb="Acasa" title="Acasa" itemProp="item" href="/" class="s-text16" >
				<span itemProp="name">Acasa</span>
				<meta itemProp="position" content="0"/>
				<i class="fa fa-angle-right m-l-8 m-r-9 Breadcrumbs-separator" aria-hidden="true"></i>
			</a>
		</li>
		@if(isset($portfolio))
		<li class="br_crumb_li" itemProp="itemListElement" itemscope="" itemType="http://schema.org/ListItem">
			<a class="s-text16" data-breadcrumb="{{ ucwords($portfolio->category_id) }}" title="{{ ucwords($portfolio->category_id) }}" itemProp="item" href="{{ url(strtolower($portfolio->category_id)) }}">
				<span itemProp="name">{{ ucwords($portfolio->category_id) }}</span>
				<meta itemProp="position" content="1"/>
				<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
			</a>
		</li>
		<li class="br_crumb_li" itemProp="itemListElement" itemscope="" itemType="http://schema.org/ListItem">
			<a class="s-text16" data-breadcrumb="{{ ucwords($portfolio->category_id) }}" title="{{ ucwords($portfolio->category_id) }}" itemProp="item" href="{{ url($portfolio->category->name . '/' . $portfolio->slug . '/') }}">
				<span itemProp="name">{{ ucwords($portfolio->slug) }}</span>
				<meta itemProp="position" content="2"/>
				<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
			</a>
		</li>
		<li class="br_crumb_li" itemProp="itemListElement" itemscope="" itemType="http://schema.org/ListItem">
			<a href="{{ url('/checkout?product_id=' . $portfolio->id)  }}" itemProp="item" class="s-text16">
				<span itemProp="name">Checkout</span>
				<meta itemProp="position" content="3"/>
				<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
			</a>
		</li>
		@endif
		<li class="br_crumb_li" itemProp="itemListElement" itemscope="" itemType="http://schema.org/ListItem">
			<a itemProp="item" class="s-text16">
				<span itemProp="name">Thank you</span>
				<meta itemProp="position" content="4"/>
			</a>
		</li>
	</ul>
</div>
	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					@if(isset($portfolio))
					<div class="{{ $portfolio->photos->count() > 1 ? 'wrap-slick3-dots' : ''}}"></div>
					<div class="slick3">
						@foreach($portfolio->photos as $key => $photo)
							@if(!empty($photo->file))
								<div class="item-slick3" data-thumb="{{ $photo->file }}">
									<div class="wrap-pic-w">
										<a href="{{ $photo->file }}"><img src="{{ $photo->file }}" alt="IMG-PRODUCT"></a>
									</div>
								</div>
							@endif
						@endforeach
					</div>
					@endif
				</div>
			</div>
			<div class="w-size14 p-t-30 respon5">
				@if(isset($portfolio))
				<h4 class="product-detail-name m-text16 p-b-13">
					{{ $portfolio->name }}
				</h4>
				@endif
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<h5>
							Felicitări! Comanda a fost plasata cu succes. Urmeaza preluarea acesteia de catre un florar si pregătirea pentru livrare.
						</h5>
						<br><br>
						@if(!empty($price))
							<h6>Suma totala este de {{ $price }} Ron</h6>
						@endif
					</div>
				</div>
				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Instrucțiuni pentru îngrijirea florilor tăiate
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							1. Se toarnă apă rece în vază.<br>
							2. Scoateți frunzele inferioare de pe tulpină. <br>
							3. Tăiați din nou capătul de jos al florilor cu un cuțit/foarfecă ascuțită sub un unghi de 45 de grade.<br>
							4. Schimbați apa în fiecare zi, clătiți tulpinele și tăiați-le din nou. <br>
							5. Vaza cu flori trebuie plasată la distantă de aparate care elimină căldură, evitați razele directe solare și nu plasați fructe sau legume lângă flori.<br>
							<strong>Cutii cu Flori:</strong><br>
							1. Se toarnă puțină apă rece printre flori în 2-3 locuri pe buretele floristic (verde) o dată la 2-3 zile.<br>
						</p>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
@if(isset($similarProducts))
	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Produse similare
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">

					@foreach($similarProducts as $product)
						<div class="item-slick2 p-l-15 p-r-15">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative {{$product->discount > 0 ? 'block2-labelsale': '' }}">
									@if(!empty($product->photo->file))
										<img src="{{ $product->photo->file  }}" alt="IMG-PRODUCT">
									@endif
									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										{{--<div class="block2-btn-addcart w-size1 trans-0-4">--}}
											{{--<!-- Button -->--}}
											{{--<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">--}}
												{{--Add to Cart--}}
											{{--</button>--}}
										{{--</div>--}}
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="{{ url((isset($product->category->name) ? $product->category->name : '') . '/' . $product->slug) }}" class="block2-name dis-block s-text3 p-b-5">
										{{ $product->name }}
									</a>
									@if($product->discount > 0 )
										<span class="block2-oldprice m-text7 p-r-5">
											{{ $product->discount }} Ron
										</span>
										<span class="block2-newprice m-text8 p-r-5">
												{{ $product->price }} Ron
										</span>
									@else
										<span class="block2-price m-text6 p-r-5">
											{{ $product->price }} Ron
										</span>
									@endif
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>

		</div>
	</section>
@endif
<div id="dropDownSelect1"></div>
@include('layouts.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js" ></script>
@include('layouts.js')
</body>
</html>
