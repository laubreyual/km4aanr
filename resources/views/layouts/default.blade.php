<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		@yield('styles')
		<style>
			body {
				display: flex;
				min-height: 100vh;
				flex-direction: column;
			}

			main {
				flex: 1 0 auto;
			}
		</style>
		<title>KM4AANR: @yield('title')</title>
	</head>
	<body>
		<nav>
			<div class="nav-wrapper blue-grey">
				<a href="{{url('/')}}" class="brand-logo">&nbsp;KM4AANR</a>
				<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="{{url('/')}}">Inventory</a></li>
					<li><a href="{{url('/analytics')}}">Analytics</a></li>
				</ul>
			</div>
  		</nav>
		
		<ul class="sidenav" id="mobile-demo">
			<li><a href="{{url('/')}}">Inventory</a></li>
			<li><a href="{{url('/analytics')}}">Analytics</a></li>
		</ul>

		<main>
			@yield('content')
		</main>

		<footer class="page-footer blue-grey">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">Enhancing the AANR Knowledge Network</h5>
						<p class="grey-text text-lighten-4">An online system which caters to the collaboration, storage, archiving, and sharing of AANR publications</p>
					</div>
					<div class="col l4 offset-l2 s12">
						<!-- <h5 class="white-text">Links</h5>
						<ul>
							<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
						</ul> -->
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					© 2019 All Rights Reserved.
					<!-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> -->
				</div>
			</div>
		</footer>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" integrity="sha256-U/cHDMTIHCeMcvehBv1xQ052bPSbJtbuiw4QA9cTKz0=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.sidenav').sidenav();
			});
		</script>
		@yield('scripts')
	</body>
</html>