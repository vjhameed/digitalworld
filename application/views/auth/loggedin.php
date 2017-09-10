<link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/fonts/glyphicons-halflings-regular.woff2">
<link href="<?php echo base_url() ?>/assets/css/navbar.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/css/land.css" rel="stylesheet">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">




<style>
    * {
        font-family: 'Lato';
    }
	.mynavbar {
		padding: 10px 5px;
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
            <li><a href="#" >Home</a></li>
            <li class="dropdown">
                <a href="<?php echo site_url() ?>/auth/marketing" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Marketing plan<span class="caret"></span></a>
                <ul class="dropdown-menu">
					<li><a href="<?php echo site_url() ?>/auth/marketing">Marketing Plan</a></li>
					<li><a href="<?php echo site_url() ?>/auth/works">How it Works</a></li>
                <li><a href="<?php echo site_url()?>/auth/contact">Contact Us</a></li>
                </ul>
            </li>
			<li><a href="<?php echo site_url() ?>/auth/edit_user/<?php echo $user->id ?>">Profile</a></li>
            <li><a href="<?php echo site_url()?>/auth/create_user">Register</a></li>
            <li><a href="<?php echo site_url()?>/auth/logout">Logout</a></li>
            <li><a href="#" >Store Comming Soon</a></li>
        </ul>
    </div>
</div><!--/.nav-collapse -->
</nav>

<br/><br/>

<div class="container" id="wrapper">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div id="blog-sidebar">
                <div class="welcome-msg col-md-11 asideleft" style="padding:20px 5px;">
                    <h3>Current User</h3>
                    <div class="recentView">
                        <div style="float: left;margin-right:7px;">
                            <img src="<?php echo base_url() ?>assets/images/<?php echo $user->company ?>"
                                 class="img-responsive img-rounded" width="72px" height="50">
                        </div>
                    </div>
                    <span>Name : </span><span> <?php echo $user->first_name . " " . $user->last_name; ?></span>
                </div>

                <div class="recent-view  col-md-11 asideleft" style="margin-top: -5px;border-top: none;padding-top:10px;">
                    <a href="<?php echo site_url() ?>/auth/edit_user/<?php echo $user->id ?>" class="btn access"><span
                            class="glyphicon glyphicon-registration-mark"></span> Profile</a>
                    <a href="<?php echo site_url() ?>/auth/contact" class="btn access"><span
                            class="glyphicon glyphicon-comment"></span> Contact Us</a>
                </div>
            </div>
        </div>


        <div class="col-sm-8 col-md-8 blog-main">
            <div id="blog-main">
                <div class="col-md-12 newLink">
                    <img src="<?php echo base_url() ?>/assets/images/bghome.jpg" class="img-responsive banner" alt="">
                </div>

                <div class="mainContent col-md-3 col-xs-5 col-sm-5">
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
					<h1   class="text-center" style="background-color: black;font-size: 2em;padding: 1em;margin-top: 0px;color: white;"><?php echo $data['users'] + 500?></h1>
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

<div id='blog-footer'>Designed And Developed By GetOnlineTask</div>


<script src="<?php echo base_url() ?>assets/js/jquery-3.2.0.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script>
	if($(window).width() < 500 ) {
		console.log("less");
		$("#blog-sidebar").css("display", "none");
	}
</script>
