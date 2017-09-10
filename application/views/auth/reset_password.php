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
							<a class="navbar-brand" href="<?php echo site_url()?>/auth">YouVisitHub</a>
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
                        <form method="post" action="<?php echo site_url()?>/auth/reset_password/<?php echo $code;?>" class="form-horizontal">
                                <fieldset>
                                  <legend><h1><?php echo lang('reset_password_heading');?></h1>
                                        <div id="infoMessage"><?php echo $message;?></div>
                                </legend>
                                  <p>New Password (at least 8 characters long): </p>
                                  <div class="form-group">
                                        <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                                        <div class="col-lg-8">
                                          <input type="password" name="new" class="form-control inputPro" placeholder="New Password" pattern="^.{8}.*$">
                                        </div>
                                  </div>
                                  <div class="form-group">
                                        <label for="inputPassword" class="col-lg-2 control-label">Confirm Password</label>
                                        <div class="col-lg-8">
                                          <input type="password" name="new_confirm" class="form-control inputPro" placeholder="Confirm New Password" pattern="^.{8}.*$">
                                        </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-lg-12">
                                      <input style="padding:10px 20px;" type="submit" name="submit" value="change" class="btn btn-primary"/>
                                    </div>
                                  </div>
                                </fieldset>
                                	<?php echo form_input($user_id);?>
                                	<?php echo form_hidden($csrf); ?>
                              </form>                          

                    
                </div>
            </div>


            </div>
    </div>

<script src="<?php echo base_url()?>/assets/js/jquery-3.2.0.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/bootstrap.js"></script>
