<head>
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style/roommate.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="resources/jquery-3.2.1.min.js"></script>
	<title>RoommateFinderDB</title>
</head>

<div>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="home.php" class="navbar-brand"><span id="sn1">Roommate</span><span id="sn2">Finder</span><span id="sn3">DB</span></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<div class="nav navbar-nav">
					<li><a class="navb" href="about.php">About</a></li>
					<li><a id="catButton" href="#">Categories</a></li>
				</div>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign-In or Sign-Up</a>
						<ul id="login-dp" class="dropdown-menu">
							<li>
								<div class="row">
									<div class="col-md-12">
										<form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
											<div class="form-group">
												<label class="sr-only" for="exampleInputEmail2">Email address</label>
												<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
											</div>
											<div class="form-group">
												<label class="sr-only" for="exampleInputPassword2">Password</label>
												<input type="password" class="form-control" idc="exampleInputPassword2" placeholder="Password" required>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-primary btn-block">Sign In</button>
												<button type="submit" class="btn btn-success btn-block">Sign Up</button>
											</div>

										</form>
									</div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="categories">
		<div id="box">
			<div id="coll">
				<ul>
					<li><a href="students.php">Students</a></li>
					<li><a href="neighborhoods.php">Neighborhoods</a></li>
					<li><a href="residences.php">All Residences</a></li>
					<li><a href="houses.php">Houses</a></li>
					<li><a href="dorms.php">All Dorms</a></li>
					<li><a href="privatedorms.php">Private Dorms</a></li>
					<li><a href="schooldorms.php">School Dorms</a></li>
					<li><a href="schools.php">Schools</a></li>
				</ul>
			</div>
		</div>
		<script type="text/javascript" src="resources/homemate.js"></script>
	</div>
</div>