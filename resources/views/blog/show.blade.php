{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
<div class="container">
    <div class="row">
		<div class="col-12">
			<img src="{{asset('storage/'.$blog->gambar)}}" alt="image-demo">
		</div>
	</div>
    <div class="row mt-4">
		<div class="col-12">
        <h4 class="mb-3">{{$blog->judul}}</h4>
            {!! $blog->isi !!}
        </div>
	</div>
</div>

<!-- separator -->
<div class="separator-large"></div>
			<!-- end separator -->

			<div class="container  bg-lightblue">
			<div class="separator-medium"></div>
			<!-- section title -->
			<div class="section-title">
				<h6>Artikel Terbaru</h6>
			</div>
			<!-- end section title -->
			@foreach ($latest as $item)
			<div class="container">
				<div class="row">
					<div class="col-4">
						<div class="img">
							<img src="{{asset('storage/'.$item->gambar)}}" alt="image-demo">
						</div>
					</div>
					<div class="col-8">
						<div class="text">
							<h5><a href="/blog/{{$item->id}}">{{$item->judul}}</a></h5>
							<p>{{$item->tanggal}}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="separator-medium"></div>
			@endforeach
			</div>
@endsection