<!DOCTYPE html>
<html>
     

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/mylogin.css">
    
    <style>
      .my
                  {
                    color:#000;
                  }


                  .jumbotron 
                  {
                    background-image: url("images/cameras.jpg");
                    background-size: cover;
                  }
                  .carousel-caption
                  {
                    position: absolute;
                    z-index:20;
                  }
                  #logo
                  {
                     display:block;
                      margin: 0px auto;
                  }
      .nav-tabs .nav-link
        {
          background-color:#000;
          color: #fff;
          border-color: 2px solid black;
        }
       .nav-tabs .nav-link
        {
          background-color:#fff;
          color:#9400D3;
          border-color: 2px solid #000;
        }
    </style>
</head>
<body style="background:white;">
 
 <nav class=" container-fluid navbar  justify-content-center  navbar-expand-lg bg-success" style="background:#081a30;">
        <div class="container">
        	  <strong><h2 style="color:white;font-family:Arial Black;">Sports Management System</h2></strong>
        </div>
                   
 </nav>
 
<!--start of the  website body-->
  

<div class="container">
  <div class="row" style="margin-top:20px;">

    <div class="col-md-5" >
	     
		  <div class="card-body"><img src="images/sport.png" class="img-fluid " style="max-width:100%;height:150px;margin: 0 auto;"></div>
		</div>

    <div class="col-md-7" >
     
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="mylogin.php" method="post">
                            <h3 class="text-center " style="color:#081a30;">Login</h3>
                             
                            <div class="form-group">
                                <label for="username">Email:</label><br>
                                <input type="text" name="email" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" >Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                     <input type="submit" name="submit" class="btn btn-info btn-md form-control bg-success" value="Login">
                            </div>
                            <div class="form-group">
                                     <button  name="account" class="btn btn-info btn-md form-control bg-primary"><a href="signup.php" style="color:white;">Create Account</a></button>
                            </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

  </div>

  


</div>



  </div>
</div>










 <script>
  /* $(".nav-item").on("click",function()
    {
      $(".nav-item").removeClass("active");
      $(this).addClass("active");
    });*/
   </script>
  <!-- Optional JavaScript -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Custom Js -->
    <script src="./assets/js/app.js"></script>

</body>
</html>