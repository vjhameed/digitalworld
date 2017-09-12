<link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/fonts/glyphicons-halflings-regular.woff2">
<link href="<?php echo base_url() ?>/assets/css/navbar.css" rel="stylesheet">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">



<style>
	* {
		font-family: 'Lato';
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
				<li><a href="<?php echo site_url() ?>/auth">Home</a></li>
				<li><a href="<?php echo site_url() ?>/auth/terms">Terms Of Service</a></li>
				<li><a href="<?php echo site_url() ?>/auth/marketing">Marketing Plan</a></li>
				<li><a href="<?php echo site_url() ?>/auth/works">How It Works</a></li>
				<li><a href="#">Store Comming Soon</a></li>
			</ul>
		</div>
	</div><!--/.nav-collapse -->
</nav>
<div class="row-fluid text-center" style="margin:10px auto;width:50%;margin-top:10%;">
	<a href="#"><img width="120" src="<?php echo base_url() ?>/assets/html/assests/Pastel Orange at the Sun.png"
								class="img-responsive img-circle" style="margin:10px auto"></a>
	<form method="post" enctype="multipart/form-data" action="<?php echo site_url() ?>/auth/create_user"
		  class="text-center form-horizontal">
		<fieldset>
			<legend>Sign Up
				<div id="infoMessage" class="bg bg-danger text-danger"><?php echo $message; ?>
					<p><?php echo lang('create_user_subheading'); ?></p>
				</div>
			</legend>
			<div class="form-group">
				<label for="" class="col-lg-2 col-lg-offset-1  control-label">Refferal Id</label>
				<div class="col-lg-6">
					<input type="number" name="refid" class="form-control" id="refid" placeholder="Referral id if any">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-lg-2 col-lg-offset-1 control-label">First Name</label>
				<div class="col-lg-6">
					<input type="text" required maxlength=30 name="first_name" class="form-control" id="first_name"
						   placeholder="First Name">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-lg-2 col-lg-offset-1 control-label">Last Name</label>
				<div class="col-lg-6">
					<input type="text" required maxlength=30 name="last_name" class="form-control" id="last_name"
						   placeholder="Last Name">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-lg-2 col-lg-offset-1 control-label">UserName</label>
				<div class="col-lg-6">
					<input type="text" required minlength=5 maxlength=30 name="identity" class="form-control"
						   id="username" placeholder="UserName">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-lg-2 col-lg-offset-1 control-label">Country</label>
				<div class="col-lg-6">
					<input type="text" required name="country" class="form-control" id="country" placeholder="Country">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-lg-2 col-lg-offset-1 control-label">City</label>
				<div class="col-lg-6">
					<input type="text" required name="city" class="form-control" id="city" placeholder="City">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-lg-2 col-lg-offset-1 control-label">Profile Image</label>
				<div class="col-lg-6">
					<input type="file" name="company" value="">max size 2 mb (gif,png,jpg,jpeg)
				</div>
			</div>
			<div class="form-group package">
				<label for="" class="col-lg-2 col-lg-offset-1 control-label">Package</label>
				<div class="col-lg-6">
					<input type="radio" required name="package" class="form-control" value="basic" id="package">Rs 200
					Basic
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-lg-2 col-lg-offset-1 control-label">Phone Number</label>
				<div class="col-lg-6">
					<input type="text" required maxlength=15 name="phone" class="form-control" id="phone_no"
						   placeholder="Phone No">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-lg-2 col-lg-offset-1 control-label">Email</label>
				<div class="col-lg-6">
					<input type="email" required name="email" class="form-control" id="email" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="col-lg-2 col-lg-offset-1 control-label">Password</label>
				<div class="col-lg-6">
					<input type="password" required minlength=8 class="form-control" name="password" id="password"
						   placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="col-lg-2 col-lg-offset-1 control-label">Password Confirm</label>
				<div class="col-lg-6">
					<input type="password" required class="form-control" name="password_confirm" id="password_confirm"
						   placeholder="Enter Password Again">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="col-lg-5 col-lg-offset-2 control-label"><input type="radio" required>
					By Clicking Sign Up u agree to our <a href="<?php echo site_url() ?>/auth/terms">Terms Of Service</a></label>
			</div>
			<div class="form-group">
				<div class="col-lg-6 col-lg-offset-2">
					<input type="submit" class="btn btn-primary"/>
				</div>
			</div>
		</fieldset>
	</form>
</div>

<div class="modal fade">
	<div class="modal-dialog">
		<h2>Account Activation</h2>
		<div class="modal-content">
			<div class="modal-body">
				<p style="font-size:18px">Your Account will be activated when we recive the payment of the selected
					package
					<small style="font-weight:bold">Note (Contact us through our <a target="blank" href="<?php echo site_url() ?>/auth/contact">contact form</a>
						with the trxid,cnic no,phone no,5 digit code,your email that u have entered to register here and your name
						<span class="text-danger bg-danger">(Send the cost of the package u have selected without the charges of easypaisa,mobicash etc)</span>)
					</small>
				</p>
				<h4 style="font-weight:bold">Payment Method :
					<span class="bg-info text-info" style="font-weight:600">EasyPaisa,Ubl Omni,Mobi Cash,Jazz Cash</span></h4>
				<h4 style="font-weight:bold">Telenor No # :<span style="font-weight:600">0341-466-659-7</span></h4>
				<h4 style="font-weight:bold">Jazz No # :<span style="font-weight:600">0303-417-670-0</span></h4>
				<h4 style="font-weight:bold">Cnic # :<span style="font-weight:600">35404-6259260-9</span></h4>
				<h2>Thank You</h2>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--footer start from here-->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 footerleft ">
				<div class="logofooter">Digital World</div>
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
	$(".package").click(() => {
		console.log("click");
		$('.modal')
			.prop('class', 'modal fade') // revert to default
			.addClass($(this).data('direction'));
		$('.modal').modal('show');
	});

	$("#refid").blur(() => {

		$.get("<?php echo site_url()?>/auth/refferal/" + $("#refid").val(), (data) => {
			if (data == true) {
				console.log("contine");
				// continue on the the parent has less than 5 refs
			}
			else if (data == false) {
				$("#refid").val("");
				$("#refid").attr("placeholder", "The user already has 5 refferals");
				$("#refid").attr({disabled: "disabled"});
			}
		});


	});
</script>
</body>
