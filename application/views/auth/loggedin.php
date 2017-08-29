<link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/fonts/glyphicons-halflings-regular.woff2">
<link href="<?php echo base_url() ?>/assets/css/navbar.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/css/loggedIn.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/css/land.css" rel="stylesheet">

<style>
	.mynavbar {
		background-color: black;
		/* padding-top:0px;  */
	}

	* {
		font-family: 'Lato';
	}

</style>


< body>
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
			<img src="<?php echo base_url() ?>assets/html/assests/230x142.png" class="img-circle" width="40">
			<a class="navbar-brand" href="<?php echo site_url()?>/auth">Digital World</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#">Home</a></li>
			<li><a href="logout">LogOut</a></li>
			<li><a href="Contact">Contact Us</a></li>
			<li><a href="<?php echo site_url() ?>/auth/edit_user/<?php echo $user->id ?>">Profile
					<img src="<?php echo base_url() ?>/assets/images/<?php echo $user->company?>" class="img-circle" width="20"></a>
			</li>
		</ul>
	</div><!--/.nav-collapse -->
</nav>

<br/><br/>

<div class="container"  id="wrapper">
	<div class="row">
		<div class="col-sm-3 col-md-2">
			<div id="blog-sidebar" data-spy="affix" data-offset-top="80" data-offset-bottom="620">
				<div class="welcome-msg col-md-11 asideleft">
					<h3>Current User</h3>
					<div class="recentView">
						<div style="float: left;margin-right:7px;">
							<img src="<?php echo base_url() ?>assets/images/<?php echo $user->company ?>"
								 class="img-responsive img-rounded" width="72px" height="50">
						</div>
					</div>
					<span>Name : </span><span> <?php echo $user->first_name . " " . $user->last_name; ?></span>
				</div>
				
				<div class="recent-view  col-md-11 asideleft" style="margin-top: -5px;border-top: none">
                <a href="<?php echo site_url()?>/auth/edit_user/<?php echo $user->id?>" class="btn access"><span class="glyphicon glyphicon-registration-mark"></span> Profile</a>                
                <a href="<?php echo site_url()?>/auth/contact" class="btn access"><span class="glyphicon glyphicon-comment"></span> Contact Us</a>              
                </div>
			</div>
		</div>


        <div class="col-sm-8 col-md-9 blog-main" style="margin-left: 3%">
            <div id="blog-main">
                <div class="col-md-12 newLink">
                  <img src="<?php echo base_url()?>/assets/images/bghome.jpg" class="img-responsive banner" alt="">
                </div>

                <div class="mainContent col-md-3 col-sm-4">
                    <a href="#" ><img src="<?php echo base_url()?>/assets/html/assests/230x142.png" width="100%"></a>
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

                <div class="mainContent col-md-3 col-sm-4">
                    <a href="#" ><img src="<?php echo base_url()?>/assets/html/assests/230x142.png" width="100%"></a>
                        <div class="mainContentDescription">
                            <div class="row sellerInfo">
                                <div class="col-md-12">
                                    <h3><a href="#">Total Users</a></h3>
                                </div>
                                <div class="col-md-12">
                                    <div class="gig-end">
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>

                
                <div class="mainContent col-md-3 col-sm-4">
                    <a href="#" ><img src="<?php echo base_url()?>/assets/html/assests/230x142.png" width="100%"></a>
                        <div class="mainContentDescription">
                            <div class="row sellerInfo">
                                <div class="col-md-12">
                                    <h3><a href="#">Total WithDrawals</a></h3>
                                </div>
                                <div class="col-md-12">
                                    <div class="gig-end">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                
                <div class="mainContent col-md-3 col-sm-4">
                       <a href="#" ><img src="<?php echo base_url()?>/assets/html/assests/230x142.png" width="100%"></a>
                       <div class="mainContentDescription">
                            <div class="row sellerInfo">
                                <div class="col-md-12">
                                    <h3><a href="#">Upcoming News</a></h3>
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

<div id='blog-footer'>Designed And Developed By ABC</div>


<script src="<?php echo base_url() ?>assets/js/jquery-3.2.0.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>

</body>