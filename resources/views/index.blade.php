{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
		

		<div class="section-title title-large">
			<span class="overline-title">Halo, Tri Cahaya!</span>
			<h3>Selamat Datang di KMS Digital</h3>
		</div>

			<div class="swiper-container swiper-navigation">
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="img">
							<img src="images/horizontal4.jpg" alt="image-demo">
						</div>
					</div>
					<div class="swiper-slide">
						<div class="img">
							<img src="images/horizontal5.jpg" alt="image-demo">
						</div>
					</div>
					<div class="swiper-slide">
						<div class="img">
							<img src="images/horizontal6.jpg" alt="image-demo">
						</div>
					</div>
				</div>
			</div>


		<!-- <div class="container">
			<div class="content-box shadow-sm mt-3">
				<div class="social-media-icon mt-4">
					<ul>
						<li class="mr-5">
							<a href="#">
							<div class="icon"><i class="icon ion-ios-albums color-blue"></i></div>
							<div class="text">
								<p>KMS</p>
							</div>
						</li> 
						<li>
							<a href="#">
							<div class="icon"><i class="icon ion-ios-book color-red"></i></div>
							<div class="text">
								<p>Blog</p>
							</div>
						</li>
						<li class="ml-5">
							<a href="#">
							<div class="icon"><i class="icon ion-ios-color-palette color-yellow"></i></div>
							<div class="text">
								<p>Balita</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div> -->

		<div class="separator-large"></div>

		<div class="section-title">
			<h5>Menu</h5>
		</div>

		<!-- feature slide -->
		<div class="feature-slide">
			<div class="swiper-container swiper-style">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="content shadow-sm">
							<!-- <div class="info-statistic bg-blue">10+</div> -->
							<a href="/kms">
							<div class="icon"><i class="icon ion-ios-albums color-blue"></i></div>
							<div class="text">
								<p>KMS</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="content shadow-sm">
							<!-- <div class="info-statistic bg-red">9+</div> -->
							<a href="#">
							<div class="icon"><i class="icon ion-ios-book color-red"></i></div>
							<div class="text">
								<p>Blog</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="content shadow-sm">
							<!-- <div class="info-statistic bg-yellow">12+</div> -->
							<a href="#">
							<div class="icon"><i class="icon ion-ios-color-palette color-green"></i></div>
							<div class="text">
								<p>Balita</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="content shadow-sm">
							<!-- <div class="info-statistic bg-yellow">12+</div> -->
							<a href="#">
							<div class="icon"><i class="icon ion-ios-chatbubbles color-yellow"></i></div>
							<div class="text">
								<p>Komunitas</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- separator -->
		<div class="separator-large"></div>
		<!-- end separator -->

		<!-- section title -->
			<div class="section-title">
				<h5>Blog</h5>
			</div>
			@foreach ($blog as $item)
			<div class="container">
				<div class="card card-image card-outline">
					<img src="images/horizontal5.jpg" class="card-img" alt="image-demo">
					<div class="card-body">
						<h5 class="card-title">{{$item->judul}}</h5>
						<!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, veniam.</p> -->
						<div class="card-date"><i class="icon ion-ios-calendar"></i> {{$item->tanggal}}</div>
					</div>
				</div>
			</div>
			@endforeach
			<div class="separator-small"></div>
			<!-- <div class="separator-small"></div> -->

			<div class="container">
				<div class="col-12 justify-content-center">
					<a href="/blog" class="button button-fill">Lihat Semua</a>
				</div>
			</div>

@endsection