<html>
    <head>
        <title>@yield('title')</title>
		<!--Import materialize.css-->
      	<link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<link type="text/css" rel="stylesheet" href="{{ asset('css/layout.css') }}"  media="screen,projection"/>
		<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		@yield('css')
    </head>
    <body>
		<nav id='nav-fixed' class='is-hidden'>
			<div class="nav-wrapper">
				<a href="#" class="brand-logo">NCU Fresh</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="#">Link1</a></li>
					<li><a href="#">Link2</a></li>
					<li><a href="#">Link3</a></li>
					<li><a href="#">Link4</a></li>
					<li><a href="#">Link5</a></li>
					<li><a href="#">Link6</a></li>
					<li><a href="#">Link7</a></li>
					<li><a href="#">Link8</a></li>
				</ul>
			</div>
		</nav>
        <div id='container' class="container z-depth-2">
			<div id='banner'>
				<div class='row banner-menu'>
					<div class='col s2'><a class='waves-effect waves-light btn grey darken-3'>1</a></div>
					<div class='col s2'><a class='waves-effect waves-light btn grey darken-3'>2</a></div>
					<div class='col s4'>1</div>
					<div class='col s2'><a class='waves-effect waves-light btn grey darken-3'>4</a></div>
					<div class='col s2'><a class='waves-effect waves-light btn grey darken-3'>4</a></div>
				</div>
				<div id='banner-img' class='row'>
				</div>
				<div class='row banner-menu'>
					<div class='col s3'><a class='waves-effect waves-light btn grey darken-3'>1</a></div>
					<div class='col s3'><a class='waves-effect waves-light btn grey darken-3'>2</a></div>
					<div class='col s3'><a class='waves-effect waves-light btn grey darken-3'>3</a></div>
					<div class='col s3'><a class='waves-effect waves-light btn grey darken-3'>4</a></div>
				</div>
			</div>
			<div id='content'>
            	@yield('content')
			</div>
        </div>
		<footer>
			<div id='copyright'>YOLO© 2014 Copyright Text</div>
		</footer>
		<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/layout.js') }}"></script>
		@yield('js')
    </body>
</html>
