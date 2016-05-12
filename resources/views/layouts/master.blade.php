<!DOCTYPE html>
<html>
	<head>
		<title>
			
			@yield('title', 'Fridge Buffet')

		</title>

		<meta charset='utf-8'>
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <link rel="stylesheet" type="text/css" href="/css/bootstrapUnited.css">
	    <link rel="stylesheet" type="text/css" href="/css/main.css">
	    <link rel="shortcut icon" href="/favicon.ico" /> 

		@yield('head')

	</head>
	
	<body>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/">Fridge Buffet</a>
		    </div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li {{ (Request::is('share') ? 'class=active' : '') }}><a href="/share">Recipe Share</a></li>
				</ul>
				@if(Auth::check())
					<ul class="nav navbar-nav navbar-right">
						<li><a>Welcome,  {{ Auth::user()->name }}!</a></li>
						<li><a href="/logout">Log Out!</a></li>
					</ul>
				@else
					<ul class="nav navbar-nav navbar-right">
						<li><a href="/register">Sign Up!</a></li>
						<li><a href="/login">Log In!</a></li>
					</ul>
				@endif
		    </div>
		  </div>
		</nav>

	    @if(Session::get('message') != null)
	        <div class='alert alert-danger'>{{ Session::get('message') }}</div>
	    @endif

		<section>

	    	@yield('content')

	    </section>

	    <footer>
        <div class="row">
          <div class="col-lg-12">

            <ul class="list-unstyled">
              <li class="pull-right"><a href="#top">Back to top</a></li>
              <li class="li-footer"><a href="http://beta.johnlincoln.me">beta.johnlincoln.me</a></li>
              <li class="li-footer"><a href="https://github.com/jlincoln88/P4">github</a></li>
            </ul>
            <p>Made by John Lincoln - check out my <a href="http://beta.johnlincoln.me">DWA 15 Portfolo</a> for links to all of my projects.</p>

          </div>
        </div>

      	</footer>

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	    @yield('body')

    </body>
</html>