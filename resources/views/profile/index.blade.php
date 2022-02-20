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

		
		<!-- settings -->
		<div class="settings">
			<div class="container">
				<div class="setting-avatar">
					<img src="{{asset('images/profile.jpg')}}" alt="image-demo">
					<div class="btn-upload-picture">
						<div class="form">
							<label for="avatar-picture">
								<h5 class="color-theme">{{auth()->user()->nama_lengkap}}</h5>
							</label>
						</div>
					</div>

					<!-- separator -->
					<div class="separator-medium"></div>
					<!-- end separator -->

					<div class="setting-form">
						<form class="form-fill form-horizontal">
						<input type="hidden" id="role" name="role" value="Kader">
							<div class="form-wrapper">
                                <div class="input-wrap row">
									<label for="no_kk" class="col-3 col-form-label">No KK</label>
									<div class="col-9">
										<input id="no_kk" type="text" disabled>
									</div>
								</div>
                                <div class="input-wrap row">
									<label for="nik" class="col-3 col-form-label">NIK</label>
									<div class="col-9">
										<input id="nik" type="text" disabled>
									</div>
								</div>
								<div class="input-wrap row">
									<label for="alamat" class="col-3 col-form-label">RT/RW</label>
									<div class="col-9">
										<input id="alamat" type="text" disabled>
									</div>
								</div>
                                <div class="input-wrap row">
									<label for="status" class="col-3 col-form-label">Status</label>
									<div class="col-9">
										<input id="status" type="text" disabled>
									</div>
								</div>
							</div>
						</form>

                        <div class="separator-large"></div>
                        <!-- <div class="container"> -->
                            <div class="col-14 justify-content-center">
                                <a href="/profile/create" class="button button-outline">Edit Data Diri</a>
                            </div>
                        <!-- </div> -->
					</div>

				</div>
			</div>
		</div>
		<!-- end settings -->

@endsection