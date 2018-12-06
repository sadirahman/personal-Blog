<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>TurismX</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div id="app">
	@include('inc.navbar')
	<div class="container">
		@if(Request::is('/home'))
		@include('inc.showcase')
		@endif
		<div class="row">
			<div class="col-md-8 col-lg-8">
			
			@include('inc.messages')
				@yield('content')

			</div>
			<div class="col-md-4 col-lg-4">
				
				@include('inc.sidebar')
			</div>

		</div>
		


	</div>
  </div>
<footer id="footer" class="text-center" position:fixed; left:0; bottom:0; width:100;text-align:center>
<p id="copyright">&copy; 2017 <a href="#">Sadi Rahman</a> | TurismX by <a href="https://www.facebook.com/Sadi.rahman13">SADI</a> based entirely on <a href="http://127.0.0.1:8000/home">TurismX.com</a></p>
		
	</footer>

 <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>