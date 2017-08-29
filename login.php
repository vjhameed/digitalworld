        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/landing.css">        
        <link href="../fonts/glyphicons-halflings-regular.woff2">
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
    <div class="overlay">
        <div class="container-fluid mainText">
            <div class="content text-center">
                <h1 class="text-primary">Digital World <div id="infoMessage"><?php echo $message;?></div></h1>
                <p> Brooklyn
                        rooklyn small batch plaid keffiyeh Schlitz cornhole tote bag fashion axe mnes
                        rooklyn small batch plaid keffiyeh Schlitz cornhole tote bag fashion axe mnes
                        rooklyn small batch plaid keffiyeh Schlitz cornhole tote bag fashion axe mnes
                    small batch plaid keffiyeh Schlitz cornhole tote bag fashion axe mness. Try now and join with our happy customers!</p>
                <a href="#" class="log btn" data-direction='top-right'><span class="glyphicon glyphicon-user"></span> Log In</a>
                <a href="<?php echo site_url()?>/auth/create_user" class="btn"><span class="glyphicon glyphicon-registration-mark"></span> Register</a>                
                <a href="<?php echo site_url()?>/auth/contact" class="btn"><span class="glyphicon glyphicon-comment"></span> Contact Us</a>               
                  
            </div>
        </div>
    </div>    
    
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
  if(data === "success"){
        $("#logError").text("You will be Logged in a while").attr("class","logsu bg bg-success");
        window.location.reload();
  }
  else{
        $("#logError").text("Username or Password is Incorrect").attr("class","logEr bg bg-danger");
  }
});
})


</script>
</body>