{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <!-- profile -->
		<div class="profile">
			<div class="container">
				<div class="row">
					<!-- <div class="col-4 align-self-center">
						<div class="content statistic text-right">
							<h5>500</h5>
							<span class="text-small">Profile Posts</span>
						</div>
					</div> -->
					<div class="col-4">
						<div class="header-profile">
							<div class="container">
								<img src="{{ asset('images/square6.jpg') }}" alt="image-demo">
							</div>
						</div>
					</div>
					<div class="col-8 mt-3">
						<div class="content statistic text-left">
							<h4>{{$balita->nama_lengkap}}</h4>
                            <span class="text-small">NIK: {{$balita->nik}}</span>
						</div>
					</div>
				</div>


				<!-- separator -->
				<div class="separator-small"></div>
				<!-- end separator -->

				<ul class="nav nav-fill nav-default" id="myTab" role="tablist">
                    <li class="nav-item">
						<a class="nav-link active" id="bio-tab" data-toggle="tab" href="#bio" role="tab" aria-controls="bio" aria-selected="true">Biodata</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link" id="graph-tab" data-toggle="tab" href="#graph" role="tab" aria-controls="graph" aria-selected="false">Grafik KMS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="table-tab" data-toggle="tab" href="#table" role="tab" aria-controls="table" aria-selected="false">Tabel KMS</a>
					</li>
				</ul>

				<!-- separator -->
				<div class="separator-large"></div>
				<!-- end separator -->

				<div class="tab-content">
                    <div class="tab-pane show active" id="bio" role="tabpanel" aria-labelledby="bio-tab">
						<!-- <div class="row">
						</div> -->
                        <div class="setting-form">
						<form class="form-fill form-horizontal">
							<div class="form-wrapper">
								<div class="input-wrap row">
									<label for="tempat_lahir" class="col-3 col-form-label">TTL</label>
									<div class="col-9">
										<input id="tempat_lahir" type="text" value="{{$balita->tempat_lahir}}, {{$balita->tanggal_lahir}}" disabled>
									</div>
								</div>
								<div class="input-wrap row">
									<label for="jenis_kelamin" class="col-3 col-form-label">Jenis Kelamin</label>
									<div class="col-9">
										<input id="jenis_kelamin" type="text" value="{{$balita->jenis_kelamin}}" disabled>
									</div>
								</div>
                                <div class="input-wrap row">
									<label for="alamat" class="col-3 col-form-label">Alamat (RT/RW)</label>
									<div class="col-9">
										<input id="alamat" type="text" value="{{$balita->alamat}}" disabled>
									</div>
								</div>
                                <div class="input-wrap row">
									<label for="tinggi_lahir" class="col-3 col-form-label">Tinggi Lahir (CM)</label>
									<div class="col-9">
										<input id="tinggi_lahir" type="text" value="{{$balita->tinggi_lahir}}" disabled>
									</div>
								</div>
                                <div class="input-wrap row">
									<label for="berat_lahir" class="col-3 col-form-label">Berat Lahir (KG)</label>
									<div class="col-9">
										<input id="berat_lahir" type="text" value="{{$balita->berat_lahir}}" disabled>
									</div>
								</div>
                                <div class="input-wrap row">
									<label for="gakin" class="col-3 col-form-label">Gakin</label>
									<div class="col-9">
										<input id="gakin" type="text" value="{{$balita->keterangan}}" disabled>
									</div>
								</div>
							</div>
						</form>
					</div>
					</div>
					<div class="tab-pane" id="graph" role="tabpanel" aria-labelledby="graph-tab">
						<div class="row">
						</div>
					</div>
					<div class="tab-pane" id="table" role="tabpanel" aria-labelledby="table-tab">
						@if (!empty($kehadiran))
						@foreach ($kehadiran as $item)
						<div class="container">
							<div class="card card-outline">
								<div class="card-body">
									<h5 class="card-title">Bulan Ke: {{$item->usia}}</h5>
									<h6 class="card-subtitle" style="color: black;">{{$item->tanggal}}</h6>
									
									<div class="separator-small"></div>
									<div class="input-wrap row">
										<label for="tinggi" class="col-3 col-form-label">Tinggi(CM)</label>
										<div class="col-9">
											<input id="tinggi" type="text" value="{{$item->tinggi}}" disabled>
										</div>
									</div>
									<div class="input-wrap row">
										<label for="berat" class="col-3 col-form-label">Berat(KG)</label>
										<div class="col-9">
											<input id="berat" type="text" value="{{$item->berat}}" disabled>
										</div>
									</div>
									<div class="input-wrap row">
										<label for="ntob" class="col-3 col-form-label">NTOB</label>
										<div class="col-9">
											<input id="ntob" type="text" value="{{$item->ntob}}" disabled>
										</div>
									</div>
									<div class="input-wrap row">
										<label for="imunisasi" class="col-3 col-form-label">Imunisasi</label>
										<div class="col-9">
											<input id="imunisasi" type="text" value="{{$item->imunisasi}}" disabled>
										</div>
									</div>
									<div class="input-wrap row">
										<label for="keterangan" class="col-3 col-form-label">Ket</label>
										<div class="col-9">
											<input id="keterangan" type="text" value="{{$item->ket}}" disabled>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="separator-small"></div>
						@endforeach
						@endif
					</div>
				</div>

			</div>
		</div>
		<!-- end profile -->
        
@endsection