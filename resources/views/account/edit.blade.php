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

						<form class="form-outline form-horizontal" action="" method="post">
							<div class="form-wrapper">
								<div class="input-wrap row">
									<label for="nomor_telepon" class="col-3 col-form-label">No Hp</label>
									<div class="col-9">
										<input id="nomor_telepon" type="text" name="nomor_telepon" value="082249389862">
									</div>
								</div>
                                <div class="input-wrap row">
									<label for="password" class="col-3 col-form-label">Kata Sandi Lama</label>
									<div class="col-9">
										<input id="password" type="password" name="password">
									</div>
								</div>
								<div class="input-wrap row">
									<label for="password" class="col-3 col-form-label">Kata Sandi Baru</label>
									<div class="col-9">
										<input id="password" type="password" name="password">
									</div>
								</div>
							</div>
						
                        <div class="separator-large"></div>

                        <!-- <div class="container"> -->
                            <div class="col-14 justify-content-center">
                                <button type="submit" class="button button-fill">Simpan</button>
                            </div>
                        <!-- </div> -->
						</form>
			</div>
		</div>
		<!-- end settings -->

@endsection