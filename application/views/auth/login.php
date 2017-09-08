        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/land.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/navbar.css">
                
        <link href="<?php echo base_url()?>/assets/css/glyphicons-halflings-regular.woff2">
                <!-- Google Fonts -->
                <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />
        <style>
          .logEr{
            padding: 5px;
            color:red;
          }


          .logsu{
            padding:5px;
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
            <a class="navbar-brand" href="#">Digital World</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" >Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a class="log" href="#">Login</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">How it Works</a></li>
                    <li><a href="<?php echo site_url()?>/auth/contact">Contact Us</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo site_url()?>/auth/create_user">Register</a></li>
                <li><a href="#" >About Us</a></li>            
                <li><a href="#" >Store Comming Soon</a></li>
            </ul>
        </div>
    </div><!--/.nav-collapse -->
</nav>

<br>
<div class="container" id="wrapper">
    <div class="row">
        <div class="col-sm-1 col-md-3">
            <div id="blog-sidebar" >
                <div class="welcome-msg col-md-10 asideleft text-center">
                <a href="#" class="log btn access"><span class="glyphicon glyphicon-user"></span> Log In</a>
                <a href="<?php echo site_url()?>/auth/create_user" class="btn access"><span class="glyphicon glyphicon-registration-mark"></span> Register</a>                
                <a href="<?php echo site_url()?>/auth/contact" class="btn access"><span class="glyphicon glyphicon-comment"></span> Contact Us</a>              
                <button type="" class="btn access btn-lg btn-success">How It Works</button>                                        
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-8 blog-main">
            <div id="blog-main">
                <div class="col-md-12 newLink">
                  <h1 class="message"><?php echo $message;?></h1>
                  <img src="<?php echo base_url()?>/assets/images/bghome.jpg" class="img-responsive banner" alt="">
                </div>

                <div class="mainContent col-md-3 col-xs-5 col-sm-5">
                <a href="#"><img src="<?php echo base_url() ?>/assets/html/assests/230x142.png" width="100%"></a>
                <div class="mainContentDescription">
                    <div class="row sellerInfo">
                        <div class="col-md-12">
                            <h3><a href="#">Users Signed up today : <?php echo $data['users'] + 100?></a></h3>
                        </div>
                        <div class="col-md-12">
                            <div class="gig-end">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mainContent col-md-3 col-xs-5 col-sm-5">
                <a href="#"><img src="<?php echo base_url() ?>/assets/html/assests/230x142.png" width="100%"></a>
                <div class="mainContentDescription">
                    <div class="row sellerInfo">
                        <div class="col-md-12">
                            <h3><a href="#">Total Users Signed Up : <?php echo $data['users'] + 500?></a></h3>
                        </div>
                        <div class="col-md-12">
                            <div class="gig-end">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

                <div class="mainContent col-md-3 col-xs-5 col-sm-5">
                    <a href="#" ><img src="<?php echo base_url()?>/assets/html/assests/230x142.png" width="100%"></a>
                        <div class="mainContentDescription">
                            <div class="row sellerInfo">
                                <div class="col-md-12">
                                    <h3><a href="#">Total WithDrawals : <?php echo $data['amount']?></a></h3>
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
                                      <input type="email" required class="form-control" name="identity" id="inputEmail" placeholder="User Name">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                                    <div class="col-lg-10">
                                      <input type="password" required class="form-control" name="password" id="inputPassword" placeholder="Password">
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



<div id='blog-footer'>Designed And Developed By ABC</div>



<script src="<?php echo base_url() ?>/assets/js/jquery-3.2.0.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/bootstrap.js"></script>
<script>
$('.log').click(function() {
$('.modal')
    .prop('class', 'modal fade') // revert to default
    .addClass( $(this).data('direction'));
$('.modal').modal('show');
});

$("#login").click((e)=>{
  e.preventDefault();
$.post("<?php echo site_url()?>/auth/checkCredentional",{remember:$("#remember").val(),identity:$("#inputEmail").val(),password:$("#inputPassword").val()},(data)=>{
	  if( data === "success"){
        $("#logError").text("You will be Logged in a while").attr("class","logsu bg bg-success");
        window.location.reload();
  }
  else{
        $("#logError").text("Username or Password is Incorrect").attr("class","logEr bg bg-danger");
  }
})
});


if($(window).width() < 500 ){
    console.log("less");
$(".welcome-msg").css("display","none");

}



</script>
</body>
