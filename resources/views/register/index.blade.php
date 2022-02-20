{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
		<!-- separator -->
		<div class="separator-medium"></div>
		<!-- end separator -->
		
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
						<form class="form-outline form-horizontal" action="/register" method="post">
							@csrf
							<input type="hidden" id="role" name="role" value="Orang Tua">
							<div class="form-wrapper">
								<div class="input-wrap row">
									<label for="nama_lengkap" class="col-3 col-form-label">Nama</label>
									<div class="col-9">
										<input id="nama_lengkap" name="nama_lengkap @error('nama_lengkap') is-invalid @enderror" type="text" required>
									</div>
								</div>
								@error('nama_lengkap')
									<div class="invalid-feedback">
										Nama Lengkap perlu diisi
									</div>
								@enderror
                                <div class="input-wrap row">
									<label for="nomor_telepon" class="col-3 col-form-label">Nomor Hp</label>
									<div class="col-9">
										<input id="nomor_telepon" name="nomor_telepon @error('nomor_telepon') is-invalid @enderror" type="text" required>
									</div>
								</div>
								@error('nomor_telepon')
									<div class="invalid-feedback">
										Nomor Telepon yang dimasukkan salah
									</div>
									@enderror
                                <div class="input-wrap row">
									<label for="password" class="col-3 col-form-label">Kata Sandi</label>
									<div class="col-9">
										<input id="password" name="password @error('password') is-invalid @enderror" type="password" required>
									</div>
								</div>
								@error('password')
									<div class="invalid-feedback">
										Kata Sandi perlu diisi
									</div>
									@enderror
							</div>
							<div class="separator-large"></div>
							<!-- <div class="container"> -->
								<div class="col-14 justify-content-center">
									<button type="submit" class="button button-fill">Daftar</button>
								</div>
							<!-- </div> -->
						</form>

					</div>

					<!-- separator -->
				<div class="separator-large"></div>
				<!-- end separator -->

				<!-- separator -->
				<div class="separator-small"></div>
				<!-- end separator -->

				<div class="link-sign-up text-center text-small">
					<p>Sudah Punya Akun?<a href="/login" class="color-theme ml-2">Masuk</a></p>
				</div>

			</div>
		</div>
		<!-- end settings -->

@endsection