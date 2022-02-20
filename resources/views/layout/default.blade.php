<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" href="images/favicon.png">
	<title>Maxui</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">

	<!-- <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/fakeLoader.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/swiper.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"> -->

	@if(!empty(config('kmsdigital.public.pagelevel.css.'.$action))) 
		@foreach(config('kmsdigital.public.pagelevel.css.'.$action) as $style)
				<link rel="stylesheet" href="{{ URL::asset($style) }}" />
		@endforeach
	@endif

</head>
<body>
	
    <!-- loader -->
    <div id="fakeLoader"></div>
    <!-- end loader -->
    
	@if($header == 'header')
		@include('elements.header')
	@elseif($header == 'header-title')
		@include('elements.header-title')
	@elseif($header == 'header-back')
		@include('elements.header-back')
	@elseif($header == 'header-noback')
		@include('elements.header-noback')
	@endif


	@if($bottom == true)
    	@include('elements.bottom')
	@endif


    @include('elements.sidebar')

	<div class="page-wrapper">
    
	@yield('content')

	@if($footer == true)
    	@include('elements.footer')
	@endif

	
	<!-- separator -->
	<div class="separator-large"></div>
	<!-- end separator -->

	</div>


    <!-- scripts -->
    <!-- <script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/fakeLoader.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/jquery.big-slide.js"></script>
	<script src="js/main.js"></script> -->

	@if(!empty(config('kmsdigital.public.pagelevel.js.'.$action)))
	@foreach(config('kmsdigital.public.pagelevel.js.'.$action) as $script)
			<script src="{{ URL::asset($script) }}"></script>
	@endforeach
	@endif

</body>
</html>