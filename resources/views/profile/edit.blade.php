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
						<form class="form-outline form-horizontal" action="/profile/{{ $biodata->id }}" method="post">
							@method('put')
              				@csrf
							<div class="form-wrapper">
								<input type="hidden" type="text" name="nomor_telepon" value="{{auth()->user()->nomor_telepon}}">
								<div class="input-wrap row">
									<label for="nama_lengkap" class="col-3 col-form-label">Nama</label>
									<div class="col-9">
										<input id="nama_lengkap" type="text" name="nama_lengkap" value="{{$biodata->nama_lengkap}}">
									</div>
								</div>
                                <div class="input-wrap row">
									<label for="no_kk" class="col-3 col-form-label">No KK</label>
									<div class="col-9">
										<input id="no_kk" type="text" name="no_kk" value="{{$biodata->no_kk}}">
									</div>
								</div>
                                <div class="input-wrap row">
									<label for="nik" class="col-3 col-form-label">NIK</label>
									<div class="col-9">
										<input id="nik" type="text" name="nik" value="{{$biodata->nik}}">
									</div>
								</div>
								<div class="input-wrap row">
									<label for="alamat" class="col-3 col-form-label">RT/RW</label>
									<div class="col-9">
										<input id="alamat" type="text" name="alamat" value="{{$biodata->alamat}}">
									</div>
								</div>
                                <div class="input-wrap row">
									<label for="status" class="col-3 col-form-label">Status</label>
									<div class="col-9">
										<select class="custom-select" name="status" id="status">
											<option>Pilih disini..</option>
											<option value="Ayah" {{ ( $biodata->status == 'Ayah') ? 'selected' : '' }}>Ayah</option>
											<option value="Ibu" {{ ( $biodata->status == 'Ibu') ? 'selected' : '' }}>Ibu</option>
										</select>
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