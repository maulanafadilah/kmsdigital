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

						<form class="form-outline form-horizontal" action="/profile/" method="post">
							@csrf
							<div class="form-wrapper">
								<div class="input-wrap row">
									<label for="nama_lengkap" class="col-3 col-form-label">Nama</label>
									<div class="col-9">
										<input id="nama_lengkap" type="text" name="nama_lengkap" value="{{auth()->user()->nama_lengkap}}" required>
									</div>
								</div>
                                <div class="input-wrap row">
									<label for="no_kk" class="col-3 col-form-label">No KK</label>
									<div class="col-9">
										<input id="no_kk" type="text" name="no_kk" required>
									</div>
								</div>
                                <div class="input-wrap row">
									<label for="nik" class="col-3 col-form-label">NIK</label>
									<div class="col-9">
										<input id="nik" type="text" name="nik" required>
									</div>
								</div>
								<div class="input-wrap row">
									<label for="alamat" class="col-3 col-form-label">RT/RW</label>
									<div class="col-9">
										<input id="alamat" type="text" name="alamat" required>
									</div>
								</div>
                                <div class="input-wrap row">
									<label for="status" class="col-3 col-form-label">Status</label>
									<div class="col-9">
										<select class="custom-select" name="status" id="status">
											<option selected>Pilih disini..</option>
											<option value="Ayah">Ayah</option>
											<option value="Ibu">Ibu</option>
										</select>
									</div>
								</div>
								<input type="hidden" id="nomor_telepon" name="nomor_telepon" value="{{auth()->user()->nomor_telepon}}">
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