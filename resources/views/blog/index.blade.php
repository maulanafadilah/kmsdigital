{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<!-- section title -->
			@if (!empty($blog))
			@foreach ($blog as $item)
			<div class="separator-small"></div>
			
			<div class="container">
				<div class="card card-image card-outline">
					<a href="/blog/{{$item->id}}">
					<img src="{{asset('storage/'.$item->gambar)}}" class="card-img" alt="image-demo">
					<div class="card-body">
						<h5 class="card-title">{{$item->judul}}</h5>
						<!-- <p class="card-text">
						</p> -->
						<div class="card-date"><i class="icon ion-ios-calendar"></i> {{$item->tanggal}}</div>
					</div>
					</a>
				</div>
			</div>
			<div class="separator-small"></div>


			@endforeach
			@endif

			
				<div class="d-flex justify-content-center">
				{{ $blog->links() }}
				</div>




@endsection