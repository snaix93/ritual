<!DOCTYPE html>
<html lang="en">
<title>Checkout</title>
@include('layouts.css')
<body>
<?php
$mid="44840987858";
$key="0D080479C10A4F42BA01B5A3F296478327CE42BA";
?>
@include('layouts.header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/checkout.css')}}" />
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">--}}
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<div id="part1">
	<div class="inside">
	</div>
</div>
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
			<a class="s-text16" data-breadcrumb="{{ ucwords($product->category_id) }}" title="{{ ucwords($product->category_id) }}" itemProp="item" href="{{ url(strtolower($product->category_id)) }}">
				<span class="em15" itemProp="name">{{ ucwords($product->category_id) }}</span>
				<meta itemProp="position" content="2"/>
				<i class="em15 fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
			</a>
		</li>
		<li class="br_crumb_li" itemProp="itemListElement" itemscope="" itemType="http://schema.org/ListItem">
			<a itemProp="item" class="s-text16" href="{{ url(strtolower($product->category_id) . '/' . $product->slug) }}">
				<span class="em15" data-breadcrumb="{{ ucwords($product->slug) }}" itemProp="name">{{ ucwords($product->slug) }}</span>
				<meta itemProp="position" content="3"/>
				<i class="em15 fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
			</a>
		</li>
		<li class="br_crumb_li" itemProp="itemListElement" itemscope="" itemType="http://schema.org/ListItem">
			<a itemProp="item" class="s-text16" href="">
				<span class="em15" data-breadcrumb="Checkout">Checkout</span>
				<meta itemProp="position" content="4"/>
			</a>
		</li>
	</ul>
</div>
<form method="POST" action="{{ route('comenzi.store', [$product->category->slug, $product->slug]) }}">
<!-- Cart -->
<section class="cart bgwhite p-b-100">
	<div class="container">
		<section class="bgwhite">
			<div class="container">
				<div class="row">
					<input class="checkbox-color-filter" type="checkbox">
					<div class="col-md-6 p-b-30">
							{{ csrf_field() }}
							<input name="flow_amount" value="{{ $flow_amount }}" type="hidden">
							<input name="coupon" value="" type="hidden" id="coupon">
							<h4 class="m-text26 p-b-36 p-t-15">
								Cine Primeste
							</h4>
							<div class="row">
								<select class="form-control sizefull bo4 of-hidden size15 m-b-20 col-md-6" name="date" id="exampleFormControlSelect1">
									@if(!empty($selectedData))
										<option>{{ $selectedData }}</option>
										@else
										<option>Data livrare</option>
										@endif

									@foreach($dates as $key => $date)
										@if($key < 60)
											<option>{{ $date  }}</option>
										@else
											@break
										@endif
									@endforeach
								</select>

								<select class="form-control sizefull bo4 of-hidden size15 m-b-20 col-md-6" name="time" id="exampleFormControlSelect1">
									<option>Interval</option>
									<option>08:00 - 11:00</option>
									<option>11:00 - 14:00</option>
									<option>14:00 - 17:00</option>
									<option>17:30 - 21:00</option>
								</select>
								{{--<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="name" placeholder="Data & ora aproximativa livrare">--}}
							</div>
							<div class="bo4 of-hidden size15 m-b-20">
								<input class="sizefull s-text7 p-l-22 p-r-22"  type="text" name="r_name" placeholder="Nume Prenume">
							</div>

							<div class="bo4 of-hidden size15 m-b-20">
								<input class="sizefull s-text7 p-l-22 p-r-22"  type="text" name="r_number" placeholder="Număr de telefon">
							</div>
							<div class="bo4 of-hidden size15 m-b-20">
								<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="r_address" placeholder="Adresa de livrare">
							</div>
							<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Messaj"></textarea>
							@if($product->category_id == 'funerara')
								<h2>
									<a href="https://www.buchetto.ro/blog/mesaje-funerare" target="_blank">
										<strong> Ai nevoie de ajutor cu mesajul funerar? Click aici (Se va deschide o fereastră nouă)</strong>
									</a>
								</h2>
							@endif
							<h4 class="m-text26 p-b-36 p-t-15">
								Cine Trimite
							</h4>
							<div class="bo4 of-hidden size15 m-b-20">
								<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="b_number" placeholder="Număr de telefon">
							</div>
							<div class="bo4 of-hidden size15 m-b-20">
								<input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="email" placeholder="Email">
							</div>
							<input type="hidden" value="" name="payment_type" id="payment_type">
							<input type="hidden" value="" name="delivery_type" id="delivery_type">
							<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="specific" placeholder="Comentarii"></textarea>
							<script>
                                function hide() {
                                    var x = document.getElementById("terms");
                                    if (x.style.display === "block") {
                                        x.style.display = "none";
                                    } else {
                                        x.style.display = "block";
                                    }
                                }
							</script>
					</div>
					<div class="col-md-6 p-b-30">
						<h1 class="m-text26 p-b-36 p-t-15">
							Modalitatea de plata
						</h1>
						<div class="checkbox">
							<label style="font-size: 1.5em">
								<input type="checkbox" value="card" onclick="paymnt('card')" id="card">
								<span class="cr"><i class="cr-icon fa fa-check"></i></span>
								Plata securizata cu cardul
							</label>
							<div class="t-center p-l-15 p-r-15">
								<a href="#">
									<img class="h-size2" src="{{ asset('fache/images/icons/paypal.png')}}" alt="IMG-PAYPAL">
								</a>

								<a href="#">
									<img class="h-size2" src="{{ asset('fache/images/icons/visa.png')}}" alt="IMG-VISA">
								</a>

								<a href="#">
									<img class="h-size2" src="{{ asset('fache/images/icons/mastercard.png')}}" alt="IMG-MASTERCARD">
								</a>

								<a href="#">
									<img class="h-size2" src="{{ asset('fache/images/icons/express.png')}}" alt="IMG-EXPRESS">
								</a>

								<a href="#">
									<img class="h-size2" src="{{ asset('fache/images/icons/discover.png')}}" alt="IMG-DISCOVER">
								</a>

							</div>
							<div class="checkbox">
								<label style="font-size: 1.5em">
									<input type="checkbox" value="magazin" onclick="paymnt('on_delivery')">
									<span class="cr"><i class="cr-icon fa fa-check"></i></span>
									Cash la livrare <br>
								</label>
							</div>
						</div>
						<br><br>
						<h4 class="m-text26 p-b-36 p-t-15">
							Livrare
						</h4>
						@if($total < 200)
							<div class="checkbox">
								<label style="font-size: 1.5em">
									<input type="checkbox" value="livrare_platita" class="delivery_type" onclick="delivery('livrare_platita')" id="livrare_platita">
									<span class="cr"><i class="cr-icon fa fa-check"></i></span>
									Bucuresti 20 Ron
								</label>
							</div>
							<div class="checkbox">
								<label style="font-size: 1.5em">
									<input type="checkbox" value="livrare_in_ilfov" class="paymnt delivery_type" onclick="delivery('livrare_in_ilfov')" id="livrare_in_afara">
									<span class="cr"><i class="cr-icon fa fa-check"></i></span>
									Livrare Ilfov (45 Ron)
								</label>
							</div>
							<div class="checkbox">
								<label style="font-size: 1.5em">
									<input type="checkbox" value="ridicare_magazin" class="delivery_type"  onclick="delivery('ridicare_magazin')" id="ridicare_magazin">
									<span class="cr"><i class="cr-icon fa fa-check"></i></span>
									Ridicare din magazin (0 Ron)
								</label>
							</div>
						@else
							<div class="checkbox">
								<label style="font-size: 1.5em">
									<input type="checkbox" value="livrare_gratuita" class="paymnt delivery_type" onclick="delivery('livrare_gratuita')" id="livrare_gratuita">
									<span class="cr"><i class="cr-icon fa fa-check"></i></span>
									Livrare în Sectoarele 1 - 6 (0 Ron). <br>
									Livrarea este gratuita in raza 8KM centru: <a href="https://www.buchetto.ro//images/1575527136harta%20livrare.JPG">Harta</a>
								</label>
							</div>
							<div class="checkbox">
								<label style="font-size: 1.5em">
									<input type="checkbox" value="livrare_in_afara" class="paymnt delivery_type" onclick="delivery('livrare_in_afara')" id="livrare_in_afara">
									<span class="cr"><i class="cr-icon fa fa-check"></i></span>
									Livrare Ilfov/Pantelimon (25 Ron)
								</label>
							</div>
							<div class="checkbox">
								<label style="font-size: 1.5em">
									<input type="checkbox"  value="ridicare_personala" class="delivery_type" onclick="delivery('ridicare_personala')" id="ridicare_personala">
									<span class="cr"><i class="cr-icon fa fa-check"></i></span>
									Ridicare din magazin (Reducere 15 Ron) <br>
									Total = {{ round($total) - 15 }}
								</label>
							</div>
						@endif
					</div>
				</div>
			</div>
		</section>
	</div>
</section>
<main class="page">
	<section class="shopping-cart dark">
		<div class="container">
			<div class="block-heading">
				<h2>Checkout</h2>
			</div>
			<div class="content">
				<div class="row">
					<div class="col-md-12 col-lg-8">
						<div class="items">
							<div class="product">
								<div class="row">
									<div class="col-md-4" style="margin-left: 15px;">
										<img class="img-fluid mx-auto d-block image" src="{{ $product->photo->file }}" style="max-width: 200px;">
									</div>
									<div class="col-md-7">
										<div class="info">
											<div class="row">
												<div class="col-md-6 product-name top20px">
													<div class="product-name">
														{{ $product->name }}
													</div>
												</div>
												<div class="col-md-2 top20px">
													<span> {{ $flow_amount }} Flori</span>
												</div>
												<div class="col-md-4 top20px">
													<strong >{{ round($total)}} Ron</strong>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							{{--@foreach($options as $option)--}}
							{{--<div class="product">--}}
							{{--<div class="row">--}}
							{{--<div class="col-md-4" style="margin-left: 15px;">--}}
							{{--<img class="img-fluid mx-auto d-block image" src="{{ $option->photo->file }}" style="max-width: 200px;" width="140">--}}
							{{--</div>--}}
							{{--<div class="col-md-7">--}}
							{{--<div class="info">--}}
							{{--<div class="row">--}}
							{{--<div class="col-md-6 product-name" style="margin-top: 20px;">--}}
							{{--<div class="product-name">--}}
							{{--{{ $option->name }}--}}
							{{--</div>--}}
							{{--</div>--}}
							{{--<div class="col-md-2">--}}
							{{--</div>--}}
							{{--<div class="col-md-4" style="margin-top: 20px;">--}}
							{{--<strong >{{ $option->price }} Ron</strong>--}}
							{{--</div>--}}
							{{--</div>--}}
							{{--</div>--}}
							{{--</div>--}}
							{{--</div>--}}
							{{--</div>--}}
							{{--@endforeach--}}
						</div>
						<div class="flex-w flex-m w-full-sm" style="margin-left: 20px;" id="hide_coupon">
							<div class="size11 bo4 m-r-10">
								<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code" id="coupon_val">
							</div>

							<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
								<!-- Button -->
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" type="button" id="apply_coupon">
									Apply coupon
								</button>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="summary">
							<h3>Detalii Comanda</h3>
							<div class="summary-item"><span class="text">{{ $product->name }}</span><span class="price">	{{ round($total) }}</span></div>
							{{--@foreach($options as $option)--}}
								{{--<div class="summary-item"><span class="text">{{ $option->name }}</span><span class="price">	{{ $option->price }}</span></div>--}}
							{{--@endforeach--}}
							@if($total > 199)
								<div class="summary-item"><span class="text">Livrare București</span><span class="price">0 Ron</span></div>
							@endif
							<div class="summary-item" style="font-size: 1.7em;"><span class="text">Total</span><span class="price" id="total">{{ round($total)}}</span></div>
						</div>
					</div>
			</div>
				<br>
				<div class="container">
					<div class="checkbox col-md-offset-8" style="margin-right: 5px;">
						<label style="font-size: 1.5em">
							<input type="checkbox" value="ridicare" checked onclick="hide()" required>
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
							<h6>Prin continuare confirmati ca sunteti deacord cu Termeni si Condițiile sitului</h6>
						</label>
						<div id="terms" style="display: none;">
							<p><span>1. Produsele noastre</span><br><span>1.1 Produsele sunt în funcție de disponibilitate. Dacă nu putem furniza elementul ales ne rezervăm dreptul de a înlocui un produs de valoare echivalentă, calitate și culoare.<span> </span></span><br><span>1.2 Dacă nu putem furniza elementul ales sau o substituție adecvată vă vom sfătui cât mai curând posibil și vom rambursa plata în întregime în termen de maxim 14 zile.<span> </span></span><br><span>2. Preturi<span> </span></span><br><span>2.1 Prețurile afișate sunt valabile pentru o perioadă de maximum 14 zile de la plasarea comenzii.<span> </span></span><br><br><span>3. Comenzi / Plată<span> </span></span><br><span>3.1 Pentru a îndeplini comanda avem nevoie de toate câmpurile conținute în formularul de comandă care se completează cu informații relevante. Prin transmiterea ordinului de plată și detaliilor, vă exprimați acordul să respectați termenii și condițiile incluse în acești Termeni și Condiții și care apar oriunde pe site-ul nostru<span> </span></span><<br><span>3.3. Securitatea plăților. Vă recomandăm să comandati produse folosind formularul de comandă securizat sau prin telefon. Dacă utilizați un card de credit din afara Romaniei conversia valutară se va face de către compania de card de credit.<span> </span></span><br><span>3.4 Achiziția va fi considerată ca a avut loc în Romania. Acești termeni și condiții vor fi guvernate și interpretate în conformitate cu Legea romana și părțile sunt de acord să se supună jurisdicției exclusive a instanțelor romane.<span> </span></span><br><span>4. Livrarea<span> </span></span><br><span>4.1 taxele de livrare vor fi aplicabile în interiorul zonei specificate. Dacă solicitați livrare în zonele îndepărtate care nu sunt livrate în mod normal, veti fi informat cu privire la orice taxe suplimentare, cât mai curând posibil după primirea comenzii dvs. Formular.<span> </span></span><br><span>4.2 În cazul în care o livrare va fi solicitata urgent, vom face tot posibilul sa executam la timp comanda dar nu suntem obligati sa o indeplinim mai devreme de timpul stabilit in momentul executarii comenzii.<span> </span></span><br><span>4.3 Pentru livrare in aceeasi zi, trebuie să primim formularul de comandă pana la ora 14:00 sau să confirmam telefonic că putem livra produsul la ora stabilită. Vom procesa formularele de comandă primite în zilele de duminică sau de sărbători publice în următoarea zi lucrătoare. Noi nu executam comenzi în zilele de duminică sau de sărbători legale (excepție a Mamei zi sau comenzi confirmate telefonic).<span> </span></span><br><span>4.4 În cazul în care sunt incorecte detalii personale de livrare, comenzile pot fi livrate cu intarzieri, ca sa nu se intample asta, asigurați-vă că ați inclus datele complete de adrese, ale destinatarului și numărul de telefon sau adresa de e-mail în timpul zilei, astfel încât să vă putem anunța în cazul în care apar probleme de livrare.<span> </span></span><br><span>4.5 În timp ce vom face toate eforturile pentru a ne asigura că livrarea se fac la data solicitată confirmați că, în cazuri foarte rare, livrarea la termenele solicitate nu va fi posibilă. În acest caz, vi se va da o notificare prealabilă ori de câte ori este posibil și vom face fie aranjamente alternative sau va rambursa plata în întregime (conform 1.2).<span> </span></span><br><span>4.6 În cazul în care un terț este implicat in timpul de livrare, cum ar fi spitale, școli, birouri, semnătura oricărei persoane autorizate să accepte livrarea, în numele organizației trebuie să fie acceptată ca dovadă de livrare a destinatarului ales.<span> </span></span><br><span>4.7 În situația în care există dificultăți în furnizarea de comanda a destinatarului ne rezervăm dreptul de a contacta destinatarul folosind datele de contact pe care le furnizați pe comandă iar daca destinatarul nu e acasă, vom încerca să livram la un vecin sau posta prin curier informându-i că o livrare a fost încercata.<span> </span></span><br><span>5. Anularea<span> </span></span><br><span>5.1 Comenzile pot fi modificate sau anulate până la 24 de ore înainte de data de livrare intenționată.<span> </span></span><br><span>6.General<span> </span></span><br><span>6.1 Buchetto își rezervă dreptul de a completa și de a modifica Termenii și condițiile care sunt permise pe site-ul online și / sau a serviciului online din când în când. Vom posta orice modificări pe site și este responsabilitatea dumneavoastră ca client de a revedea Termenii și condițiile de fiecare dată când accesați serviciul online. Modificările vor fi eficiente la cinci ore de la afișarea unei astfel de modificări și toate tranzacțiile ulterioare dintre companie și dumneavoastra.<span> </span></span><br><span>6.2 Aditional, ne rezervăm dreptul de a suspenda, restricționa sau înceta accesul la site-ul online și / sau Serviciile online din orice motiv, în orice moment.<span> </span></span><br><span>6.3 Acești termeni și condiții se consideră că includ toate celelalte avize, politici, declinări și alți termeni conținute în site-ul online, cu condiția ca, în cazul unui conflict între astfel de alte notificări, politici, declinări și alți termeni, acești termeni și Condițiile vor prevala. Dacă oricare dintre acești Termeni și condiții este considerată invalidă sau inaplicabilă, celelalte prevederi vor rămâne în vigoare și efect.<span> </span></span><br><span>6.4 Vom asigura că vom respecta cerința tuturor legislațiilor în vigoare privind protecția datelor, inclusiv, fără a se limita la, Legea privind protecția datelor din 1988 (cum a fost înlocuit, modificat sau reinterpretată din când în când). Vom folosi doar datele cu caracter personal primite de la dvs. în scopul îndeplinirii obligațiilor noastre în temeiul acestor Termeni și condiții și după cum se menționează în Politica de confidențialitate.<span> </span></span><br><span>6.5 O persoană care nu este parte a acordului încheiat între dumneavoastră și noi nu are dreptul de a pune în aplicare oricare dintre termenii și condițiile, dar acest lucru nu afectează niciun drept sau remediu care există în temeiul legii statutului.<span> </span></span><br><span>6.6 Investigarea în ceea ce privește denaturarea frauduloasă, acestui acord (inclusiv toate documentele și instrumentele menționate în acest document) opreste comenzile pentru anterioare reprezentări, aranjamente, înțelegeri și acorduri între noi și voi (fie scrise sau orale) și stabilește întregul acord și înțelegere între dumneavoastra și noi cu privire la obiectul acestora.<span> </span></span></p>
							<div class="title"></div>
							<div cwelass="title">7. Protectia datelor</div>
							<p>Conform cerinţelor Legii nr. 677/2001 pentru protectia persoanelor cu privire la prelucrarea datelor cu caracter personal si libera circulatie a acestor date, modificata si completata si ale Legii nr. 506/2004 privind prelucrarea datelor cu caracter personal si protectia vietii private in sectorul comunicaţiilor electronice, site-ul nostru administrat de buchetto.ro, are obligatia de a administra in conditii de siguranta si numai pentru scopurile specificate, datele personale pe care ni le furnizezi despre tine, un membru al familiei tale ori o alta persoana. Scopul colectarii datelor este utilizarea lor in vederea facturarii produselor comandate.</p>
							<p>Informatiile inregistrate sunt destinate utilizarii de catre operator in scopul livrarii produselor si sunt comunicate numai de catre tine. Conform Legii nr. 677/2001, beneficiezi de dreptul de acces, de interventie asupra datelor, dreptul de a nu fi supus unei decizii individuale si dreptul de a te adresa justitiei. Totodata, ai dreptul sa te opui prelucrarii datelor personale care te privesc si sa soliciti stergerea datelor. Daca unele din datele despre tine sunt incorecte, te rugam sa ne informezi cat mai curand posibil.</p>
							<p>Pentru exercitarea acestor drepturi, puteti contacta in orice moment Responsabilul buchetto.ro cu protecția datelor prin transmiterea solicitarii dvs prin oricare dintre urmatoarele modalitati:</p>
							<ul>
								<li>prin e-mail la adresa: buchetedetrandafiri@gmail.com</li>
								<li>prin poștă sau curier la adresa: Iani Buzoiani 17 Sector 1 București - cu mentiunea în atenția Responsabilului buchetto.ro cu protecția datelor.</li>
							</ul>
							<p>De asemenea, iti este recunoscut dreptul de a te adresa justitiei. Numar de inregistrare ANSPDCP: 28896</p>
							<p>Poti consulta politica noastra legata de prelucrarea datelor cu caracter personal<span> accesand acest link: <a href="https://www.buchetto.ro/cookies">https://www.buchetto.ro/cookies</a></span>.</p>

							<div class="title">8. Acest site utilizeaza cookie-uri</div>
							<p>Acest site foloseste cookie-uri. Prin acceptarea acestor termeni si conditii va exprimati acordul pentru folosirea cookie-urilor conform Regulamentului (UE) 2016/679 si are obligatia de a administra in conditii de siguranta si numai pentru scopurile specificate, datele personale pe care ni le furnizezi despre tine, un membru al familiei tale ori o alta persoana. Scopul colectarii datelor este utilizarea lor in vederea facturarii produselor comandate.</p>
							<p>Informatiile inregistrate sunt destinate utilizarii de catre operator in scopul livrarii produselor si sunt comunicate numai de catre tine. Conform Legii nr. 677/2001, beneficiezi de dreptul de acces, de interventie asupra datelor, dreptul de a nu fi supus unei decizii individuale si dreptul de a te adresa justitiei. Totodata, ai dreptul sa te opui prelucrarii datelor personale care te privesc si sa soliciti stergerea datelor. Daca unele din datele despre tine sunt incorecte, te rugam sa ne informezi cat mai curand posibil.</p>
							<p>Pentru exercitarea acestor drepturi, puteti contacta in orice moment Responsabilul buchetto.ro cu protecția datelor prin transmiterea solicitarii dvs prin oricare dintre urmatoarele modalitati:</p>
							<ul>
								<li>prin e-mail la adresa: buchettoro@gmail.com sau</li>
								<li>prin poștă sau curier la adresa: Iani Buzoiani 17 București - cu mentiunea în atenția Responsabilului buchetto.ro cu protecția datelor.</li>
							</ul>
							<p>Poti consulta politica noastra legata de prelucrarea datelor cu caracter personal </p>
							<div class="title">9. Acest site utilizeaza cookie-uri</div>
							<p>Acest site foloseste cookie-uri. Prin acceptarea acestor termeni si conditii va exprimati acordul pentru folosirea cookie-urilor conform Regulamentului (UE) 2016/679. Poti consulta Politica de utilizare Cookie-uri<span> accesand acest link: <a href="https://www.buchetto.ro/cookies">https://buchetto.ro/cookies</a>.</span></p>

						</div>
					</div>
					<div class="checkbox">
						<label style="font-size: 1.5em">
							<input type="checkbox" value="on" name="newsletter">
							<span class="cr"><i class="cr-icon fa fa-check"></i></span>
							<h6>Abonare pentru coupoane sau promoții?</h6>
						</label>
					</div>

					<div class="w-size35" style="margin-right: 5px; display: none;">
						<!-- Button -->
						<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" onclick="tag()">
							Finalizeaza
						</button>
					</div>
					<br>
					@if($product->category_id != 'funerara')
						<div class="container">
							<h4>Puteti adauga si Extraoptiuni:</h4>
							<br>
							<div class="row">

								@foreach($options as $option)
									<div class="col-md-3">
										<div class="block2">
											<div class="block2-img wrap-pic-w of-hidden pos-relative">
												@if(!empty($option->photo->file))
													<img src="{{ $option->photo->file }}" class="similarProductImg"  alt="{{ $option->name }}" style="width: 250px; height: 250px;">
												@endif
											</div>
											<div class="block2-txt p-t-20">
												<input class="form-check-input" type="checkbox" id="inlineCheckbox{{ $option->id }}" value="{{ $option->id }}" name="option[]">
												<label class="form-check-label" for="inlineCheckbox{{ $option->id }}"><strong>{{ $option->name }}</strong></label>
												<span class="block2-price m-text6 p-r-5">
											 {{ $option->price }} Ron
											</span>
												<br>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					@endif
				</div>
				<br><br>
				<iframe src="https://maps.google.com/maps?q=iani%20buzoiani%2017&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>
		</div>
	</section>

</main>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@include('layouts.footer')
<script>
	function paymnt(val){
        if(document.getElementById('card').checked){
            document.getElementById("payment_type").value = 'card';
        }
	}

	function delivery(val){
        let delivery_checkboxes = document.getElementsByClassName('delivery_type');
        	for(let i = 0; i < delivery_checkboxes.length; i++){
        	    if(delivery_checkboxes[i].checked){
                    document.getElementById("delivery_type").value = delivery_checkboxes[i].value;
                    console.log(delivery_checkboxes[i].value);
				}


			}
	}
</script>
<script>
	$(document).ready(function(){
	    $('#apply_coupon').click(function(){
          let coupon = document.getElementById("coupon_val").value;
          let total = document.getElementById("total").innerText;
	        $.ajax({
				url: 'apply-coupon?coupon=' + coupon +'&total=' + total,
				type: "get",
				success: function(result){
                    let data = JSON.parse(result);
                    document.getElementById("coupon").value = data.name;
                    document.getElementById("total").innerHTML = $("#total").text() - data.value;
					swal('Felicitari!', "Couponul de " + data.value +" RON a fost aplicat", "success");
					document.getElementById("hide_coupon").style.display = 'none';
				},
                error: function(result){
                    swal('Woops...', "Coupon inexistent", "error");
				}
			})
		})
	});
</script>
<script>
    $(document).ready(function () {
        $('#checkBtn').click(function() {
            checked = $("input[type=checkbox]:checked").length;

            if(!checked) {
                alert("You must check at least one checkbox.");
                return false;
            }

        });
    });
</script>
<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>

<div class="chat-popup" id="myForm">
	<div class="form-container">
		<a href="/whatsapp-message?product_id={{ $product->id }}" target="_blank">
			<img src="{{ asset('images/icons/whatsapp.png') }}" width="50" height="50">
			WhatsApp
		</a><br><br>
		<a href="sms:+40726688087?body=Buna! Vreau sa plasez comanda pentru produsul cu idul {{ $product->id  }}, ma puteti ajuta?"  target="_blank" style="margin-right: 5px;">
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

<!-- Container Selection -->
<div id="dropDownSelect1"></div>
<div id="dropDownSelect2"></div>
========================-->
<script type="text/javascript" src="fache/vendor/sweetalert/sweetalert.min.js"></script>
@include('layouts.js')
<!--===============================================================================================-->

<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });

    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect2')
    });
</script>
<!--===============================================================================================-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="fache/js/map-custom.js"></script>

</body>
</html>
