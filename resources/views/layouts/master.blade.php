<!DOCTYPE html>
<html>
	<head>
		<title>
			
			@yield('title', 'Fridge Buffet')

		</title>

		<meta charset='utf-8'>
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <link rel="stylesheet" type="text/css" href="css/bootstrapUnited.css">
	    <link rel="stylesheet" type="text/css" href="css/main.css">
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
					<li {{ (Request::is('chow') ? 'class=active' : '') }}><a href="/chow">Chow</a></li>
					<!--
		            <li {{ (Request::is('smoothies') ? 'class=active' : '') }}><a href="/smoothies">Smoothies</a></li>
		            <li {{ (Request::is('cocktails') ? 'class=active' : '') }}><a href="/cocktails">Cocktails</a></li>
		            -->
		            <li {{ (Request::is('share') ? 'class=active' : '') }}><a href="/share">Recipe Share</a></li>
		        </li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="/">Sign Up!</a></li>
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<span class="caret"></span></a>
					<ul id="login-dp" class="dropdown-menu">
						<li>
							<div class="row">
								<div class="col-md-12">
									Login via
									<div class="social-buttons">
										<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
										<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Google</a>
									</div>
		                            or
									 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
											<div class="form-group">
												 <label class="sr-only" for="exampleInputEmail2">Email address</label>
												 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
											</div>
											<div class="form-group">
												 <label class="sr-only" for="exampleInputPassword2">Password</label>
												 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
		                                         <div class="help-block text-right"><a href="">Forget the password ?</a></div>
											</div>
											<div class="form-group">
												 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
											</div>
											<div class="checkbox">
												 <label>
												 <input type="checkbox"> keep me logged-in
												 </label>
											</div>
									 </form>
								</div>
								<div class="bottom text-center">
									New here ? <a href="#"><b>Join Us</b></a>
								</div>
							</div>
						</li>
					</ul>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
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