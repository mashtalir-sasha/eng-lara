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
</head>

<body>

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
					<a href="tel:+380676411636" class="nav-phone__link">+38 067 641 16 36</a>
					<a class="nav-phone__ico viber d-block" href="viber://add?number=380676411636"></a>
					<a href="https://t.me/BoikoY" target="_blank" class="nav-phone__ico telegram" style="display: block;"></a>
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
										<a href="tel:+380676411636" class="nav-phone__link">+38 067 641 16 36</a>
										<a class="nav-phone__ico viber d-none d-sm-block" href="viber://chat?number=+380676411636"></a>
										<a href="https://t.me/BoikoY" target="_blank" class="nav-phone__ico telegram" style="display: block;"></a>
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
										<a href="tel:+380676411636" class="nav-phone__link">+38 067 641 16 36</a>
										<a class="nav-phone__ico viber d-none d-sm-block" href="viber://chat?number=+380676411636"></a>
										<a href="https://t.me/BoikoY" target="_blank" class="nav-phone__ico telegram" style="display: block;"></a>
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
							<a href="javascript:;" data-src="#modal1" class="head-ttl__btn fancybox formLink" data-link="https://drive.google.com/drive/u/1/folders/1JkF7q4Tjww45DkeGffwtpQsZXV_oeJ_e">{{ trans('main.head-btn') }}</a>
						</div>
					</div>
					<div class="col-lg-8 col-md-7">
						<img src="img/head-img.svg" alt="engineering" class="head-img d-none d-sm-block">
					</div>
				</div>
			</div>
			<img src="img/head_bg.jpg" alt="engineering" class="head-img d-block d-sm-none">
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
					<div class="col-md-4 col-sm-6">
						<div class="catalog-item scroll">
							<p class="catalog-item__name">{!! trans('main.catalog-item1') !!}</p>
							<img src="img/catalog1.png" alt="engineering" class="catalog-item__img">
							<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1ZRigsBRXob1YGbgwaJybVzD9b6d6Qb9f">{!! trans('main.catalog-btn') !!}</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="catalog-item scroll">
							<p class="catalog-item__name">{!! trans('main.catalog-item2') !!}</p>
							<img src="img/catalog2.png" alt="engineering" class="catalog-item__img">
							<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=14kul11QT0LCPxFMcVHZOVhKKbjFqe8h2">{!! trans('main.catalog-btn') !!}</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="catalog-item scroll">
							<p class="catalog-item__name">{!! trans('main.catalog-item3') !!}</p>
							<img src="img/catalog3.png" alt="engineering" class="catalog-item__img">
							<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1xnmfROkosZXXrY8gILi23bj7csrlEvOa">{!! trans('main.catalog-btn') !!}</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="catalog-item scroll">
							<p class="catalog-item__name">{!! trans('main.catalog-item4') !!}</p>
							<img src="img/catalog4.png" alt="engineering" class="catalog-item__img">
							<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1eoEGxE9sLGa5x0-mTGC9e9nv_LaikyKk">{!! trans('main.catalog-btn') !!}</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="catalog-item scroll">
							<p class="catalog-item__name">{!! trans('main.catalog-item5') !!}</p>
							<img src="img/catalog5.png" alt="engineering" class="catalog-item__img">
							<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1bmLFQ1ClDIfwnHCh1TpThJ-9wFRS6BzZ">{!! trans('main.catalog-btn') !!}</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="catalog-item scroll">
							<p class="catalog-item__name">{!! trans('main.catalog-item6') !!}</p>
							<img src="img/catalog6.png" alt="engineering" class="catalog-item__img">
							<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1AIfvY3r6yF4_S2-LMCqm7UB9U8eSR6ob">{!! trans('main.catalog-btn') !!}</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="catalog-item scroll">
							<p class="catalog-item__name">{!! trans('main.catalog-item7') !!}</p>
							<img src="img/catalog7.png" alt="engineering" class="catalog-item__img">
							<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1hSzQAZ1wk9PxKfkXunElswN4uNbji4ky">{!! trans('main.catalog-btn') !!}</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="catalog-item scroll">
							<p class="catalog-item__name">{!! trans('main.catalog-item8') !!}</p>
							<img src="img/catalog8.png" alt="engineering" class="catalog-item__img">
							<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=12X84Q38jCPrzGzTZ9fPAt0xwI65qX-4B">{!! trans('main.catalog-btn') !!}</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="catalog-item scroll">
							<p class="catalog-item__name">{!! trans('main.catalog-item9') !!}</p>
							<img src="img/catalog9.png" alt="engineering" class="catalog-item__img">
							<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1HeaakF0sMVtrtht_beedjgfuAl7NBOPX">{!! trans('main.catalog-btn') !!}</a>
						</div>
					</div>
				</div>
				<div class="row d-flex d-sm-none">
					<div class="col">
						<div class="catalog-slider">
							<div class="catalog-slider__slide">
								<div class="catalog-item scroll">
									<p class="catalog-item__name">{!! trans('main.catalog-item1') !!}</p>
									<img src="img/catalog1.png" alt="engineering" class="catalog-item__img">
									<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1ZRigsBRXob1YGbgwaJybVzD9b6d6Qb9f">{!! trans('main.catalog-btn') !!}</a>
								</div>
								<div class="catalog-item scroll">
									<p class="catalog-item__name">{!! trans('main.catalog-item2') !!}</p>
									<img src="img/catalog2.png" alt="engineering" class="catalog-item__img">
									<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=14kul11QT0LCPxFMcVHZOVhKKbjFqe8h2">{!! trans('main.catalog-btn') !!}</a>
								</div>
							</div>
							<div class="catalog-slider__slide">
								<div class="catalog-item scroll">
									<p class="catalog-item__name">{!! trans('main.catalog-item3') !!}</p>
									<img src="img/catalog3.png" alt="engineering" class="catalog-item__img">
									<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1xnmfROkosZXXrY8gILi23bj7csrlEvOa">{!! trans('main.catalog-btn') !!}</a>
								</div>
								<div class="catalog-item scroll">
									<p class="catalog-item__name">{!! trans('main.catalog-item4') !!}</p>
									<img src="img/catalog4.png" alt="engineering" class="catalog-item__img">
									<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1eoEGxE9sLGa5x0-mTGC9e9nv_LaikyKk">{!! trans('main.catalog-btn') !!}</a>
								</div>
							</div>
							<div class="catalog-slider__slide">
								<div class="catalog-item scroll">
									<p class="catalog-item__name">{!! trans('main.catalog-item5') !!}</p>
									<img src="img/catalog5.png" alt="engineering" class="catalog-item__img">
									<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1bmLFQ1ClDIfwnHCh1TpThJ-9wFRS6BzZ">{!! trans('main.catalog-btn') !!}</a>
								</div>
								<div class="catalog-item scroll">
									<p class="catalog-item__name">{!! trans('main.catalog-item6') !!}</p>
									<img src="img/catalog6.png" alt="engineering" class="catalog-item__img">
									<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1AIfvY3r6yF4_S2-LMCqm7UB9U8eSR6ob">{!! trans('main.catalog-btn') !!}</a>
								</div>
							</div>
							<div class="catalog-slider__slide">
								<div class="catalog-item scroll">
									<p class="catalog-item__name">{!! trans('main.catalog-item7') !!}</p>
									<img src="img/catalog7.png" alt="engineering" class="catalog-item__img">
									<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1hSzQAZ1wk9PxKfkXunElswN4uNbji4ky">{!! trans('main.catalog-btn') !!}</a>
								</div>
								<div class="catalog-item scroll">
									<p class="catalog-item__name">{!! trans('main.catalog-item8') !!}</p>
									<img src="img/catalog8.png" alt="engineering" class="catalog-item__img">
									<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=12X84Q38jCPrzGzTZ9fPAt0xwI65qX-4B">{!! trans('main.catalog-btn') !!}</a>
								</div>
							</div>
							<div class="catalog-slider__slide">
								<div class="catalog-item scroll">
									<p class="catalog-item__name">{!! trans('main.catalog-item9') !!}</p>
									<img src="img/catalog9.png" alt="engineering" class="catalog-item__img">
									<a href="javascript:;" data-src="#modal2" class="catalog-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1HeaakF0sMVtrtht_beedjgfuAl7NBOPX">{!! trans('main.catalog-btn') !!}</a>
								</div>
							</div>
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
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="brands-item"><img src="img/brand1.png" alt="engineering"></div>
						<a href="javascript:;" data-src="#modal2" class="brands-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.brands-btn') }}</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="brands-item"><img src="img/brand2.png" alt="engineering"></div>
						<a href="javascript:;" data-src="#modal2" class="brands-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.brands-btn') }}</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="brands-item"><img src="img/brand3.png" alt="engineering"></div>
						<a href="javascript:;" data-src="#modal2" class="brands-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.brands-btn') }}</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="brands-item"><img src="img/brand4.png" alt="engineering"></div>
						<a href="javascript:;" data-src="#modal2" class="brands-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.brands-btn') }}</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="brands-item"><img src="img/brand5.png" alt="engineering"></div>
						<a href="javascript:;" data-src="#modal2" class="brands-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.brands-btn') }}</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="brands-item"><img src="img/brand6.png" alt="engineering"></div>
						<a href="javascript:;" data-src="#modal2" class="brands-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.brands-btn') }}</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="brands-item"><img src="img/brand7.png" alt="engineering"></div>
						<a href="javascript:;" data-src="#modal2" class="brands-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.brands-btn') }}</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="brands-item"><img src="img/brand8.png" alt="engineering"></div>
						<a href="javascript:;" data-src="#modal2" class="brands-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.brands-btn') }}</a>
					</div>
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
							<li class="parts-list__item active">HORSCH</li>
							<li class="parts-list__item">LEMKEN</li>
							<li class="parts-list__item">CASE</li>
							<li class="parts-list__item">Great Plains</li>
							<li class="parts-list__item">Gaspardo</li>
							<li class="parts-list__item">Gregoire Besson</li>
							<li class="parts-list__item">Kverneland</li>
							<li class="parts-list__item">Vaderstad</li>
						</ul>
					</div>
				</div>
				<div class="parts-tab active">
					<div class="row justify-content-center d-none d-sm-flex">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/1.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item1') }}</p>
								<p class="parts-item__id">00346124</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/2.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2') }}</p>
								<p class="parts-item__id">00346124</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/3.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3') }}</p>
								<p class="parts-item__id">24116900 / 241167000</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/4.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4') }}</p>
								<p class="parts-item__id">00311069</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/5.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5') }}</p>
								<p class="parts-item__id">34060836</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/6.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6') }}</p>
								<p class="parts-item__id">00608117</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/7.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7') }}</p>
								<p class="parts-item__id">00180006</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/8.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item8') }}</p>
								<p class="parts-item__id">00310101</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/9.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item9') }}</p>
								<p class="parts-item__id">00310156</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/10.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item10') }}</p>
								<p class="parts-item__id">28041101</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/11.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item11') }}</p>
								<p class="parts-item__id">23247400</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/12.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item12') }}</p>
								<p class="parts-item__id">00240199</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/13.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item13') }}</p>
								<p class="parts-item__id">23044003 (23044015)</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/14.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item14') }}</p>
								<p class="parts-item__id">23010201</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/15.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item15') }}</p>
								<p class="parts-item__id">28071305</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/16.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item16') }}</p>
								<p class="parts-item__id">28077800</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/17.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item17') }}</p>
								<p class="parts-item__id">28071300 (28085600)</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/18.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item18') }}</p>
								<p class="parts-item__id">23250303</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/19.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item19') }}</p>
								<p class="parts-item__id">23240110</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/20.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item20') }}</p>
								<p class="parts-item__id">23010202</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/21.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item21') }}</p>
								<p class="parts-item__id">00360217</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/22.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item22') }}</p>
								<p class="parts-item__id">00330198</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/23.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item23') }}</p>
								<p class="parts-item__id">00310658</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts1/24.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item24') }}</p>
								<p class="parts-item__id">00310262</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
					</div>
					<div class="row d-flex d-sm-none">
						<div class="col">
							<div class="parts-slider">
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts1/1.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item1') }}</p>
										<p class="parts-item__id">00346124</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
									<div class="parts-item animated">
										<img src="img/parts1/2.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2') }}</p>
										<p class="parts-item__id">00346124</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts1/3.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3') }}</p>
										<p class="parts-item__id">24116900 / 241167000</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
									<div class="parts-item animated">
										<img src="img/parts1/4.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4') }}</p>
										<p class="parts-item__id">00311069</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts1/5.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5') }}</p>
										<p class="parts-item__id">34060836</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
									<div class="parts-item animated">
										<img src="img/parts1/6.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6') }}</p>
										<p class="parts-item__id">00608117</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts1/7.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7') }}</p>
										<p class="parts-item__id">00180006</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
									<div class="parts-item animated">
										<img src="img/parts1/8.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item8') }}</p>
										<p class="parts-item__id">00310101</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts1/9.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item9') }}</p>
										<p class="parts-item__id">00310156</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
									<div class="parts-item animated">
										<img src="img/parts1/10.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item10') }}</p>
										<p class="parts-item__id">28041101</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts1/11.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item11') }}</p>
										<p class="parts-item__id">23247400</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
									<div class="parts-item animated">
										<img src="img/parts1/12.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item12') }}</p>
										<p class="parts-item__id">00240199</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts1/13.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item13') }}</p>
										<p class="parts-item__id">23044003 (23044015)</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
									<div class="parts-item animated">
										<img src="img/parts1/14.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item14') }}</p>
										<p class="parts-item__id">23010201</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts1/15.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item15') }}</p>
										<p class="parts-item__id">28071305</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
									<div class="parts-item animated">
										<img src="img/parts1/16.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item16') }}</p>
										<p class="parts-item__id">28077800</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts1/17.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item17') }}</p>
										<p class="parts-item__id">28071300 (28085600)</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
									<div class="parts-item animated">
										<img src="img/parts1/18.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item18') }}</p>
										<p class="parts-item__id">23250303</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts1/19.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item19') }}</p>
										<p class="parts-item__id">23240110</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
									<div class="parts-item animated">
										<img src="img/parts1/20.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item20') }}</p>
										<p class="parts-item__id">23010202</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts1/21.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item21') }}</p>
										<p class="parts-item__id">00360217</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
									<div class="parts-item animated">
										<img src="img/parts1/22.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item22') }}</p>
										<p class="parts-item__id">00330198</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts1/23.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item23') }}</p>
										<p class="parts-item__id">00310658</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
									<div class="parts-item animated">
										<img src="img/parts1/24.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item24') }}</p>
										<p class="parts-item__id">00310262</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1I9lbRV16WwKoF8_Ap4yc871nRrRbVf5e">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="parts-tab">
					<div class="row justify-content-center d-none d-sm-flex">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/1.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-1') }}</p>
								<p class="parts-item__id">3028962</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/2.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-2') }}</p>
								<p class="parts-item__id">3051327</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/3.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-3') }}</p>
								<p class="parts-item__id">3238301</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/4.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-4') }}</p>
								<p class="parts-item__id">3352230</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/5.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-5') }}</p>
								<p class="parts-item__id">3364151-3364150</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/6.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-6') }}</p>
								<p class="parts-item__id">3401900</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/7.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-7') }}</p>
								<p class="parts-item__id">3411508</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/8.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-8') }}</p>
								<p class="parts-item__id">3444043</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/9.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-9') }}</p>
								<p class="parts-item__id">3451000</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/10.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-10') }}</p>
								<p class="parts-item__id">3470600</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/11.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-11') }}</p>
								<p class="parts-item__id">3470650</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/12.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-12') }}</p>
								<p class="parts-item__id">3470860</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/13.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-13') }}</p>
								<p class="parts-item__id">3490467</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/14.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-14') }}</p>
								<p class="parts-item__id">3576002</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/15.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-15') }}</p>
								<p class="parts-item__id">4128103</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/16.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-16') }}</p>
								<p class="parts-item__id">4128119</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/17.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-17') }}</p>
								<p class="parts-item__id">4570830</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/18.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-18') }}</p>
								<p class="parts-item__id">4570840</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/19.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-19') }}</p>
								<p class="parts-item__id">4638651</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/20.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-20') }}</p>
								<p class="parts-item__id">4644991</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/21.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-21') }}</p>
								<p class="parts-item__id">4671011,4671011</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/22.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-22') }}</p>
								<p class="parts-item__id">5554503</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/23.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-23') }}</p>
								<p class="parts-item__id">DIN 608</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts2/24.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item2-24') }}</p>
								<p class="parts-item__id">4278169</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
					</div>
					<div class="row d-flex d-sm-none">
						<div class="col">
							<div class="parts-slider">
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/1.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-1') }}</p>
										<p class="parts-item__id">3028962</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/2.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-2') }}</p>
										<p class="parts-item__id">3051327</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/3.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-3') }}</p>
										<p class="parts-item__id">3238301</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/4.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-4') }}</p>
										<p class="parts-item__id">3352230</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/5.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-5') }}</p>
										<p class="parts-item__id">3364151-3364150</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/6.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-6') }}</p>
										<p class="parts-item__id">3401900</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/7.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-7') }}</p>
										<p class="parts-item__id">3411508</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/8.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-8') }}</p>
										<p class="parts-item__id">3444043</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/9.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-9') }}</p>
										<p class="parts-item__id">3451000</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/10.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-10') }}</p>
										<p class="parts-item__id">3470600</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/11.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-11') }}</p>
										<p class="parts-item__id">3470650</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/12.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-12') }}</p>
										<p class="parts-item__id">3470860</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/13.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-13') }}</p>
										<p class="parts-item__id">3490467</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/14.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-14') }}</p>
										<p class="parts-item__id">3576002</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/15.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-15') }}</p>
										<p class="parts-item__id">4128103</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/16.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-16') }}</p>
										<p class="parts-item__id">4128119</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/17.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-17') }}</p>
										<p class="parts-item__id">4570830</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/18.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-18') }}</p>
										<p class="parts-item__id">4570840</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/19.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-19') }}</p>
										<p class="parts-item__id">4638651</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/20.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-20') }}</p>
										<p class="parts-item__id">4644991</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/21.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-21') }}</p>
										<p class="parts-item__id">4671011,4671011</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/22.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-22') }}</p>
										<p class="parts-item__id">5554503</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/23.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-23') }}</p>
										<p class="parts-item__id">DIN 608</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts2/24.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item2-24') }}</p>
										<p class="parts-item__id">4278169</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvykLkwlRi9dPgBlWObcjWOTM_UnQGfM">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="parts-tab">
					<div class="row justify-content-center d-none d-sm-flex">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/1.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-1') }}</p>
								<p class="parts-item__id">193907A1</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/2.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-2') }}</p>
								<p class="parts-item__id">195939A1-195938A1</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/3.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-3') }}</p>
								<p class="parts-item__id">372560A1</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/4.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-4') }}</p>
								<p class="parts-item__id">372561A1</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/5.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-5') }}</p>
								<p class="parts-item__id">372562A1</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/6.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-6') }}</p>
								<p class="parts-item__id">409556A1</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/7.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-7') }}</p>
								<p class="parts-item__id">813293C2</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/8.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-8') }}</p>
								<p class="parts-item__id">3216619R91</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/9.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-9') }}</p>
								<p class="parts-item__id">6400290</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/10.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-10') }}</p>
								<p class="parts-item__id">6404220</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/11.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-11') }}</p>
								<p class="parts-item__id">21932750</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/12.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-12') }}</p>
								<p class="parts-item__id">33010010</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/13.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-13') }}</p>
								<p class="parts-item__id">33017584</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/14.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-14') }}</p>
								<p class="parts-item__id">33404416</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/15.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-15') }}</p>
								<p class="parts-item__id">33407513</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/16.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-16') }}</p>
								<p class="parts-item__id">86988372</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/17.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-17') }}</p>
								<p class="parts-item__id">87377044</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/18.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-18') }}</p>
								<p class="parts-item__id">87427182</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/19.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-19') }}</p>
								<p class="parts-item__id">87443006</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/20.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-20') }}</p>
								<p class="parts-item__id">87457567</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/21.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-21') }}</p>
								<p class="parts-item__id">87460072</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/22.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-22') }}</p>
								<p class="parts-item__id">87460075</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/23.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-23') }}</p>
								<p class="parts-item__id">87553161</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts3/24.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item3-24') }}</p>
								<p class="parts-item__id">87567013-87566995</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
					</div>
					<div class="row d-flex d-sm-none">
						<div class="col">
							<div class="parts-slider">
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/1.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-1') }}</p>
										<p class="parts-item__id">193907A1</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/2.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-2') }}</p>
										<p class="parts-item__id">195939A1-195938A1</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/3.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-3') }}</p>
										<p class="parts-item__id">372560A1</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/4.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-4') }}</p>
										<p class="parts-item__id">372561A1</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/5.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-5') }}</p>
										<p class="parts-item__id">372562A1</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/6.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-6') }}</p>
										<p class="parts-item__id">409556A1</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/7.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-7') }}</p>
										<p class="parts-item__id">813293C2</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/8.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-8') }}</p>
										<p class="parts-item__id">3216619R91</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/9.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-9') }}</p>
										<p class="parts-item__id">6400290</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/10.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-10') }}</p>
										<p class="parts-item__id">6404220</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/11.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-11') }}</p>
										<p class="parts-item__id">21932750</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/12.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-12') }}</p>
										<p class="parts-item__id">33010010</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/13.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-13') }}</p>
										<p class="parts-item__id">33017584</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/14.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-14') }}</p>
										<p class="parts-item__id">33404416</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/15.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-15') }}</p>
										<p class="parts-item__id">33407513</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/16.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-16') }}</p>
										<p class="parts-item__id">86988372</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/17.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-17') }}</p>
										<p class="parts-item__id">87377044</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/18.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-18') }}</p>
										<p class="parts-item__id">87427182</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/19.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-19') }}</p>
										<p class="parts-item__id">87443006</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/20.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-20') }}</p>
										<p class="parts-item__id">87457567</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/21.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-21') }}</p>
										<p class="parts-item__id">87460072</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/22.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-22') }}</p>
										<p class="parts-item__id">87460075</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/23.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-23') }}</p>
										<p class="parts-item__id">87553161</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts3/24.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item3-24') }}</p>
										<p class="parts-item__id">87567013-87566995</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1VvSMOUxxgB3USy5WST0M_GeI5mLMYhyD">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="parts-tab">
					<div class="row justify-content-center d-none d-sm-flex">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/1.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-1') }}</p>
								<p class="parts-item__id">107-133S</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/2.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-2') }}</p>
								<p class="parts-item__id">120-322D</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/3.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-3') }}</p>
								<p class="parts-item__id">149-181</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/4.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-4') }}</p>
								<p class="parts-item__id">200-039V</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/5.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-5') }}</p>
								<p class="parts-item__id">202-08-4</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/6.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-6') }}</p>
								<p class="parts-item__id">202-11-4</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/7.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-7') }}</p>
								<p class="parts-item__id">204-295D</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/8.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-8') }}</p>
								<p class="parts-item__id">404-121S</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/9.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-9') }}</p>
								<p class="parts-item__id">552-043H</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/10.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-10') }}</p>
								<p class="parts-item__id">552-050V</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/11.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-11') }}</p>
								<p class="parts-item__id">803-029С</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/12.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-12') }}</p>
								<p class="parts-item__id">814-174C</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/13.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-13') }}</p>
								<p class="parts-item__id">815-013С</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/14.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-14') }}</p>
								<p class="parts-item__id">817-039C</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/15.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-15') }}</p>
								<p class="parts-item__id">817-513C</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/16.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-16') }}</p>
								<p class="parts-item__id">817-851C</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/17.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-17') }}</p>
								<p class="parts-item__id">820-012C</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/18.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-18') }}</p>
								<p class="parts-item__id">820-116C</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/19.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-19') }}</p>
								<p class="parts-item__id">820-155C</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/20.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-20') }}</p>
								<p class="parts-item__id">820-401С</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/21.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-21') }}</p>
								<p class="parts-item__id">820-460C</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/22.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-22') }}</p>
								<p class="parts-item__id">891-238C</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/23.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-23') }}</p>
								<p class="parts-item__id">5203КYY2</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts4/24.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item4-24') }}</p>
								<p class="parts-item__id">WN-807-079C</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
					</div>
					<div class="row d-flex d-sm-none">
						<div class="col">
							<div class="parts-slider">
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/1.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-1') }}</p>
										<p class="parts-item__id">107-133S</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/2.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-2') }}</p>
										<p class="parts-item__id">120-322D</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/3.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-3') }}</p>
										<p class="parts-item__id">149-181</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/4.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-4') }}</p>
										<p class="parts-item__id">200-039V</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/5.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-5') }}</p>
										<p class="parts-item__id">202-08-4</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/6.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-6') }}</p>
										<p class="parts-item__id">202-11-4</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/7.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-7') }}</p>
										<p class="parts-item__id">204-295D</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/8.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-8') }}</p>
										<p class="parts-item__id">404-121S</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/9.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-9') }}</p>
										<p class="parts-item__id">552-043H</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/10.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-10') }}</p>
										<p class="parts-item__id">552-050V</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/11.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-11') }}</p>
										<p class="parts-item__id">803-029С</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/12.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-12') }}</p>
										<p class="parts-item__id">814-174C</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/13.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-13') }}</p>
										<p class="parts-item__id">815-013С</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/14.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-14') }}</p>
										<p class="parts-item__id">817-039C</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/15.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-15') }}</p>
										<p class="parts-item__id">817-513C</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/16.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-16') }}</p>
										<p class="parts-item__id">817-851C</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/17.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-17') }}</p>
										<p class="parts-item__id">820-012C</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/18.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-18') }}</p>
										<p class="parts-item__id">820-116C</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/19.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-19') }}</p>
										<p class="parts-item__id">820-155C</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/20.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-20') }}</p>
										<p class="parts-item__id">820-401С</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/21.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-21') }}</p>
										<p class="parts-item__id">820-460C</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/22.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-22') }}</p>
										<p class="parts-item__id">891-238C</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/23.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-23') }}</p>
										<p class="parts-item__id">5203КYY2</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts4/24.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item4-24') }}</p>
										<p class="parts-item__id">WN-807-079C</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1_nacrKQVUNRqJ_j1tUUZpDHUuSOJgA3D">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="parts-tab">
					<div class="row justify-content-center d-none d-sm-flex">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/1.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-1') }}</p>
								<p class="parts-item__id">64000014</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/2.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-2') }}</p>
								<p class="parts-item__id">64000051</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/3.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-3') }}</p>
								<p class="parts-item__id">F04100149</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/4.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-4') }}</p>
								<p class="parts-item__id">F05050022</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/5.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-5') }}</p>
								<p class="parts-item__id">F06120076</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/6.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-6') }}</p>
								<p class="parts-item__id">G10121420</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/7.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-7') }}</p>
								<p class="parts-item__id">G13825091</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/8.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-8') }}</p>
								<p class="parts-item__id">G15220631-G15220661</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/9.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-9') }}</p>
								<p class="parts-item__id">G15223651</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/10.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-10') }}</p>
								<p class="parts-item__id">G15223862</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/11.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-11') }}</p>
								<p class="parts-item__id">G15225500</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/12.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-12') }}</p>
								<p class="parts-item__id">G15472301-G15471030</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/13.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-13') }}</p>
								<p class="parts-item__id">G16630390</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/14.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-14') }}</p>
								<p class="parts-item__id">G17722471</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/15.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-15') }}</p>
								<p class="parts-item__id">G18902481</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/16.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-16') }}</p>
								<p class="parts-item__id">G19002620</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/17.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-17') }}</p>
								<p class="parts-item__id">G22230037</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/18.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-18') }}</p>
								<p class="parts-item__id">G22230203</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/19.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-19') }}</p>
								<p class="parts-item__id">G22270281</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/20.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-20') }}</p>
								<p class="parts-item__id">G22270397</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/21.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-21') }}</p>
								<p class="parts-item__id">GA5220050-GA5220310</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/22.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-22') }}</p>
								<p class="parts-item__id">R17820661R</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/23.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-23') }}</p>
								<p class="parts-item__id">R17820860</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts5/24.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item5-24') }}</p>
								<p class="parts-item__id">R18511431</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
					</div>
					<div class="row d-flex d-sm-none">
						<div class="col">
							<div class="parts-slider">
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/1.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-1') }}</p>
										<p class="parts-item__id">64000014</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/2.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-2') }}</p>
										<p class="parts-item__id">64000051</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/3.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-3') }}</p>
										<p class="parts-item__id">F04100149</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/4.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-4') }}</p>
										<p class="parts-item__id">F05050022</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/5.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-5') }}</p>
										<p class="parts-item__id">F06120076</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/6.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-6') }}</p>
										<p class="parts-item__id">G10121420</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/7.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-7') }}</p>
										<p class="parts-item__id">G13825091</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/8.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-8') }}</p>
										<p class="parts-item__id">G15220631-G15220661</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/9.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-9') }}</p>
										<p class="parts-item__id">G15223651</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/10.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-10') }}</p>
										<p class="parts-item__id">G15223862</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/11.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-11') }}</p>
										<p class="parts-item__id">G15225500</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/12.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-12') }}</p>
										<p class="parts-item__id">G15472301-G15471030</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/13.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-13') }}</p>
										<p class="parts-item__id">G16630390</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/14.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-14') }}</p>
										<p class="parts-item__id">G17722471</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/15.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-15') }}</p>
										<p class="parts-item__id">G18902481</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/16.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-16') }}</p>
										<p class="parts-item__id">G19002620</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/17.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-17') }}</p>
										<p class="parts-item__id">G22230037</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/18.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-18') }}</p>
										<p class="parts-item__id">G22230203</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/19.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-19') }}</p>
										<p class="parts-item__id">G22270281</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/20.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-20') }}</p>
										<p class="parts-item__id">G22270397</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/21.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-21') }}</p>
										<p class="parts-item__id">GA5220050-GA5220310</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/22.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-22') }}</p>
										<p class="parts-item__id">R17820661R</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/23.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-23') }}</p>
										<p class="parts-item__id">R17820860</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts5/24.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item5-24') }}</p>
										<p class="parts-item__id">R18511431</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1n6ljj3A6Bxyt5BWMxVRAqb5tJFngJKpa">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="parts-tab">
					<div class="row justify-content-center d-none d-sm-flex">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/1.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-1') }}</p>
								<p class="parts-item__id">19113</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/2.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-2') }}</p>
								<p class="parts-item__id">19179</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/3.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-3') }}</p>
								<p class="parts-item__id">19182</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/4.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-4') }}</p>
								<p class="parts-item__id">173331</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/5.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-5') }}</p>
								<p class="parts-item__id">173388</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/6.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-6') }}</p>
								<p class="parts-item__id">173427</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/7.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-7') }}</p>
								<p class="parts-item__id">173613</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/8.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-8') }}</p>
								<p class="parts-item__id">177349</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/9.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-9') }}</p>
								<p class="parts-item__id">178114</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/10.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-10') }}</p>
								<p class="parts-item__id">178121</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/11.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-11') }}</p>
								<p class="parts-item__id">104001200</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/12.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-12') }}</p>
								<p class="parts-item__id">104019500-104019600К</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/13.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-13') }}</p>
								<p class="parts-item__id">104100690</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/14.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-14') }}</p>
								<p class="parts-item__id">850103892</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/15.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-15') }}</p>
								<p class="parts-item__id">850103899</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/16.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-16') }}</p>
								<p class="parts-item__id">850103992</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/17.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-17') }}</p>
								<p class="parts-item__id">850104092</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/18.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-18') }}</p>
								<p class="parts-item__id">850104192-850114292</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/19.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-19') }}</p>
								<p class="parts-item__id">850118899</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/20.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-20') }}</p>
								<p class="parts-item__id">851000998</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/21.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-21') }}</p>
								<p class="parts-item__id">851001098</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/22.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-22') }}</p>
								<p class="parts-item__id">851002497</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/23.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-23') }}</p>
								<p class="parts-item__id">851002697</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts6/24.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item6-24') }}</p>
								<p class="parts-item__id">851003197</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
					</div>
					<div class="row d-flex d-sm-none">
						<div class="col">
							<div class="parts-slider">
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/2.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-2') }}</p>
										<p class="parts-item__id">19179</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/3.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-3') }}</p>
										<p class="parts-item__id">19182</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/4.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-4') }}</p>
										<p class="parts-item__id">173331</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/5.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-5') }}</p>
										<p class="parts-item__id">173388</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/6.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-6') }}</p>
										<p class="parts-item__id">173427</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/7.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-7') }}</p>
										<p class="parts-item__id">173613</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/8.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-8') }}</p>
										<p class="parts-item__id">177349</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/9.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-9') }}</p>
										<p class="parts-item__id">178114</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/10.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-10') }}</p>
										<p class="parts-item__id">178121</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/11.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-11') }}</p>
										<p class="parts-item__id">104001200</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/12.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-12') }}</p>
										<p class="parts-item__id">104019500-104019600К</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/13.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-13') }}</p>
										<p class="parts-item__id">104100690</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/14.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-14') }}</p>
										<p class="parts-item__id">850103892</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/15.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-15') }}</p>
										<p class="parts-item__id">850103899</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/16.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-16') }}</p>
										<p class="parts-item__id">850103992</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/17.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-17') }}</p>
										<p class="parts-item__id">850104092</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/18.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-18') }}</p>
										<p class="parts-item__id">850104192-850114292</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/19.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-19') }}</p>
										<p class="parts-item__id">850118899</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/20.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-20') }}</p>
										<p class="parts-item__id">851000998</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/21.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-21') }}</p>
										<p class="parts-item__id">851001098</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/22.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-22') }}</p>
										<p class="parts-item__id">851002497</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/23.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-23') }}</p>
										<p class="parts-item__id">851002697</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts6/24.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item6-24') }}</p>
										<p class="parts-item__id">851003197</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=17IB2tXb3umuizlYwplpPY27-X2_cXG4O">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="parts-tab">
					<div class="row justify-content-center d-none d-sm-flex">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/1.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-1') }}</p>
								<p class="parts-item__id">AC820120</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/2.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-2') }}</p>
								<p class="parts-item__id">KK011682R</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/3.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-3') }}</p>
								<p class="parts-item__id">KK016022-KK016045</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/4.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-4') }}</p>
								<p class="parts-item__id">KK057089</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/5.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-5') }}</p>
								<p class="parts-item__id">KK064321R</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/6.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-6') }}</p>
								<p class="parts-item__id">KK071270R</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/7.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-7') }}</p>
								<p class="parts-item__id">KK071274-KK071275</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/8.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-8') }}</p>
								<p class="parts-item__id">KK073239</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/9.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-9') }}</p>
								<p class="parts-item__id">KK073830</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/10.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-10') }}</p>
								<p class="parts-item__id">KK076825- KK076826</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/11.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-11') }}</p>
								<p class="parts-item__id">KK083660</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/12.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-12') }}</p>
								<p class="parts-item__id">KK086910</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/13.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-13') }}</p>
								<p class="parts-item__id">KK089418</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/14.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-14') }}</p>
								<p class="parts-item__id">KW217001134</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/15.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-15') }}</p>
								<p class="parts-item__id">КК053090</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/16.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-16') }}</p>
								<p class="parts-item__id">КК073057</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/17.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-17') }}</p>
								<p class="parts-item__id">КК073092</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/18.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-18') }}</p>
								<p class="parts-item__id">КК073230</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/19.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-19') }}</p>
								<p class="parts-item__id">КК073300</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/20.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-20') }}</p>
								<p class="parts-item__id">КК073411</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/21.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-21') }}</p>
								<p class="parts-item__id">КК073614</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/22.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-22') }}</p>
								<p class="parts-item__id">КК083229</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/23.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-23') }}</p>
								<p class="parts-item__id">КК2042635</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts7/24.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item7-24') }}</p>
								<p class="parts-item__id">AC819720</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
					</div>
					<div class="row d-flex d-sm-none">
						<div class="col">
							<div class="parts-slider">
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/1.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-1') }}</p>
										<p class="parts-item__id">AC820120</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/2.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-2') }}</p>
										<p class="parts-item__id">KK011682R</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/3.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-3') }}</p>
										<p class="parts-item__id">KK016022-KK016045</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/4.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-4') }}</p>
										<p class="parts-item__id">KK057089</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/5.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-5') }}</p>
										<p class="parts-item__id">KK064321R</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/6.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-6') }}</p>
										<p class="parts-item__id">KK071270R</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/7.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-7') }}</p>
										<p class="parts-item__id">KK071274-KK071275</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/8.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-8') }}</p>
										<p class="parts-item__id">kk073239</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/9.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-9') }}</p>
										<p class="parts-item__id">KK073830</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/10.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-10') }}</p>
										<p class="parts-item__id">KK076825- KK076826</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/11.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-11') }}</p>
										<p class="parts-item__id">KK083660</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/12.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-12') }}</p>
										<p class="parts-item__id">KK086910</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/13.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-13') }}</p>
										<p class="parts-item__id">KK089418</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/14.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-14') }}</p>
										<p class="parts-item__id">KW217001134</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/15.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-15') }}</p>
										<p class="parts-item__id">КК053090</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/16.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-16') }}</p>
										<p class="parts-item__id">КК073057</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/17.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-17') }}</p>
										<p class="parts-item__id">КК073092</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/18.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-18') }}</p>
										<p class="parts-item__id">КК073230</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/19.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-19') }}</p>
										<p class="parts-item__id">КК073300</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/20.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-20') }}</p>
										<p class="parts-item__id">КК073411</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/21.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-21') }}</p>
										<p class="parts-item__id">КК073614</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/22.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-22') }}</p>
										<p class="parts-item__id">КК083229</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/23.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-23') }}</p>
										<p class="parts-item__id">КК2042635</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts7/24.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item7-24') }}</p>
										<p class="parts-item__id">AC819720</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1-f9DR48wTWkp3sPR7neMSJOddANlUzbf">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="parts-tab">
					<div class="row justify-content-center d-none d-sm-flex">
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts8/1.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item8-1') }}</p>
								<p class="parts-item__id">202181</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts8/2.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item8-2') }}</p>
								<p class="parts-item__id">424928</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts8/3.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item8-3') }}</p>
								<p class="parts-item__id">425968</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts8/4.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item8-4') }}</p>
								<p class="parts-item__id">430158</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts8/5.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item8-5') }}</p>
								<p class="parts-item__id">445067</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts8/6.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item8-6') }}</p>
								<p class="parts-item__id">451371</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts8/7.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item8-7') }}</p>
								<p class="parts-item__id">451404</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts8/8.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item8-8') }}</p>
								<p class="parts-item__id">459114</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts8/9.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item8-9') }}</p>
								<p class="parts-item__id">461262</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts8/10.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item8-10') }}</p>
								<p class="parts-item__id">466947</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="parts-item scroll">
								<img src="img/parts8/11.jpg" alt="engineering" class="parts-item__img">
								<p class="parts-item__name">{{ trans('main.parts-item8-11') }}</p>
								<p class="parts-item__id">482496</p>
								<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
							</div>
						</div>
					</div>
					<div class="row d-flex d-sm-none">
						<div class="col">
							<div class="parts-slider">
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts8/1.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item8-1') }}</p>
										<p class="parts-item__id">202181</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts8/2.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item8-2') }}</p>
										<p class="parts-item__id">424928</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts8/3.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item8-3') }}</p>
										<p class="parts-item__id">425968</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts8/4.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item8-4') }}</p>
										<p class="parts-item__id">430158</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts8/5.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item8-5') }}</p>
										<p class="parts-item__id">445067</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts8/6.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item8-6') }}</p>
										<p class="parts-item__id">451371</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts8/7.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item8-7') }}</p>
										<p class="parts-item__id">451404</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts8/8.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item8-8') }}</p>
										<p class="parts-item__id">459114</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts8/9.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item8-9') }}</p>
										<p class="parts-item__id">461262</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts8/10.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item8-10') }}</p>
										<p class="parts-item__id">466947</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
								<div class="parts-slider__slide">
									<div class="parts-item animated">
										<img src="img/parts8/11.jpg" alt="engineering" class="parts-item__img">
										<p class="parts-item__name">{{ trans('main.parts-item8-11') }}</p>
										<p class="parts-item__id">482496</p>
										<a href="javascript:;" data-src="#modal4" class="parts-item__btn fancybox formLink" data-link="https://drive.google.com/open?id=1DE5gJCF5re4r7YwvJV1VRNmsPiecShrX">{{ trans('main.parts-btn') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
					<img src="img/about_bg.jpg" alt="engineering" class="about-img">
				</div>
				<div class="row">
					<div class="col-lg-8 offset-lg-3 col-md-10 offset-md-1">
						<div class="about-block">
							<div class="about-half">
								<img src="img/about-ico1.svg" alt="engineering" class="about-half__img">
								<p class="about-half__txt">{!! trans('main.about-item1') !!}</p>
							</div>
							<div class="about-half">
								<img src="img/about-ico2.svg" alt="engineering" class="about-half__img">
								<p class="about-half__txt">{!! trans('main.about-item2') !!}</p>
							</div>
							<div class="about-half">
								<img src="img/about-ico3.svg" alt="engineering" class="about-half__img">
								<p class="about-half__txt">{!! trans('main.about-item3') !!}</p>
							</div>
							<div class="about-half">
								<img src="img/about-ico4.svg" alt="engineering" class="about-half__img">
								<p class="about-half__txt">{!! trans('main.about-item4') !!}</p>
							</div>
							<div class="about-half">
								<img src="img/about-ico5.svg" alt="engineering" class="about-half__img">
								<p class="about-half__txt">{!! trans('main.about-item5') !!}</p>
							</div>
							<div class="about-half">
								<img src="img/about-ico6.svg" alt="engineering" class="about-half__img">
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
						<video class="about-video" controls loop poster="img/about-video.jpg">
							<source src="video/1.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
		</section>

		<section class="defect">
			<div class="container">
				<img src="img/defect-img.png" alt="engineering" class="defect-img">
				<div class="row">
					<div class="col-md-4 order-md-2 col-sm-6">
						<h4 class="defect-ttl scroll">{{ trans('main.defect-ttl') }}</h4>
						<p class="defect-txt scroll">{{ trans('main.defect-txt') }}</p>
					</div>
					<div class="col-sm-6 d-block d-md-none">
						<!-- <iframe class="defect-video" src="https://www.youtube.com/embed/xK8vTSvyr-g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
						<video class="defect-video" controls loop poster="img/about-video2.jpg">
							<source src="video/2.mp4" type="video/mp4">
						</video>
					</div>
					<div class="col-md-5 offset-md-1 order-md-1">
						<!-- <iframe class="defect-video d-none d-md-block" src="https://www.youtube.com/embed/xK8vTSvyr-g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
						<video class="defect-video d-none d-md-block" controls loop poster="img/about-video2.jpg">
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
						<img src="img/delivery-img.png" alt="engineering" class="delivery-img">
					</div>
					<div class="col-md-7">
						<h3 class="delivery-ttl scroll d-none d-md-block">{!! trans('main.delivery-ttl') !!}</h3>
						<div class="delivery-block">
							<p class="delivery-block__item">{{ trans('main.delivery-txt1') }}</p>
							<p class="delivery-block__item">{{ trans('main.delivery-txt2') }}</p>
						</div>
						<div class="delivery-images scroll">
							<img src="img/delivery-ico1.png" alt="engineering" class="delivery-images__img">
							<img src="img/delivery-ico2.png" alt="engineering" class="delivery-images__img">
							<img src="img/delivery-ico3.png" alt="engineering" class="delivery-images__img">
							<img src="img/delivery-ico4.png" alt="engineering" class="delivery-images__img">
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
							<div class="reviews-item">
								<h4 class="reviews-item__name">Олег</h4>
								<p class="reviews-item__city">Харківська обл.</p>
								<p class="reviews-item__txt">Дуже поважаю мого менеджера Олександра. Саня, привіт!) Хочу сказати, що за всі роки нашої роботи компанія показала себе тільки з кращої сторони. Одразу підберуть необхідну запчастину та відрекомендують, де можна ставити оригінал, а де підійде аналог. Що хочу сказати одразу – Сашко завжди запропонує аналог який не гірший за оригінал, відмінність тільки в ціні. Їх технічним рекомендація завжди довіряю, адже вони знають кожну запчастину «на смак і колір», так сказати. Поставки завжди в зазначений час. Якщо пошта не справляється вони привезуть необхідну запчастину самі. Де ви таке бачили? Що хочу сказати, компанії Студія Інжиніринг сповна можна довірити свою техніку.</p>
								<a href="#rev1" class="reviews-item__link fancybox">{{ trans('main.reviews-link') }}</a>
								<div class="d-none">
									<div id="rev1" class="reviews-modal">
										<h4 class="reviews-item__name">Олег</h4>
										<p class="reviews-item__city">Харківська обл.</p>
										<p class="reviews-item__txt">Дуже поважаю мого менеджера Олександра. Саня, привіт!) Хочу сказати, що за всі роки нашої роботи компанія показала себе тільки з кращої сторони. Одразу підберуть необхідну запчастину та відрекомендують, де можна ставити оригінал, а де підійде аналог. Що хочу сказати одразу – Сашко завжди запропонує аналог який не гірший за оригінал, відмінність тільки в ціні. Їх технічним рекомендація завжди довіряю, адже вони знають кожну запчастину «на смак і колір», так сказати. Поставки завжди в зазначений час. Якщо пошта не справляється вони привезуть необхідну запчастину самі. Де ви таке бачили? Що хочу сказати, компанії Студія Інжиніринг сповна можна довірити свою техніку.</p>
									</div>
								</div>
							</div>
							<div class="reviews-item">
								<h4 class="reviews-item__name">Сергій</h4>
								<p class="reviews-item__city">м. Херсон</p>
								<p class="reviews-item__txt">Студія Інжиніринг — компанія, яка вже багато чого домоглася в сфері агробізнесу. Дуже поважаю їх за те, що кожна поставка приходить в обумовлений терміні з усіма прилеглими документами. Все завжди дуже чемно, чітко та швидко. Не раз витягували з форс мажорних ситуацій за що їм від мене особисто велике дякую. Всім бажаю таких постачальників.</p>
								<a href="#rev2" class="reviews-item__link fancybox">{{ trans('main.reviews-link') }}</a>
								<div class="d-none">
									<div id="rev2" class="reviews-modal">
										<h4 class="reviews-item__name">Сергій</h4>
										<p class="reviews-item__city">м. Херсон</p>
										<p class="reviews-item__txt">Студія Інжиніринг — компанія, яка вже багато чого домоглася в сфері агробізнесу. Дуже поважаю їх за те, що кожна поставка приходить в обумовлений терміні з усіма прилеглими документами. Все завжди дуже чемно, чітко та швидко. Не раз витягували з форс мажорних ситуацій за що їм від мене особисто велике дякую. Всім бажаю таких постачальників.</p>
									</div>
								</div>
							</div>
							<div class="reviews-item">
								<h4 class="reviews-item__name">ОЛЕГ</h4>
								<p class="reviews-item__city">м. Миколаїв</p>
								<p class="reviews-item__txt">Ще на етапі знайомства помітив, що компанія дуже серйозно відноситься до своєї роботи та вирішив довіритись. Відтоді ми працюємо вже більше 3 років разом. Виручають 24 години на зв’язку. Компанія тримає своє слово. Погодження рахунків завжди проходить легко. А що особливо, що за всі роки в мене не змінилась менеджер. За стільки років роботи наші відносини переросли з робочих у дружні. Мене розуміють з пів слова і не витрачають мій час дарма.<br>Загалом усе на вищому рівні.</p>
								<a href="#rev3" class="reviews-item__link fancybox">{{ trans('main.reviews-link') }}</a>
								<div class="d-none">
									<div id="rev3" class="reviews-modal">
										<h4 class="reviews-item__name">ОЛЕГ</h4>
										<p class="reviews-item__city">м. Миколаїв</p>
										<p class="reviews-item__txt">Ще на етапі знайомства помітив, що компанія дуже серйозно відноситься до своєї роботи та вирішив довіритись. Відтоді ми працюємо вже більше 3 років разом. Виручають 24 години на зв’язку. Компанія тримає своє слово. Погодження рахунків завжди проходить легко. А що особливо, що за всі роки в мене не змінилась менеджер. За стільки років роботи наші відносини переросли з робочих у дружні. Мене розуміють з пів слова і не витрачають мій час дарма.<br>Загалом усе на вищому рівні.</p>
									</div>
								</div>
							</div>
							<div class="reviews-item">
								<h4 class="reviews-item__name">Юрій</h4>
								<p class="reviews-item__city"> м. Новомосковськ</p>
								<p class="reviews-item__txt">Де ви бачили, щоб запчастини давали у відстрочку? Дуже швидко вийшли з компанією Студія Інжиніринг з відносин партнери у відносини VIP. Тепер по запчастинах до ґрунтообробноі техніки звертаємось до них постійно. Хочу відрекомендувати компанію, як надійного постачальника, яка для своїх клієнтів робить все можливе і навіть трошки більше.</p>
								<a href="#rev4" class="reviews-item__link fancybox">{{ trans('main.reviews-link') }}</a>
								<div class="d-none">
									<div id="rev4" class="reviews-modal">
										<h4 class="reviews-item__name">Юрій</h4>
										<p class="reviews-item__city"> м. Новомосковськ</p>
										<p class="reviews-item__txt">Де ви бачили, щоб запчастини давали у відстрочку? Дуже швидко вийшли з компанією Студія Інжиніринг з відносин партнери у відносини VIP. Тепер по запчастинах до ґрунтообробноі техніки звертаємось до них постійно. Хочу відрекомендувати компанію, як надійного постачальника, яка для своїх клієнтів робить все можливе і навіть трошки більше.</p>
									</div>
								</div>
							</div>
							<div class="reviews-item">
								<h4 class="reviews-item__name">Вадим</h4>
								<p class="reviews-item__city">Одеська обл.</p>
								<p class="reviews-item__txt">Можу авторитетно сказати — компанія гарантує якість запчастин, своєчасну доставку та навіть товар у відстрочку. Де потрібно нададуть технічну допомогу. Ніколи не було інцидентів у співпраці. Задоволений роботою фахівців, якістю запчастин та цінам, що досить важливо.  Можу без нарікань рекомендувати компанію Студія Інжиніринг.</p>
								<a href="#rev5" class="reviews-item__link fancybox">{{ trans('main.reviews-link') }}</a>
								<div class="d-none">
									<div id="rev5" class="reviews-modal">
										<h4 class="reviews-item__name">Вадим</h4>
										<p class="reviews-item__city">Одеська обл.</p>
										<p class="reviews-item__txt">Можу авторитетно сказати — компанія гарантує якість запчастин, своєчасну доставку та навіть товар у відстрочку. Де потрібно нададуть технічну допомогу. Ніколи не було інцидентів у співпраці. Задоволений роботою фахівців, якістю запчастин та цінам, що досить важливо.  Можу без нарікань рекомендувати компанію Студія Інжиніринг.</p>
										<a href="#rev5" class="reviews-item__link fancybox">{{ trans('main.reviews-link') }}</a>
									</div>
								</div>
							</div>
							<div class="reviews-item">
								<h4 class="reviews-item__name">Руслан</h4>
								<p class="reviews-item__city">Полтавська обл.</p>
								<p class="reviews-item__txt">Можу виділити декілька аспектів чому ми працюємо з компанією Студія Інжиніринг: завжди відвантаження у обговорені терміни, до якості запчастин претензій немає,  тримаємо зв’язок 24/7, можу в будь який час звернутися і отримати технічну консультацію по всім питанням. Ми працюємо тільки з надійними постачальниками запчастин. Саме такою і є компанія Студія Інжиніринг. Ми впевнені в них, і можемо рекомендувати, як компанію з якою приємно працювати.</p>
								<a href="#rev6" class="reviews-item__link fancybox">{{ trans('main.reviews-link') }}</a>
								<div class="d-none">
									<div id="rev6" class="reviews-modal">
										<h4 class="reviews-item__name">Руслан</h4>
										<p class="reviews-item__city">Полтавська обл.</p>
										<p class="reviews-item__txt">Можу виділити декілька аспектів чому ми працюємо з компанією Студія Інжиніринг: завжди відвантаження у обговорені терміни, до якості запчастин претензій немає,  тримаємо зв’язок 24/7, можу в будь який час звернутися і отримати технічну консультацію по всім питанням. Ми працюємо тільки з надійними постачальниками запчастин. Саме такою і є компанія Студія Інжиніринг. Ми впевнені в них, і можемо рекомендувати, як компанію з якою приємно працювати.</p>
									</div>
								</div>
							</div>
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
									<p class="foot-block__addr">{!! trans('main.addr') !!}</p>
									<p class="foot-block__time">{{ trans('main.time') }}</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="foot-block">
									<h4 class="foot-block__subttl">{{ trans('main.foot-subttl2') }}</h4>
									<a href="mailto:zakaz@studioin.com.ua" class="foot-block__eml">zakaz@studioin.com.ua</a>
									<a href="mailto:horsch@studioin.com.ua" class="foot-block__eml">horsch@studioin.com.ua</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="foot-block">
									<h4 class="foot-block__subttl height">{{ trans('main.foot-subttl3') }}</h4>
									<div class="foot-block__phone">
										<a class="nav-phone__ico viber d-block d-sm-none" href="viber://add?number=+380676411636"></a>
										<a class="nav-phone__ico viber d-none d-sm-block" href="viber://chat?number=+380676411636"></a>
										<a href="https://t.me/BoikoY" target="_blank" class="nav-phone__ico telegram" style="display: block;"></a>
										<a href="tel:+380676411636" class="foot-block__link">+38 (067) 641-16-36</a>
									</div>
									<div class="foot-block__phone">
										<a class="nav-phone__ico viber d-block d-sm-none" href="viber://add?number=+380503637107"></a>
										<a class="nav-phone__ico viber d-none d-sm-block" href="viber://chat?number=+380503637107"></a>
										<a href="" target="_blank" class="nav-phone__ico telegram" style="display: block;"></a>
										<a href="tel:+380503637107" class="foot-block__link">+38 (050) 363-71-07</a>
									</div>
									<div class="foot-block__phone">
										<a class="nav-phone__ico viber d-block d-sm-none" href="viber://add?number=+380503638778"></a>
										<a class="nav-phone__ico viber d-none d-sm-block" href="viber://chat?number=+380503638778"></a>
										<a href="https://t.me/valeriisv" target="_blank" class="nav-phone__ico telegram" style="display: block;"></a>
										<a href="tel:+380503638778" class="foot-block__link">+38 (050) 363-87-78</a>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="foot-block">
									<h4 class="foot-block__subttl height">{{ trans('main.foot-subttl4') }}</h4>
									<a href="https://www.facebook.com/pg/studioengineering1/shop/" target="_blank" class="foot-block__soc fb">facebook</a>
									<!-- <a href="#" class="foot-block__soc in">instagram</a> -->
									<a href="https://www.youtube.com/channel/UCqhbn6gA5FahcKjlg7HGBpw" target="_blank" class="foot-block__soc yt">youtube</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 offset-lg-1 col-md-5 offset-md-1">
						<div class="foot-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2644.671751486093!2d34.99396650070217!3d48.48200950697657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe248fe3aaaab%3A0x14a2b56992efc917!2z0KHRgtGD0LTQuNGPINCY0L3QttC40L3QuNGA0LjQvdCz!5e0!3m2!1suk!2sua!4v1578908200635!5m2!1suk!2sua" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						</div>
						<a href="javascript:;" data-src="#modal3" class="foot-btn fancybox">{{ trans('main.foot-btn') }}</a>
					</div>
				</div>
				<div class="row align-items-center foot-line">
					<div class="col">
						<img src="img/logo.png" alt="engineering" class="foot-logo">
					</div>
					<div class="col">
						<a href="https://wamp.com.ua/" target="_blank" class="dev">
							<span>{{ trans('main.dev') }}</span>
							<img src="img/wamp.png" alt="engineering">
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
					<img src="img/modal1_bg.jpg" alt="engineering">
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
					<img src="img/modal4-img.png" alt="engineering" style="max-width: 368px">
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
					<img src="img/modal2-img.png" alt="engineering">
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