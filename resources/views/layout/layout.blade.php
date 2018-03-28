<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

	<!-- FontAwesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />

	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />
	
	@stack('css')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js" integrity="sha256-zBy1l2WBAh2vPF8rnjFMUXujsfkKjya0Jy5j6yKj0+Q=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular-route.min.js" integrity="sha256-E6XubcgT4a601977ZZP4Yw/0UCB2/Ex+Bazst+JRw1U=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular-animate.min.js" integrity="sha256-1XBp/KwjxhvrtZiQ+ecAScAyLPe4OStn2lMX0vxTq9U=" crossorigin="anonymous"></script>

	<script src="{{asset('js/app.js')}}"></script>
	<script src="{{asset('js/controller/QuitandaController.js')}}"></script>

</head>

<body ng-app="app" ng-controller="QuitandaController">

	@yield('content')

	<div class="container-fluid bg-dark">
		<div class="row justify-content-center pt-5 pb-5">
			<img class="mg-fluid footer-img" src="http://www.quitanda.com/wp/wp-content/uploads/2016/08/quitanda-logo-branco.png" style/>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" />


	@stack('scripts')
</body>

</html>