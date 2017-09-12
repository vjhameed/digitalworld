<link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/fonts/glyphicons-halflings-regular.woff2">
<link href="<?php echo base_url() ?>/assets/css/navbar.css" rel="stylesheet">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">




<style>
    .mynavbar {
        background-color: black;
        /* padding-top:0px;  */
    }

    * {
        font-family: 'Lato';
    }
    
    .jumbotron {
        background: #358CCE;
        color: #FFF;
        border-radius: 0px;
    }
    .jumbotron-sm { padding-top: 24px;
        padding-bottom: 24px; }
    .jumbotron small {
        color: #FFF;
    }
    .h1 small {
        font-size: 24px;
    }

	#blog-footer {
		background-color: black;
		color: silver;
		padding: 15px;
	}

</style>

<body>

<nav class="navbar  mynavbar navbar-default" id="my-nav">
<!-- Fixed navbar -->
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
      <li><a href="<?php echo site_url()?>/auth" >Home</a></li>
		<li><a href="<?php echo site_url() ?>/auth/terms">Terms Of Service</a></li>
		<li><a href="<?php echo site_url() ?>/auth/marketing">Marketing Plan</a></li>
		<li><a href="<?php echo site_url() ?>/auth/works">How It Works</a></li>
		<li><a href="#" >Store Comming Soon</a></li>
    </ul>
  </div>
</div><!--/.nav-collapse -->
</nav>
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
				<img src="<?php echo base_url() ?>/assets/html/assests/Pastel Orange at the Sun.png" class="img-responsive" style="width: 2em;display:inline"/>
					Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form method="post" novalidate action="<?php echo site_url()?>/auth/contactUs">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="registration">Registration</option>
                                <option value="suggestions">Support</option>
                                <option value="product">Complaints</option>
                            </select>
                        </div>
                    </div>
                    <div id="ext">
                        
                    </div>
                    <div id="message" class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
						<div class="form-group">
							<label for="name">
								Phone Number</label>
							<input type="number" name="conphone" class="form-control" required="required"/>
						</div>
					</div>
                    <div class="col-md-12">
                        <input type="submit" value="Send Message" class="btn btn-primary pull-right" id="btnContactUs"/>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span>�Our office</legend>
            <address>
                <strong>Twitter, Inc.</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">
                    P:</abbr>
                (123) 456-7890
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">first.last@example.com</a>
            </address>
            </form>
        </div>
    </div>
</div>


<script src="<?php echo base_url() ?>assets/js/jquery-3.2.0.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script>


$("#subject").change((e)=>{

    if($("#subject").val() == "registration"){
    $("#extra").remove();
    $("<div id='extra'></div>").appendTo("#ext");
    $("#message").css("display","none");
    $("#extra").addClass("col-md-6");
    var formg = $("<div></div>").addClass("form-group").appendTo("#extra");
    $("<label></label>").text("trxId").appendTo(formg);
    $("<input type='number' class='form-control' name='trxid' placeholder='enter trxid' />").appendTo(formg);
    var formg1 = $("<div></div>").addClass("form-group").appendTo("#extra");
    $("<label></label>").text("Cnic").appendTo(formg1);
    $("<input type='text' class='form-control' name='cnic' placeholder='enter cnic no' />").appendTo(formg1);
    var formg2 = $("<div></div>").addClass("form-group").appendTo("#extra");
    $("<label></label>").text("5 digit Code").appendTo(formg2);
    $("<input type='number' class='form-control' name='code' placeholder='enter 5 digit easypaisa code' />").appendTo(formg2);
    var formg4 = $("<div></div>").addClass("form-group").appendTo("#extra");
    $("<label></label>").text("Amount").appendTo(formg4);
    $("<input type='number' class='form-control' name='amount' placeholder='enter amount that u have sent' />").appendTo(formg4);
    var formg2 = $("<div></div>").addClass("form-group").appendTo("#extra");
    $("<label></label>").text("Payment Method").appendTo(formg2);
    $("<select id='payment' name='method' required='required' class='form-control'></select>").appendTo(formg2);
    $("<option value='Easypaisa'></option>").text('Easypaisa').appendTo("#payment");
    $("<option value='Ubl omni'></option>").text('Ubl omni').appendTo("#payment");
    $("<option value='Mobi cash'></option>").text('Mobi cash').appendTo("#payment");
	$("<option value='Jazz cash'></option>").text('Jazz cash').appendTo("#payment");
    var formg3 = $("<div></div>").addClass("form-group").appendTo("#extra");
    $("<label></label>").text("Phone").appendTo(formg3);
    $("<input type='number' class='form-control' name='phone' placeholder='enter phone no' />").appendTo(formg3);
}
else{
    $("#extra").css("display","none");
    $("#message").css("display","block");
}
})

</script>

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

<div class="copyright">
	<div class="container">
		<div class="col-md-6">
			<p>© 2017 - All Rights with GetOnlineTask</p>
		</div>
	</div>
</div>

</body>
