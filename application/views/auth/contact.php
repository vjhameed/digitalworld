<link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/fonts/glyphicons-halflings-regular.woff2">
<link href="<?php echo base_url() ?>/assets/css/navbar.css" rel="stylesheet">

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
			<a class="navbar-brand" href="<?php echo site_url()?>/auth">Digital World</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="<?php echo site_url()?>/auth">Home</a></li>
            <li><a href="#">Contact Us</a></li>
		</ul>
	</div><!--/.nav-collapse -->
</nav>

<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
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


$("#subject").click(()=>{

if($("#subject").val() == "registration"){
    $("#extra").remove();
    $("<div id='extra'></div>").appendTo("#ext");
    $("#message").css("display","none");
    $("#extra").addClass("col-md-6");
    var formg = $("<div></div>").addClass("form-group").appendTo("#extra");
    $("<label></label>").text("trxId").appendTo(formg);
    $("<input type='text' class='form-control' name='trxid' placeholder='enter trxid' />").appendTo(formg);
    var formg1 = $("<div></div>").addClass("form-group").appendTo("#extra");
    $("<label></label>").text("Cnic").appendTo(formg1);
    $("<input type='text' class='form-control' name='cnic' placeholder='enter cnic no' />").appendTo(formg1);
    var formg2 = $("<div></div>").addClass("form-group").appendTo("#extra");
    $("<label></label>").text("5 digit Code").appendTo(formg2);
    $("<input type='text' class='form-control' name='code' placeholder='enter 5 digit easypaisa code' />").appendTo(formg2);
    var formg3 = $("<div></div>").addClass("form-group").appendTo("#extra");
    $("<label></label>").text("Phone").appendTo(formg3);
    $("<input type='text' class='form-control' name='phone' placeholder='enter phone no' />").appendTo(formg3);
}
else{
    $("#extra").css("display","none");
    $("#message").css("display","block");
}
})

</script>


</body>