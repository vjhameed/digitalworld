    <link href="<?php echo base_url()?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/fonts/glyphicons-halflings-regular.woff2">
     <link href="<?php echo base_url()?>/assets/css/navbar.css" rel="stylesheet"> 

      <style>
            .mynavbar{
            background-color: black;
            padding-top:0px; 
            }

            *{
            font-family: 'Lato'; 
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
                            <a class="navbar-brand" href="<?php echo site_url()?>/auth">Digital World</a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo site_url()?>/auth" >Home</a></li>
                         </ul>
                    </div><!--/.nav-collapse -->
                
                </nav>        
        <div class="row-fluid" style="margin:10px auto;width:30%;margin-top:10%;" >
                <a href="landing.html"><img src="<?php echo base_url()?>/assets/html/assests/72x50.png" class="img-responsive img-circle" style="margin:10px auto"></a>                
            <form method="post"  enctype="multipart/form-data" action="<?php echo site_url()?>/auth/create_user" class="text-center form-horizontal">
            <fieldset>
              <legend>Sign Up<div id="infoMessage"><?php echo $message;?><p><?php echo lang('create_user_subheading');?></p>
</div>
</legend>
              <div class="form-group">
                <label for="" class="col-lg-2 control-label">Refferal Id</label>
                <div class="col-lg-10">
                  <input type="number"  name="refid" class="form-control" id="refid" placeholder="Referral id if any">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-lg-2 control-label">First Name</label>
                <div class="col-lg-10">
                  <input type="text" required maxlength=30 name="first_name" class="form-control" id="first_name" placeholder="First Name">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-lg-2 control-label">Last Name</label>
                <div class="col-lg-10">
                  <input type="text" required maxlength=30 name="last_name" class="form-control" id="last_name" placeholder="Last Name">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-lg-2 control-label">UserName</label>
                <div class="col-lg-10">
                  <input type="text" required minlength=5 maxlength=30 name="identity" class="form-control" id="username" placeholder="UserName">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-lg-2 control-label">Country</label>
                <div class="col-lg-10">
                  <input type="text" required name="country" class="form-control" id="country" placeholder="Country">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-lg-2 control-label">City</label>
                <div class="col-lg-10">
                  <input type="text" required name="city" class="form-control" id="city" placeholder="City">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-lg-2 control-label">Profile Image</label>
                <div class="col-lg-10">
                  <input type="file" name="company" value="">max size 2 mb (gif,png,jpg,jpeg)
              </div>
              </div>
              <div class="form-group package">
                <label for="" class="col-lg-2 control-label">Package</label>
                <div class="col-lg-10">
                  <input type="radio" required name="package" class="form-control" value="basic" id="package">$2 Basic
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-lg-2 control-label">Phone Number</label>
                <div class="col-lg-10">
                  <input type="text" required maxlength=15 name="phone" class="form-control" id="phone_no" placeholder="Phone No">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                  <input type="email" required name="email" class="form-control" id="email" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10">
                  <input type="password" required minlength=8 class="form-control" name="password" id="password" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Password Confirm</label>
                <div class="col-lg-10">
                  <input type="password" required class="form-control" name="password_confirm" id="password_confirm" placeholder="Enter Password Again">
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-1">
                  <input type="submit" class="btn btn-primary"></input>
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
                           <p style="font-size:18px">Your Account will be activated when we recive the payment of the selected package <small style="font-weight:bold">Note (Contact us through our <a target="blank" href="<?php echo site_url()?>/auth/contact">contact form</a> with the trxid,cnic no,phone no,5 digit code,your email that u have entered to register here and your name)</small></p>
                           <h4 style="font-weight:bold">Payment Method :<span style="font-weight:600">EasyPaisa</span></h4>                         
                           <h4 style="font-weight:bold">Ph# :<span style="font-weight:600">0345-xxx-xxx-xx</span></h4>                         
                           <h4 style="font-weight:bold">Nic# :<span style="font-weight:600">42401-xxx-xxx-xx</span></h4>                         
                          <h2>Thank You</h2>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->



<script src="<?php echo base_url()?>/assets/js/jquery-3.2.0.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/bootstrap.js"></script>
<script>
  $(".package").click(()=>{
    console.log("click");
      $('.modal')
          .prop('class', 'modal fade') // revert to default
          .addClass( $(this).data('direction'));
      $('.modal').modal('show');
  });

  $("#refid").blur(()=>{

    $.get("<?php echo site_url()?>/auth/refferal/" + $("#refid").val(),(data)=>{
  if(data == true){
    console.log("contine");
      // continue on the the parent has less than 5 refs
  }
  else if (data == false){
      $("#refid").val("");
      $("#refid").attr("placeholder","The user already has 5 refferals");
      $("#refid").attr({disabled:"disabled"});
  }
  });


  });  

</script>
</body>