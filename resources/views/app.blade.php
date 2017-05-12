<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Employee Management - NearSource</title>
    <meta name="Employee Management - NearSource">
    <link href="{{asset('assets/bower_components/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">    
    <link href="{{asset('assets/bower_components/normalize.css/normalize.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
<body>
	<header>
        <div class="logo">
            <img class="logo_nearsource" src="{{asset('assets/imgs/logo.jpg')}}"> 
        </div>
        <div class="tittle">
            <p class="ptittle">Employee Management</p>
        </div>
    </header>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a class="navbar-brand logout" href="{{route('logout')}}">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
