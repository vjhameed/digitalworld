<link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/fonts/glyphicons-halflings-regular.woff2">
<link href="<?php echo base_url() ?>/assets/css/navbar.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/css/profile.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/css/glyphicons-halflings-regular.woff2">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">




<style>
	.mynavbar {
		background-color: black;
		padding-top: 0px;
	}

	* {
		font-family: 'Lato';
	}

</style>
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
				<li><a href="<?php echo site_url();?>/auth/login">Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
					   aria-expanded="false">About Us<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">How it Works</a></li>
						<li><a href="<?php echo site_url() ?>/auth/contact">Contact Us</a></li>
					</ul>
				</li>
				<li><a href="<?php echo site_url() ?>/auth/logout">Logout</a></li>
				<li><a href="#">Store Comming Soon</a></li>
			</ul>
		</div>
	</div><!--/.nav-collapse -->
</nav>
<div class="col-md-3 col-xs-12 leftside ">
	<img src="<?php echo $company['src'] ?>" class="profileimg img-responsive img-thumbnail">
	<div class="row">
		<div class="userData col-md-11">
			<br>
			<form method="post" enctype="multipart/form-data" action="<?php echo site_url() . "/" . uri_string() ?>"
				  class="text-center form-horizontal">
				<fieldset>
					<legend>Update Your Profile
					</legend>
					<div class="form-group">
						<label for="" class="col-lg-2 col-sm-2 control-label">Profile pic</label>
						<div class="col-lg-10 col-sm-6">
							<input type="file" name="company" class="form-control" id="first_name">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-lg-2  col-sm-2 control-label">First Name</label>
						<div class="col-lg-10 col-sm-6">
							<input type="text" name="first_name" class="form-control" id="first_name"
								   value="<?php echo $first_name['value'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-lg-2 col-sm-2 control-label">Last Name</label>
						<div class="col-lg-10 col-sm-6">
							<input type="text" name="last_name" class="form-control" id="last_name"
								   value="<?php echo $last_name['value'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-lg-2 col-sm-2 control-label">User Name</label>
						<div class="col-lg-10 col-sm-6">
							<input type="text" name="username" class="form-control" id="username"
								   value="<?php echo $username; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-lg-2 col-sm-2 control-label">Country</label>
						<div class="col-lg-10 col-sm-6">
							<input type="text" name="country" class="form-control" id="country"
								   value="<?php echo $country; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-lg-2 col-sm-2 control-label">City</label>
						<div class="col-lg-10 col-sm-6">
							<input type="text" name="city" class="form-control" id="City" value="<?php echo $city; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-lg-2 col-sm-2 control-label">Phone Number</label>
						<div class="col-lg-10 col-sm-6">
							<input type="number" name="phone" class="form-control" id="phone_no"
								   value="<?php echo $phone['value'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-lg-2 col-sm-2 control-label">Password</label>
						<div class="col-lg-10 col-sm-2">
							<input type="password" minlength="8" class="form-control" name="password" id="password">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-lg-2 col-sm-2 control-label">Password Confirm</label>
						<div class="col-lg-10 col-sm-6">
							<input type="password" minlength="8" class="form-control" name="password_confirm"
								   id="password_confirm">
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-1 col-sm-6">
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="col-md-9 col-sm-12 dashboard">
		<div class="col-md-5"><h2 class="dash">DashBoard</h2></div>
		<div class="col-md-8"><h4 class="amount">Refferal Id : <?php echo $refid ?> </h4></div>
		<div class="col-md-8"><h4 class="amount">Amount in Account </h4></div>
		<div class="col-md-4 text-right text-success"><span class="afigure">
				<span
					class="afig" style="color: forestgreen"><?php $cash = $amount[0]['Amount'];echo $amount[0]['Amount']; ?></span><span
					style="font-size:0.8em"> Rs</span></span></div>
		<div class="col-md-8">
			<h4 class="amount">WithDraw Amount
				<small>(note:minimum limit to withdraw amount is 1000 Rs)</small>
			</h4>
		</div>
		<div class="col-md-4 text-right">
			<button class="btn withm btn-lg btn-success">With Draw</button>
		</div>
		<div class="col-md-8">
			<h4 class="amount">
				<small>(note:In refferals red means inactive and green means active)</small>
			</h4>
		</div>
		<br>
	</div>


	<?php if (!empty($refs[0])) { ?>
		<h2 class="text-center text-info">First Level Refferals</h2>
		<h3 class="text-center text-info">First Level Earnings : <?php echo $levelE[0]['first'];?> Rs</h3>
		<div class="col-md-9 col-sm-12">
			<?php foreach ($refs[0] as $key => $value) { ?>
				<div class="col-md-2 col-sm-2 mainCont totalLinks">

					<div class="link">
						<img class="postimage"
							 src="<?php echo base_url() ?>assets/images/<?php echo $value['company'] ?>"
							 alt="Link Image">
						<h3>Name :
							<small><?php echo $value['first_name'] . $value['last_name']; ?></small>
						</h3>
						<h3>User Name :
							<small><?php echo $value['username']; ?></small>
						</h3>
						<h3>Email :
							<small><?php echo $value['email']; ?></small>
						</h3>
						<h3>Country :
							<small><?php echo $value['country']; ?></small>
						</h3>
						<h6 class="text-right">Reffered By :
							<small><?php echo $value['refid']; ?><?php if ($value['active'] == 0) {
									echo '<span class="btn btn-default btn-circle-red"></span>';
								} else {
									echo '<span class="btn btn-default btn-circle-green"></span>';
								} ?>
							</small>
						</h6>
					</div>
				</div>
			<?php }} ?>
		</div>

	<?php if (!empty($refs[1])) { ?>
	<h2 class="text-center text-info">Second Level Refferals</h2>
	<h3 class="text-center text-info">Second Level Earnings : <?php echo $levelE[0]['second'];?> Rs</h3>
	<div class="col-md-9 col-sm-12">
		<?php foreach ($refs[0] as $key => $value) { ?>
			<div class="col-md-2 col-sm-2 mainCont totalLinks">

				<div class="link">
					<img class="postimage"
						 src="<?php echo base_url() ?>assets/images/<?php echo $value['company'] ?>"
						 alt="Link Image">
					<h3>Name :
						<small><?php echo $value['first_name'] . $value['last_name']; ?></small>
					</h3>
					<h3>User Name :
						<small><?php echo $value['username']; ?></small>
					</h3>
					<h3>Email :
						<small><?php echo $value['email']; ?></small>
					</h3>
					<h3>Country :
						<small><?php echo $value['country']; ?></small>
					</h3>
					<h6 class="text-right">Reffered By :
						<small><?php echo $value['refid']; ?><?php if ($value['active'] == 0) {
								echo '<span class="btn btn-default btn-circle-red"></span>';
							} else {
								echo '<span class="btn btn-default btn-circle-green"></span>';
							} ?>
						</small>
					</h6>
				</div>
			</div>
		<?php }} ?>
	</div>

	<?php if (!empty($refs[2])) { ?>
		<h2 class="text-center text-info">Third Level Refferals</h2>
		<h3 class="text-center text-info">Third Level Earnings : <?php echo $levelE[0]['third'];?> Rs</h3>
		<div class="col-md-offset-3 col-md-9 col-sm-12">
			<?php foreach ($refs[2] as $key => $value) { ?>
				<div class="col-md-2 col-sm-2 mainCont totalLinks">

					<div class="link">
						<img class="postimage"
							 src="<?php echo base_url() ?>assets/images/<?php echo $value['company'] ?>"
							 alt="Link Image">
						<h3>Name :
							<small><?php echo $value['first_name'] . $value['last_name']; ?></small>
						</h3>
						<h3>User Name :
							<small><?php echo $value['username']; ?></small>
						</h3>
						<h3>Email :
							<small><?php echo $value['email']; ?></small>
						</h3>
						<h3>Country :
							<small><?php echo $value['country']; ?></small>
						</h3>
						<h6 class="text-right">Reffered By :
							<small><?php echo $value['refid']; ?><?php if ($value['active'] == 0) {
									echo '<span class="btn btn-default btn-circle-red"></span>';
								} else {
									echo '<span class="btn btn-default btn-circle-green"></span>';
								} ?>
							</small>
						</h6>
					</div>
				</div>
			<?php }} ?>
		</div>
	<?php if (!empty($refs[3])) { ?>
		<h2 class="text-center text-info">Fourth Level Refferals</h2>
		<h3 class="text-center text-info">Fourth Level Earnings : <?php echo $levelE[0]['fourth'];?> Rs</h3>
		<div class="col-md-offset-3 col-md-9 col-sm-12">
			<?php foreach ($refs[3] as $key => $value) { ?>
				<div class="col-md-2 col-sm-2 mainCont totalLinks">

					<div class="link">
						<img class="postimage"
							 src="<?php echo base_url() ?>assets/images/<?php echo $value['company'] ?>"
							 alt="Link Image">
						<h3>Name :
							<small><?php echo $value['first_name'] . $value['last_name']; ?></small>
						</h3>
						<h3>User Name :
							<small><?php echo $value['username']; ?></small>
						</h3>
						<h3>Email :
							<small><?php echo $value['email']; ?></small>
						</h3>
						<h3>Country :
							<small><?php echo $value['country']; ?></small>
						</h3>
						<h6 class="text-right">Reffered By :
							<small><?php echo $value['refid']; ?><?php if ($value['active'] == 0) {
									echo '<span class="btn btn-default btn-circle-red"></span>';
								} else {
									echo '<span class="btn btn-default btn-circle-green"></span>';
								} ?>
							</small>
						</h6>
					</div>
				</div>
			<?php }} ?>
		</div>
	<?php if (!empty($refs[4])) { ?>
		<h2 class="text-center text-info">Fifth Level Refferals</h2>
		<h3 class="text-center text-info">Fifth Level Earnings : <?php echo $levelE[0]['fifth'];?> Rs</h3>
		<div class="col-md-offset-3 col-md-9 col-sm-12">
			<?php foreach ($refs[4] as $key => $value) { ?>
				<div class="col-md-2 col-sm-2 mainCont totalLinks">

					<div class="link">
						<img class="postimage"
							 src="<?php echo base_url() ?>assets/images/<?php echo $value['company'] ?>"
							 alt="Link Image">
						<h3>Name :
							<small><?php echo $value['first_name'] . $value['last_name']; ?></small>
						</h3>
						<h3>User Name :
							<small><?php echo $value['username']; ?></small>
						</h3>
						<h3>Email :
							<small><?php echo $value['email']; ?></small>
						</h3>
						<h3>Country :
							<small><?php echo $value['country']; ?></small>
						</h3>
						<h6 class="text-right">Reffered By :
							<small><?php echo $value['refid']; ?><?php if ($value['active'] == 0) {
									echo '<span class="btn btn-default btn-circle-red"></span>';
								} else {
									echo '<span class="btn btn-default btn-circle-green"></span>';
								} ?>
							</small>
						</h6>
					</div>
				</div>
			<?php } }?>
		</div>
	<?php if (!empty($refs[5])) { ?>
		<h2 class="text-center text-info">Sixth Level Refferals</h2>
		<h3 class="text-center text-info">Sixth Level Earnings : <?php echo $levelE[0]['sixth'];?> Rs</h3>
		<div class="col-md-offset-3 col-md-9 col-sm-12">
			<?php foreach ($refs[5] as $key => $value) { ?>
				<div class="col-md-2 col-sm-2 mainCont totalLinks">

					<div class="link">
						<img class="postimage"
							 src="<?php echo base_url() ?>assets/images/<?php echo $value['company'] ?>"
							 alt="Link Image">
						<h3>Name :
							<small><?php echo $value['first_name'] . $value['last_name']; ?></small>
						</h3>
						<h3>User Name :
							<small><?php echo $value['username']; ?></small>
						</h3>
						<h3>Email :
							<small><?php echo $value['email']; ?></small>
						</h3>
						<h3>Country :
							<small><?php echo $value['country']; ?></small>
						</h3>
						<h6 class="text-right">Reffered By :
							<small><?php echo $value['refid']; ?><?php if ($value['active'] == 0) {
									echo '<span class="btn btn-default btn-circle-red"></span>';
								} else {
									echo '<span class="btn btn-default btn-circle-green"></span>';
								} ?>
							</small>
						</h6>
					</div>
				</div>
			<?php }} ?>
		</div>
	<?php if (!empty($refs[6])) { ?>
		<h2 class="text-center text-info">Seventh Level Refferals</h2>
		<h3 class="text-center text-info">Seventh Level Earnings : <?php echo $levelE[0]['seventh'];?> Rs</h3>
		<div class="col-md-offset-3 col-md-9 col-sm-12">
			<?php foreach ($refs[6] as $key => $value) { ?>
				<div class="col-md-2 col-sm-2 mainCont totalLinks">

					<div class="link">
						<img class="postimage"
							 src="<?php echo base_url() ?>assets/images/<?php echo $value['company'] ?>"
							 alt="Link Image">
						<h3>Name :
							<small><?php echo $value['first_name'] . $value['last_name']; ?></small>
						</h3>
						<h3>User Name :
							<small><?php echo $value['username']; ?></small>
						</h3>
						<h3>Email :
							<small><?php echo $value['email']; ?></small>
						</h3>
						<h3>Country :
							<small><?php echo $value['country']; ?></small>
						</h3>
						<h6 class="text-right">Reffered By :
							<small><?php echo $value['refid']; ?><?php if ($value['active'] == 0) {
									echo '<span class="btn btn-default btn-circle-red"></span>';
								} else {
									echo '<span class="btn btn-default btn-circle-green"></span>';
								} ?>
							</small>
						</h6>
					</div>
				</div>
			<?php }} ?>
		</div>

	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title text-center" style="font-size:4em">Payment Details</h4>
				</div>
				<div class="col-md-11">
					<div class="row">
						<div class="userData col-md-11">
							<form method="post" action="<?php echo site_url() ?>/auth/withdraw"
								  class="text-center form-horizontal">
								<fieldset>
									<legend class=" wleg ">Enter The Following details to get paid <br><span
											id="logError"></span></legend>
									<div class="form-group">
										<label for="" class="col-lg-2 email-label">Name </label>
										<div class="col-lg-10">
											<input type="text" required name="wname" class="form-control" id="name">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-lg-2 email-label">Username</label>
										<div class="col-lg-10">
											<input type="text" required name="wusername" class="form-control cred"
												   id="wusername">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-lg-2 email-label">Email</label>
										<div class="col-lg-10">
											<input type="text" required name="wemail" class="form-control" id="wemail">
										</div>
									</div>
									<div class="form-group"><label class="col-lg-2 email-label">Payment Method</label>
										<div class="col-lg-10">
											<select id="payment" name="method" required="required" class="form-control">
												<option value="easypaisa">Easypaisa</option>
												<option value="ubl omni">Ubl omni</option>
												<option value="mobi cash">Mobi cash</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-lg-2 Username-label">Phone Number</label>
										<div class="col-lg-10">
											<input type="number" required name="wphone" class="form-control"
												   id="wphone">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-lg-2 Username-label">Amount</label>
										<div class="col-lg-10">
											<input type="number" required min=300
												   max=<?php echo $cash; ?> name="wamount"
												   class="form-control" id="wamount">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-lg-2 Username-label">CNIC No</label>
										<div class="col-lg-10">
											<input type="text" required name="wcnic" class="form-control" id="wcnic">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-lg-2 Username-label">Pasword</label>
										<div class="col-lg-10">
											<input type="password" required placeholder="enter password to confirm"
												   name="wpassword" class="form-control cred" id="wpassword">
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-10 col-lg-offset-1">
											<input type="submit" class="btn withdraw btn-md btn-success"
												   value="With Draw"/>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>


	<script src="<?php echo base_url() ?>/assets/js/jquery-3.2.0.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/bootstrap.js"></script>
	<script>

		$(".withm").click((e) => {
			var amount = $(".afig").text();
			if (amount >= 1000) {
				$('.modal')
					.prop('class', 'modal fade') // revert to default
					.addClass($(this).data('direction'));
				$('.modal').modal('show');
			}
			else {
				$('.withm').addClass("bg bg-danger text-danger");
				alert("Sorry the amount is less than the limit")
			}
		});

		$(".withdraw").attr("disabled", "disabled");
		$(".cred").blur((e) => {
			e.preventDefault();
			$.post("<?php echo site_url()?>/auth/checkCredentional", {
				type: 2,
				remember: 1,
				identity: $("#wusername").val(),
				password: $("#wpassword").val()
			}, (data) => {
				if (data === "success") {
					$(".withdraw").removeAttr("disabled");
					$("#logError").text("Click the With Draw button and the amount will be sent to you soon").attr("class", "logsu bg bg-success");
				}
				else {
					$("#logError").text("UserName OR Password incorrect").attr("class", "logEr bg bg-danger");
				}
			});
		});


	</script>
