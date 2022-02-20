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
							<div class="form-wrapper">
                                <div class="input-wrap row">
									<label for="no_telepon" class="col-3 col-form-label">No Hp</label>
									<div class="col-9">
										<input id="no_telepon" type="text" value="{{auth()->user()->nomor_telepon}}" disabled>
									</div>
								</div>
                                <div class="input-wrap row">
									<label for="password" class="col-3 col-form-label">Kata Sandi</label>
									<div class="col-9">
										<input id="password" type="text" value="******" disabled>
									</div>
								</div>
							</div>
						</form>

                        <div class="separator-large"></div>
                        <!-- <div class="container"> -->
                            <div class="col-14 justify-content-center">
                                <a href="#" class="button button-outline">Edit Akun</a>
                            </div>
                        <!-- </div> -->
					</div>

				</div>
			</div>
		</div>
		<!-- end settings -->

@endsection