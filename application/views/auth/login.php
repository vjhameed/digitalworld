<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/land.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/navbar.css">
<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="<?php echo base_url() ?>/assets/css/glyphicons-halflings-regular.woff2">
<!-- Google Fonts -->
<link rel="stylesheet"
	  href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic"/>
<style>
	.logEr {
		padding: 5px;
		color: red;
	}

	.mynavbar {
		padding: 10px 5px;
	}

	* {
		font-family: 'Lato';
	}

	.logsu {
		padding: 5px;
	}
</style>

<body>

<nav class="navbar  mynavbar navbar-default" id="my-nav">
	<!-- Fixed navbar -->
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand"><img src="<?php echo base_url() ?>/assets/html/assests/Pastel Orange at the Sun.png" class="img-responsive" width="40"></a>
			<a class="navbar-brand" href="#">Digital World</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Home</a></li>
				<li><a class="log" href="#">Login</a></li>
				<li><a href="<?php echo site_url() ?>/auth/create_user">Register</a></li>
				<li><a href="<?php echo site_url() ?>/auth/marketing">Marketing Plan</a></li>
				<li><a href="#">Store Comming Soon</a></li>
			</ul>
		</div>
	</div><!--/.nav-collapse -->
</nav>

<br>
<div class="container" id="wrapper">
	<div class="row">
		<div class="col-sm-1 col-md-3">
			<div id="blog-sidebar">
				<div class="welcome-msg col-md-10 asideleft text-center">
					<a href="#" class="log btn access"><span class="glyphicon glyphicon-user"></span> Log In</a>
					<a href="<?php echo site_url() ?>/auth/create_user" class="btn access"><span
							class="glyphicon glyphicon-registration-mark"></span> Register</a>
					<a href="<?php echo site_url() ?>/auth/contact" class="btn access"><span
							class="glyphicon glyphicon-comment"></span> Contact Us</a>
					<button type="" class="btn access btn-lg btn-success">How It Works</button>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-8 blog-main">
			<div id="blog-main">
				<div class="col-md-12 newLink">
					<h1 class="message text-danger bg-danger"><?php echo $message; ?></h1>
					<img src="<?php echo base_url() ?>/assets/images/bghome.jpg" class="img-responsive banner" alt="">
				</div>

				<div class="mainContent col-md-3 col-xs-5 col-sm-5" style="margin-left: 6em">
					<h2 class="text-center" style="background-color: black;font-size: 2em;padding: 1em;margin-top: 0px;color: white;"><?php echo $data['users'] + 100?></h2>
					<div class="mainContentDescription">
						<div class="row sellerInfo">
							<div class="col-md-12">
								<h3><a href="#">Users Signed up today</a></h3>
							</div>
							<div class="col-md-12">
								<div class="gig-end">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="mainContent col-md-3 col-xs-5 col-sm-5">
					<h2 class="text-center" style="background-color: black;font-size: 2em;padding: 1em;margin-top: 0px;color: white;"><?php echo $data['users'] + 500?></h2>
					<div class="mainContentDescription">
						<div class="row sellerInfo">
							<div class="col-md-12">
								<h3><a href="#">Total Users Signed Up</a></h3>
							</div>
							<div class="col-md-12">
								<div class="gig-end">
								</div>
							</div>

						</div>
					</div>
				</div>


				<div class="mainContent col-md-3 col-xs-5 col-sm-5">
					<h2 class="text-center" style="background-color: black;font-size: 2em;padding: 1em;margin-top: 0px;color: white;"><?php echo $data['amount']?></h2>
					<div class="mainContentDescription">
						<div class="row sellerInfo">
							<div class="col-md-12">
								<h3><a href="#">Total WithDrawals </a></h3>
							</div>
							<div class="col-md-12">
								<div class="gig-end">
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
</div><!-- /.container -->

<div class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<form method="post" class="form-horizontal">
					<fieldset>
						<legend class="text-center">Log In<br><span id="logError"></span></legend>
						<div class="form-group">
							<label for="inputEmail" class="col-lg-2 control-label">User Name</label>
							<div class="col-lg-10">
								<input type="email" required class="form-control" name="identity" id="inputEmail"
									   placeholder="User Name">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword" class="col-lg-2 control-label">Password</label>
							<div class="col-lg-10">
								<input type="password" required class="form-control" name="password" id="inputPassword"
									   placeholder="Password">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember" id="remember" value="1">
										Remember Me
										<a href="forgot_password">Forgot Password</a>
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-10 col-lg-offset-2">
								<button id="login" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--footer start from here-->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 footerleft ">
				<div class="logofooter">Digital World Shop</div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
				<p><i class="fa fa-map-pin"></i>795 Folsom Ave, Suite 600 San Francisco, CA 94107 P: (123) 456-7890</p>
				<p><i class="fa fa-phone"></i> Phone : +91 9999 878 398</p>
				<p><i class="fa fa-envelope"></i> E-mail : info@webenlance.com</p>
			</div>
			<div class="col-md-2 col-sm-6 paddingtop-bottom">
				<h6 class="heading7">GENERAL LINKS</h6>
				<ul class="footer-ul">
					<li><a href="<?php echo site_url() ?>/auth/terms">Terms & Conditions</a></li>
					<li><a href="<?php echo site_url() ?>/auth/marketing">Marketing Plan</a></li>
					<li><a href="<?php echo site_url() ?>/auth/works">How It Works</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!--footer start from here-->

<div class="copyright">
	<div class="container">
		<div class="col-md-6">
			<p>© 2017 - All Rights with GetOnlineTask</p>
		</div>
	</div>
</div>

<script src="<?php echo base_url() ?>/assets/js/jquery-3.2.0.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/bootstrap.js"></script>
<script>
	$('.log').click(function () {
		$('.modal')
			.prop('class', 'modal fade') // revert to default
			.addClass($(this).data('direction'));
		$('.modal').modal('show');
	});

	$("#login").click((e) => {
		e.preventDefault();
		$.post("<?php echo site_url()?>/auth/checkCredentional", {
			remember: $("#remember").val(),
			identity: $("#inputEmail").val(),
			password: $("#inputPassword").val()
		}, (data) => {
			if (data === "success") {
				$("#logError").text("You will be Logged in a while").attr("class", "logsu bg bg-success");
				window.location.reload();
			}
			else {
				$("#logError").text("Username or Password is Incorrect").attr("class", "logEr bg bg-danger");
			}
		})
	});


	if ($(window).width() < 500) {
		console.log("less");
		$(".welcome-msg").css("display", "none");

	}


</script>
</body>
