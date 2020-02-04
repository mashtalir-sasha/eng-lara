<!DOCTYPE html>
@if (App::isLocale('ru'))
	<html lang="ru">
@elseif (App::isLocale('uk'))
	<html lang="uk">
@endif

<head>
	<meta charset="utf-8">
	<title>{{ trans('main.title') }}</title>
	<meta name="description" content="{{ trans('main.description') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:image" content=""/>
	-->
	<link rel="icon" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<meta name="theme-color" content="#000">

	<link rel="stylesheet" href="css/main.min.css">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PDKW53X');</script>
	<!-- End Google Tag Manager -->
</head>

<body>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDKW53X"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="content">	

		<div id="top"></div>

		<nav class="nav-mobile d-block d-sm-none">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-4">
						@if (App::isLocale('ru'))
							<a href="/" class="nav-mobile__lang">UKR</a>
						@elseif (App::isLocale('uk'))
							<a href="/ru" class="nav-mobile__lang">RUS</a>
						@endif
					</div>
					<div class="col-4">
						<a href="#top" class="nav-mobile__logo anchor">
							<img src="img/logo.png" alt="engineering">
						</a>
					</div>
					<div class="col-4">
						<div class="nav-mobile__link">
							<img src="img/mob-link.svg" alt="engineering">
						</div>
					</div>
				</div>
			</div>
			<div class="nav-mob">
				<ul class="nav-list">
					<li class="nav-list__item"><a href="#brands" class="anchor">{{ trans('main.mnu1') }}</a></li>
					<li class="nav-list__item"><a href="#parts" class="anchor">{{ trans('main.mnu2') }}</a></li>
					<li class="nav-list__item"><a href="#about" class="anchor">{{ trans('main.mnu3') }}</a></li>
					<li class="nav-list__item"><a href="#delivery" class="anchor">{{ trans('main.mnu4') }}</a></li>
					<li class="nav-list__item"><a href="#reviews" class="anchor">{{ trans('main.mnu5') }}</a></li>
					<li class="nav-list__item"><a href="#contacts" class="anchor">{{ trans('main.mnu6') }}</a></li>
				</ul>
				<div class="nav-phone">
					<a href="tel:+{{ preg_replace('~[^0-9]~','',$contact['phone-top']) }}" class="nav-phone__link">{{ $contact['phone-top'] }}</a>
					<a class="nav-phone__ico viber d-block" href="viber://add?number={{ $contact['phone-topviber'] }}"></a>
					<a href="{{ $contact['phone-toptele'] }}" target="_blank" class="nav-phone__ico telegram" style="display: block;"></a>
				</div>
			</div>
		</nav>

		<nav class="nav nav-fixed d-none d-sm-block">
				<div class="container posr">
					<div class="row">
						<div class="col-lg-4 col-md-3 col-sm-2">
							<a href="#top" class="nav-logo anchor">
								<img src="img/logo.png" alt="engineering">
							</a>
						</div>
						<div class="col-lg-8 col-md-9 col-sm-10">
							<div class="row">
								<div class="col">
									<div class="nav-lang">
										@if (App::isLocale('ru'))
											<div class="nav-lang__item active">RUS</div>
											<div class="nav-lang__line"></div>
											<a href="/" class="nav-lang__item">UKR</a>
										@elseif (App::isLocale('uk'))
											<div class="nav-lang__item active">UKR</div>
											<div class="nav-lang__line"></div>
											<a href="/ru" class="nav-lang__item">RUS</a>
										@endif
									</div>
								</div>
								<div class="col">
									<div class="nav-phone">
										<a href="tel:+{{ preg_replace('~[^0-9]~','',$contact['phone-top']) }}" class="nav-phone__link">{{ $contact['phone-top'] }}</a>
										<a class="nav-phone__ico viber d-none d-sm-block" href="viber://chat?number={{ $contact['phone-topviber'] }}"></a>
										<a href="{{ $contact['phone-toptele'] }}" target="_blank" class="nav-phone__ico telegram" style="display: block;"></a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="nav-line"></div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<ul class="nav-list">
										<li class="nav-list__item"><a href="#brands" class="anchor">{{ trans('main.mnu1') }}</a></li>
										<li class="nav-list__item"><a href="#parts" class="anchor">{{ trans('main.mnu2') }}</a></li>
										<li class="nav-list__item"><a href="#about" class="anchor">{{ trans('main.mnu3') }}</a></li>
										<li class="nav-list__item"><a href="#delivery" class="anchor">{{ trans('main.mnu4') }}</a></li>
										<li class="nav-list__item"><a href="#reviews" class="anchor">{{ trans('main.mnu5') }}</a></li>
										<li class="nav-list__item"><a href="#contacts" class="anchor">{{ trans('main.mnu6') }}</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>

		<header class="head">
			<nav class="nav d-none d-sm-block">
				<div class="container posr">
					<div class="nav-bg"></div>
					<div class="row">
						<div class="col-lg-4 col-md-3 col-sm-2">
							<a href="#top" class="nav-logo anchor">
								<img src="img/logo.png" alt="engineering">
							</a>
						</div>
						<div class="col-lg-8 col-md-9 col-sm-10">
							<div class="row">
								<div class="col">
									<div class="nav-lang">
										@if (App::isLocale('ru'))
											<div class="nav-lang__item active">RUS</div>
											<div class="nav-lang__line"></div>
											<a href="/" class="nav-lang__item">UKR</a>
										@elseif (App::isLocale('uk'))
											<div class="nav-lang__item active">UKR</div>
											<div class="nav-lang__line"></div>
											<a href="/ru" class="nav-lang__item">RUS</a>
										@endif
									</div>
								</div>
								<div class="col">
									<div class="nav-phone">
										<a href="tel:+{{ preg_replace('~[^0-9]~','',$contact['phone-top']) }}" class="nav-phone__link">{{ $contact['phone-top'] }}</a>
										<a class="nav-phone__ico viber d-none d-sm-block" href="viber://chat?number={{ $contact['phone-topviber'] }}"></a>
										<a href="{{ $contact['phone-toptele'] }}" target="_blank" class="nav-phone__ico telegram" style="display: block;"></a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="nav-line"></div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<ul class="nav-list">
										<li class="nav-list__item"><a href="#brands" class="anchor">{{ trans('main.mnu1') }}</a></li>
										<li class="nav-list__item"><a href="#parts" class="anchor">{{ trans('main.mnu2') }}</a></li>
										<li class="nav-list__item"><a href="#about" class="anchor">{{ trans('main.mnu3') }}</a></li>
										<li class="nav-list__item"><a href="#delivery" class="anchor">{{ trans('main.mnu4') }}</a></li>
										<li class="nav-list__item"><a href="#reviews" class="anchor">{{ trans('main.mnu5') }}</a></li>
										<li class="nav-list__item"><a href="#contacts" class="anchor">{{ trans('main.mnu6') }}</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-5">
						<div class="head-ttl">
							<div class="head-ttl__ico"></div>
							<h1 class="head-ttl__item">{{ trans('main.head-ttl') }}</h1>
							<a href="javascript:;" data-src="#modal1" class="head-ttl__btn fancybox formLink" data-link="{!! $main['link'] !!}">{{ trans('main.head-btn') }}</a>
						</div>
					</div>
					<div class="col-lg-8 col-md-7">
						<img src="img/blank.gif" data-src="img/head-img.svg" alt="engineering" class="head-img d-none d-sm-block lazy">
					</div>
				</div>
			</div>
			<img src="img/blank.gif" data-src="img/head_bg.jpg" alt="engineering" class="head-img d-block d-sm-none lazy">
			<div class="container">
				<div class="row posr">
					<div class="head-bg"></div>
					<div class="col-lg-8 offset-lg-4 col-md-9 offset-md-3">
						<div class="row">
							<div class="col-md-4 col-6">
								<div class="head-item i1">
									{{ trans('main.head-item1') }}
								</div>
							</div>
							<div class="col-md-4 col-6">
								<div class="head-item i2">
									{{ trans('main.head-item2') }}
								</div>
							</div>
							<div class="col-md-4 col-6">
								<div class="head-item i3">
									{{ trans('main.head-item3') }}
								</div>
							</div>
							<div class="col-md-4 col-6">
								<div class="head-item i4">
									{{ trans('main.head-item4') }}
								</div>
							</div>
							<div class="col-md-4 col-6">
								<div class="head-item i5">
									{{ trans('main.head-item5') }}
								</div>
							</div>
							<div class="col-md-4 col-6">
								<div class="head-item i6">
									{{ trans('main.head-item6') }}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<section class="catalog">
			<div class="container">
				<div class="row">
					<div class="col">
						<h3 class="catalog-ttl scroll">{!! trans('main.catalog-ttl') !!}</h3>
					</div>
				</div>
				<div class="row justify-content-center d-none d-sm-flex">
					@foreach($category as $item)
						<div class="col-md-4 col-sm-6">
							<div class="catalog-item scroll">
								@if (App::isLocale('ru'))
									<p class="catalog-item__name">{!! $item['title'] !!}</p>
								@elseif (App::isLocale('uk'))
									<p class="catalog-item__name">{!! $item['titleUK'] !!}</p>
								@endif
								<img src="img/blank.gif" data-src="{{ $item['img'] }}" alt="engineering" class="catalog-item__img lazy">
								<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="{{ $item['link'] }}">{!! trans('main.catalog-btn') !!}</a>
							</div>
						</div>
					@endforeach
				</div>
				<div class="row d-flex d-sm-none">
					<div class="col">
						<div class="catalog-slider">
							<div class="catalog-slider__slide">
							@foreach($category as $item)
								<div class="catalog-item scroll">
									@if (App::isLocale('ru'))
										<p class="catalog-item__name">{!! $item['title'] !!}</p>
									@elseif (App::isLocale('uk'))
										<p class="catalog-item__name">{!! $item['titleUK'] !!}</p>
									@endif
									<img src="img/blank.gif" data-src="{{ $item['img'] }}" alt="engineering" class="catalog-item__img lazy">
									<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="{{ $item['link'] }}">{!! trans('main.catalog-btn') !!}</a>
								</div>
							
								@if($loop->iteration == 2)
									</div>
									<div class="catalog-slider__slide">
								@endif
								@if($loop->iteration == 4)
									</div>
									<div class="catalog-slider__slide">
								@endif
								@if($loop->iteration == 6)
									</div>
									<div class="catalog-slider__slide">
								@endif
								@if($loop->iteration == 8)
									</div>
									<div class="catalog-slider__slide">
								@endif
								@if($loop->last)
									</div>
								@endif
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="brands" class="brands">
			<div class="container">
				<div class="row">
					<div class="col">
						<h3 class="brands-ttl scroll">{{ trans('main.brands-ttl') }}</h3>
					</div>
				</div>
				<div class="row justify-content-center">
					@foreach ($brand as $item)
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="brands-item"><img src="img/blank.gif" data-src="{{ $item['img'] }}" alt="engineering" class="lazy"></div>
							<a href="javascript:;" data-src="#modal2" class="brands-item__btn fancybox formLink" data-link="{{ $item['link'] }}">{{ trans('main.brands-btn') }}</a>
						</div>
					@endforeach
				</div>
			</div>
		</section>

		<section id="parts" class="parts">
			<div class="container">
				<div class="row">
					<div class="col">
						<h3 class="parts-ttl scroll">{{ trans('main.parts-ttl') }}</h3>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<ul class="parts-list">
							@foreach ($brand as $item)
								<li class="parts-list__item">{{ $item['title'] }}</li>
							@endforeach
						</ul>
					</div>
				</div>
				@foreach ($brand as $item)
					<div class="parts-tab">
						<div class="row justify-content-center d-none d-sm-flex">
							@foreach ($parts as $part)
							@if($part['brand_id'] == $item['id'])
								<div class="col-lg-3 col-md-4 col-sm-6">
									<div class="parts-item scroll">
										<img src="img/blank.gif" data-src="{{ $part['img'] }}" alt="engineering" class="parts-item__img lazy">
										@if (App::isLocale('ru'))
											<p class="parts-item__name">{!! $part['name'] !!}</p>
										@elseif (App::isLocale('uk'))
											<p class="parts-item__name">{!! $part['nameUK'] !!}</p>
										@endif
										<p class="parts-item__id">{{ $part['numb'] }}</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="{{ $item['linkCat'] }}">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
							@endif
							@endforeach
						</div>
						<div class="row d-flex d-sm-none">
							<div class="col">
								<div class="parts-slider">
									<div class="parts-slider__slide">
									@foreach ($parts as $part)
									@if($part['brand_id'] == $item['id'])
										<div class="parts-item animated">
											<img src="img/blank.gif" data-src="{{ $part['img'] }}" alt="engineering" class="parts-item__img lazy">
											@if (App::isLocale('ru'))
												<p class="parts-item__name">{!! $part['name'] !!}</p>
											@elseif (App::isLocale('uk'))
												<p class="parts-item__name">{!! $part['nameUK'] !!}</p>
											@endif
											<p class="parts-item__id">{{ $part['numb'] }}</p>
											<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="{{ $item['linkCat'] }}">{{ trans('main.parts-btn') }}</a>
										</div>
									@endif
									
									@if($loop->iteration == 2 && !$loop->last)
										</div>
										<div class="parts-slider__slide">
									@endif
									@if($loop->iteration == 4 && !$loop->last)
										</div>
										<div class="parts-slider__slide">
									@endif
									@if($loop->iteration == 6 && !$loop->last)
										</div>
										<div class="parts-slider__slide">
									@endif
									@if($loop->iteration == 8 && !$loop->last)
										</div>
										<div class="parts-slider__slide">
									@endif
									@if($loop->iteration == 10 && !$loop->last)
										</div>
										<div class="parts-slider__slide">
									@endif
									@if($loop->iteration == 12 && !$loop->last)
										</div>
										<div class="parts-slider__slide">
									@endif
									@if($loop->iteration == 14 && !$loop->last)
										</div>
										<div class="parts-slider__slide">
									@endif
									@if($loop->iteration == 16 && !$loop->last)
										</div>
										<div class="parts-slider__slide">
									@endif
									@if($loop->iteration == 18 && !$loop->last)
										</div>
										<div class="parts-slider__slide">
									@endif
									@if($loop->iteration == 20 && !$loop->last)
										</div>
										<div class="parts-slider__slide">
									@endif
									@if($loop->iteration == 22 && !$loop->last)
										</div>
										<div class="parts-slider__slide">
									@endif
									@if($loop->iteration == 24 && !$loop->last)
										</div>
										<div class="parts-slider__slide">
									@endif
									@if($loop->iteration == 26 && !$loop->last)
										</div>
										<div class="parts-slider__slide">
									@endif
									@if($loop->iteration == 28 && !$loop->last)
										</div>
										<div class="parts-slider__slide">
									@endif
									@if($loop->iteration == 30 && !$loop->last)
										</div>
										<div class="parts-slider__slide">
									@endif
									@if($loop->last)
										</div>
									@endif	
									@endforeach				
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</section>

		<section class="selection">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="selection-block">
							<h3 class="selection-block__ttl scroll">{{ trans('main.selection-ttl') }}</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h4 class="selection-form__ttl scroll">{!! trans('main.selection-subttl') !!}</h4>
					</div>
					<div class="col-md-8">
						<form action="mail.php" method="POST" class="form_check selection-form">
							<input type="hidden" name="title" value="Подбор запчастей">
							<div class="selection-form__block">
								<div class="rline">
									<input type="text" name="part" class="selection-form__input" placeholder="{{ trans('main.part') }}">
								</div>
								<div class="rline">
									<input type="text" name="name" class="selection-form__input rfield" placeholder="{{ trans('main.name') }}">
								</div>
							</div>
							<div class="selection-form__block">
								<div class="rline">
									<input type="text" name="brand" class="selection-form__input" placeholder="{{ trans('main.brand') }}">
								</div>
								<div class="rline">
									<input type="text" name="phone" class="selection-form__input phonefield rfield" placeholder="{{ trans('main.phone') }}">
								</div>
							</div>
							<div class="selection-form__block">
								<button type="submit" class="btnsubmit selection-form__btn">{{ trans('main.selection-btn') }}</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<section id="about" class="about">
			<div class="container">
				<div class="row d-flex d-md-none">
					<div class="col">
						<h3 class="about-ttl scroll">{{ trans('main.about-ttl') }}</h3>
					</div>
				</div>
				<div class="row row-xs">
					<img src="img/blank.gif" data-src="img/about_bg.jpg" alt="engineering" class="about-img lazy">
				</div>
				<div class="row">
					<div class="col-lg-8 offset-lg-3 col-md-10 offset-md-1">
						<div class="about-block">
							<div class="about-half">
								<img src="img/blank.gif" data-src="img/about-ico1.svg" alt="engineering" class="about-half__img lazy">
								<p class="about-half__txt">{!! trans('main.about-item1') !!}</p>
							</div>
							<div class="about-half">
								<img src="img/blank.gif" data-src="img/about-ico2.svg" alt="engineering" class="about-half__img lazy">
								<p class="about-half__txt">{!! trans('main.about-item2') !!}</p>
							</div>
							<div class="about-half">
								<img src="img/blank.gif" data-src="img/about-ico3.svg" alt="engineering" class="about-half__img lazy">
								<p class="about-half__txt">{!! trans('main.about-item3') !!}</p>
							</div>
							<div class="about-half">
								<img src="img/blank.gif" data-src="img/about-ico4.svg" alt="engineering" class="about-half__img lazy">
								<p class="about-half__txt">{!! trans('main.about-item4') !!}</p>
							</div>
							<div class="about-half">
								<img src="img/blank.gif" data-src="img/about-ico5.svg" alt="engineering" class="about-half__img lazy">
								<p class="about-half__txt">{!! trans('main.about-item5') !!}</p>
							</div>
							<div class="about-half">
								<img src="img/blank.gif" data-src="img/about-ico6.svg" alt="engineering" class="about-half__img lazy">
								<p class="about-half__txt">{!! trans('main.about-item6') !!}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<h3 class="about-ttl scroll d-none d-md-block">{{ trans('main.about-ttl') }}</h3>
						<p class="about-txt">{!! trans('main.about-txt1') !!}</p>
						<p class="about-txt">{!! trans('main.about-txt2') !!}</p>
						<p class="about-txt">{!! trans('main.about-txt3') !!}</p>
						<p class="about-txt">{!! trans('main.about-txt4') !!}</p>
					</div>
					<div class="col-md-5">
						<!-- <iframe class="about-video" src="https://www.youtube.com/embed/k6XJHY6TyNI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
						<video class="about-video video" controls loop preload="none" poster="img/about-video.jpg">
							<source src="video/1.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
		</section>

		<section class="defect">
			<div class="container">
				<img src="img/blank.gif" data-src="img/defect-img.png" alt="engineering" class="defect-img lazy">
				<div class="row">
					<div class="col-md-4 order-md-2 col-sm-6">
						<h4 class="defect-ttl scroll">{{ trans('main.defect-ttl') }}</h4>
						<p class="defect-txt scroll">{{ trans('main.defect-txt') }}</p>
					</div>
					<div class="col-sm-6 d-block d-md-none">
						<!-- <iframe class="defect-video" src="https://www.youtube.com/embed/xK8vTSvyr-g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
						<video class="defect-video video" controls loop preload="none" poster="img/about-video2.jpg">
							<source src="video/2.mp4" type="video/mp4">
						</video>
					</div>
					<div class="col-md-5 offset-md-1 order-md-1">
						<!-- <iframe class="defect-video d-none d-md-block" src="https://www.youtube.com/embed/xK8vTSvyr-g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
						<video class="defect-video video d-none d-md-block" controls loop preload="none" poster="img/about-video2.jpg">
							<source src="video/2.mp4" type="video/mp4">
						</video>
						<form action="mail.php" method="POST" class="form_check defect-form">
							<input type="hidden" name="title" value="Выезд на дефектовку">
							<div class="defect-form__block">
								<div class="rline">
									<input type="text" name="city" class="defect-form__input" placeholder="{{ trans('main.city') }}">
								</div>
								<div class="rline">
									<input type="text" name="name" class="defect-form__input rfield" placeholder="{{ trans('main.name') }}">
								</div>
							</div>
							<div class="defect-form__block">
								<div class="rline">
									<input type="text" name="phone" class="defect-form__input phonefield rfield" placeholder="{{ trans('main.phone') }}">
								</div>
								<button type="submit" class="btnsubmit defect-form__btn">{{ trans('main.defect-btn') }}</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<section id="delivery" class="delivery">
			<div class="container">
				<div class="row d-flex d-md-none">
					<div class="col">
						<h3 class="delivery-ttl scroll">{!! trans('main.delivery-ttl') !!}</h3>
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col-md-5">
						<img src="img/blank.gif" data-src="img/delivery-img.png" alt="engineering" class="delivery-img lazy">
					</div>
					<div class="col-md-7">
						<h3 class="delivery-ttl scroll d-none d-md-block">{!! trans('main.delivery-ttl') !!}</h3>
						<div class="delivery-block">
							<p class="delivery-block__item">{{ trans('main.delivery-txt1') }}</p>
							<p class="delivery-block__item">{{ trans('main.delivery-txt2') }}</p>
						</div>
						<div class="delivery-images scroll">
							<img src="img/blank.gif" data-src="img/delivery-ico1.png" alt="engineering" class="delivery-images__img lazy">
							<img src="img/blank.gif" data-src="img/delivery-ico2.png" alt="engineering" class="delivery-images__img lazy">
							<img src="img/blank.gif" data-src="img/delivery-ico3.png" alt="engineering" class="delivery-images__img lazy">
							<img src="img/blank.gif" data-src="img/delivery-ico4.png" alt="engineering" class="delivery-images__img lazy">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="reviews" class="reviews">
			<div class="container">
				<div class="row">
					<div class="col">
						<h3 class="reviews-ttl scroll">{{ trans('main.reviews-ttl') }}</h3>
					</div>
				</div>
			</div>
			<div class="container reviews-bg">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<div class="reviews-slider">
							@foreach ($review as $item)
								<div class="reviews-item">
									<h4 class="reviews-item__name">{{ $item['name'] }}</h4>
									<p class="reviews-item__city">{{ $item['city'] }}</p>
									<p class="reviews-item__txt">{!! $item['text'] !!}</p>
									<a href="#rev{{ $item['id'] }}" class="reviews-item__link fancybox">{{ trans('main.reviews-link') }}</a>
									<div class="d-none">
										<div id="rev{{ $item['id'] }}" class="reviews-modal">
											<h4 class="reviews-item__name">{{ $item['name'] }}</h4>
											<p class="reviews-item__city">{{ $item['city'] }}</p>
											<p class="reviews-item__txt">{!! $item['text'] !!}</p>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer id="contacts" class="foot">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6">
						<h3 class="foot-ttl scroll">{{ trans('main.foot-ttl') }}</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="foot-block">
									<h4 class="foot-block__subttl">{{ trans('main.foot-subttl1') }}</h4>
									@if (App::isLocale('ru'))
										<p class="foot-block__addr">{!! $contact['addr'] !!}</p>
									@elseif (App::isLocale('uk'))
										<p class="foot-block__addr">{!! $contact['addrUK'] !!}</p>
									@endif
									@if (App::isLocale('ru'))
										<p class="foot-block__addr">{!! $contact['time'] !!}</p>
									@elseif (App::isLocale('uk'))
										<p class="foot-block__addr">{!! $contact['timeUK'] !!}</p>
									@endif
								</div>
							</div>
							<div class="col-md-6">
								<div class="foot-block">
									<h4 class="foot-block__subttl">{{ trans('main.foot-subttl2') }}</h4>
									<a href="mailto:{!! $contact['email'] !!}" class="foot-block__eml">{!! $contact['email'] !!}</a>
									@if (isset($contact['email2']))
										<a href="mailto:{!! $contact['email2'] !!}" class="foot-block__eml">{!! $contact['email2'] !!}</a>
									@endif
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="foot-block">
									<h4 class="foot-block__subttl height">{{ trans('main.foot-subttl3') }}</h4>
									<div class="foot-block__phone">
										<a class="nav-phone__ico viber d-block d-sm-none" href="viber://add?number={{ $contact['phone-topviber'] }}"></a>
										<a class="nav-phone__ico viber d-none d-sm-block" href="viber://chat?number={{ $contact['phone-topviber'] }}"></a>
										<a href="{{ $contact['phone-toptele'] }}" target="_blank" class="nav-phone__ico telegram" style="display: block;"></a>
										<a href="tel:+{{ preg_replace('~[^0-9]~','',$contact['phone-top']) }}" class="foot-block__link">{{ $contact['phone-top'] }}</a>
									</div>
									@if (isset($contact['phone1']))
										<div class="foot-block__phone">
											<a class="nav-phone__ico viber d-block d-sm-none" href="viber://add?number={{ $contact['phone1viber'] }}"></a>
											<a class="nav-phone__ico viber d-none d-sm-block" href="viber://chat?number={{ $contact['phone1viber'] }}"></a>
											<a href="{{ $contact['phone1tele'] }}" target="_blank" class="nav-phone__ico telegram" style="display: block;"></a>
											<a href="tel:+{{ preg_replace('~[^0-9]~','',$contact['phone1']) }}" class="foot-block__link">{{ $contact['phone1'] }}</a>
										</div>
									@endif
									@if (isset($contact['phone2']))
										<div class="foot-block__phone">
											<a class="nav-phone__ico viber d-block d-sm-none" href="viber://add?number={{ $contact['phone2viber'] }}"></a>
											<a class="nav-phone__ico viber d-none d-sm-block" href="viber://chat?number={{ $contact['phone2viber'] }}"></a>
											<a href="{{ $contact['phone2tele'] }}" target="_blank" class="nav-phone__ico telegram" style="display: block;"></a>
											<a href="tel:+{{ preg_replace('~[^0-9]~','',$contact['phone2']) }}" class="foot-block__link">{{ $contact['phone2'] }}</a>
										</div>
									@endif
								</div>
							</div>
							<div class="col-md-6">
								<div class="foot-block">
									<h4 class="foot-block__subttl height">{{ trans('main.foot-subttl4') }}</h4>
									@if (isset($contact['facebook']))
										<a href="{!! $contact['facebook'] !!}" target="_blank" class="foot-block__soc fb">facebook</a>
									@endif
									<!-- <a href="#" class="foot-block__soc in">instagram</a> -->
									@if (isset($contact['youtube']))
										<a href="{!! $contact['youtube'] !!}" target="_blank" class="foot-block__soc yt">youtube</a>
									@endif
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 offset-lg-1 col-md-5 offset-md-1">
						<div class="foot-map">
							<iframe src="{!! $contact['map'] !!}" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						</div>
						<a href="javascript:;" data-src="#modal3" class="foot-btn fancybox">{{ trans('main.foot-btn') }}</a>
					</div>
				</div>
				<div class="row align-items-center foot-line">
					<div class="col">
						<img src="img/blank.gif" data-src="img/logo.png" alt="engineering" class="foot-logo lazy">
					</div>
					<div class="col">
						<a href="https://wamp.com.ua/" target="_blank" class="dev">
							<span>{{ trans('main.dev') }}</span>
							<img src="img/blank.gif" data-src="img/wamp.png" alt="engineering" class="lazy">
						</a>
					</div>
				</div>
			</div>
		</footer>

		<div class="d-none">
			<div id="thn" class="thn">
				<h3>{{ trans('main.thn-ttl') }}</h3>
				<p>{{ trans('main.thn-txt') }}</p>
			</div>
			
			<div id="modal1" class="modal">
				<div class="modal-img">
					<img src="img/blank.gif" data-src="img/modal1_bg.jpg" alt="engineering" class="lazy">
				</div>
				<h3 class="modal-ttl">{{ trans('main.modal1-ttl') }}</h3>
				<form action="mail.php" method="POST" class="form_check modal-form">
					<input type="hidden" name="title" value="Скачать полный перечень изделий">
					<input type="hidden" name="link">
					<div class="rline">
						<input type="text" name="name" class="modal-form__input rfield" placeholder="{{ trans('main.name') }}">
					</div>
					<div class="rline">
						<input type="text" name="phone" class="modal-form__input phonefield rfield" placeholder="{{ trans('main.phone') }}">
					</div>
					<div class="rline">
						<button type="submit" class="btnsubmit modal-form__btn">{{ trans('main.modal1-btn') }}</button>
					</div>
				</form>
			</div>

			<div id="modal2" class="modal modal_second">
				<div class="modal-img">
					<img src="img/blank.gif" data-src="img/modal4-img.png" alt="engineering" style="max-width: 368px" class="lazy">
				</div>
				<form action="mail.php" method="POST" class="form_check modal-form">
					<h3 class="modal-ttl">{{ trans('main.modal2-ttl') }}</h3>
					<input type="hidden" name="title" value="Скачать прайс">
					<input type="hidden" name="link">
					<div class="rline">
						<input type="text" name="name" class="modal-form__input rfield" placeholder="{{ trans('main.name') }}">
					</div>
					<div class="rline">
						<input type="text" name="phone" class="modal-form__input phonefield rfield" placeholder="{{ trans('main.phone') }}">
					</div>
					<div class="rline">
						<button type="submit" class="btnsubmit modal-form__btn">{{ trans('main.modal2-btn') }}</button>
					</div>
				</form>
			</div>

			<div id="modal4" class="modal modal_second">
				<div class="modal-img">
					<img src="img/blank.gif" data-src="img/modal2-img.png" alt="engineering" class="lazy">
				</div>
				<form action="mail.php" method="POST" class="form_check modal-form">
					<h3 class="modal-ttl">{{ trans('main.modal4-ttl') }}</h3>
					<input type="hidden" name="title" value="Скачать прайс">
					<input type="hidden" name="link">
					<div class="rline">
						<input type="text" name="name" class="modal-form__input rfield" placeholder="{{ trans('main.name') }}">
					</div>
					<div class="rline">
						<input type="text" name="phone" class="modal-form__input phonefield rfield" placeholder="{{ trans('main.phone') }}">
					</div>
					<div class="rline">
						<button type="submit" class="btnsubmit modal-form__btn">{{ trans('main.modal2-btn') }}</button>
					</div>
				</form>
			</div>

			<div id="modal3" class="modal modal_second">
				<div class="modal-img">
					<img src="img/modal3-img.png" alt="engineering">
				</div>
				<form action="mail.php" method="POST" class="form_check modal-form">
					<h3 class="modal-ttl">{{ trans('main.modal3-ttl') }}</h3>
					<input type="hidden" name="title" value="Заказать обратный звонок">
					<div class="rline">
						<input type="text" name="name" class="modal-form__input rfield" placeholder="{{ trans('main.name') }}">
					</div>
					<div class="rline">
						<input type="text" name="phone" class="modal-form__input phonefield rfield" placeholder="{{ trans('main.phone') }}">
					</div>
					<div class="rline">
						<button type="submit" class="btnsubmit modal-form__btn">{{ trans('main.modal3-btn') }}</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<script src="js/scripts.min.js"></script>
	<script> document.oncontextmenu = cmenu; function cmenu() { return false; } </script>

</body>
</html>