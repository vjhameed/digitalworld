    <link href="<?php echo base_url()?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/fonts/glyphicons-halflings-regular.woff2">
    <link href="<?php echo base_url()?>/assets/css/navbar.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/forgot.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">



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
							<a class="navbar-brand"><img src="<?php echo base_url() ?>/assets/html/assests/Pastel Orange at the Sun.jpg" class="img-responsive" width="40"></a>
							<a class="navbar-brand" href="<?php echo site_url()?>/auth">Project name</a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo site_url()?>/auth" >Home</a></li>                
                        </ul>
                    </div><!--/.nav-collapse -->
                
                </nav>
                
    <div class="row-fluid">  
        <div class="mainCont text-center">
            <div class="row">
                <div class="userData col-md-offset-3 col-md-5">
                    <br>
                        <form method="post" action="<?php echo site_url()?>/auth/forgot_password" class="form-horizontal">
                                <fieldset>
                                  <legend>   Forgot Password 
                                <div id="infoMessage"><?php echo $message;?>
                                <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
                                </div>
                                </legend>
                                  <p>Enter Your Email</p>
                                  <div class="form-group">
                                        <label for="inputPassword" class="col-lg-2 control-label">Email</label>
                                        <div class="col-lg-6">
                                          <input type="text" class="form-control inputPro" id="identity" name="identity" placeholder="Email">
                                        </div>
                                      </div>
                                  <div class="form-group">
                                    <div class="col-lg-10">
                                      <input style="padding:10px 20px;" type="submit" class="btn btn-primary"/>
                                    </div>
                                  </div>
                                </fieldset>
                              </form>                          

                    
                </div>
            </div>


            </div>
    </div>

<script src="<?php echo base_url()?>/assets/js/jquery-3.2.0.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/bootstrap.js"></script>
