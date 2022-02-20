{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
		<!-- separator -->
		<div class="separator-medium"></div>
		<!-- end separator -->

		@if(session()->has('success'))
		<div class="container">
		<div class="alert alert-success alert-dismissible fade show">
			<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
			{{ session('success') }}
			<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
			</button>
		</div>
		</div>
		@endif

		@if(session()->has('loginError'))
		<div class="container">
		<div class="alert alert-danger alert-dismissible fade show">
			<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
			{{ session('loginError') }}
			<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
			</button>
		</div>
		</div>
		@endif
		
		<!-- settings -->
		<div class="settings">
			<div class="container">

			<div class="row justify-content-center">
				<div class="col-10">
					<img src="{{asset('images/logo-babydaily-full-blue.png')}}" alt="image-demo">
				</div>
			</div>

					<!-- separator -->
					<div class="separator-medium"></div>
					<!-- end separator -->

					<div class="setting-form">
						<form class="form-outline form-horizontal" action="/login" method="post">
						@csrf
							<div class="form-wrapper">
                                <div class="input-wrap row">
									<label for="nomor_telepon" class="col-3 col-form-label">Nomor Hp</label>
									<div class="col-9">
										<input id="nomor_telepon" name="nomor_telepon" type="text">
									</div>
								</div>
								<input type="hidden" id="role" name="role" value="Orang Tua">
                                <div class="input-wrap row">
									<label for="password" class="col-3 col-form-label">Kata Sandi</label>
									<div class="col-9">
										<input id="password" name="password" type="password">
									</div>
								</div>
							</div>
							<div class="separator-large"></div>
							<!-- <div class="container"> -->
								<div class="col-14 justify-content-center">
									<button type="submit" class="button button-fill">Masuk</button>
								</div>
							<!-- </div> -->
						</form>

					</div>

					<!-- separator -->
				<div class="separator-large"></div>
				<!-- end separator -->

				<div class="link-forgot text-center text-small">
					<a href="#" class="color-theme">Lupa Kata Sandi?</a>
				</div>

				<!-- separator -->
				<div class="separator-small"></div>
				<!-- end separator -->

				<div class="link-sign-up text-center text-small">
					<p>Tidak Punya Akun?<a href="/register" class="color-theme ml-2">Daftar</a></p>
				</div>

			</div>
		</div>
		<!-- end settings -->

@endsection