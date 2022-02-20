{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
	
<div class="separator-small"></div>
			<div class="list-view list-separate">
				<ul>
				@if (!empty($balita))
				@foreach ($balita as $item)
					<li class="list-item">
						<div class="list-media media-circle">
							<i class="icon ion-ios-color-palette"></i>
						</div>
						<div class="list-label">
							<div class="list-title"><a href="/kms/{{$item->id}}">{{$item->nama_lengkap}}</a></div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</li>
				@endforeach
				@endif
				</ul>
			</div>

@endsection