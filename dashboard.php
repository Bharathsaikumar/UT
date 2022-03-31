<?php session_start() ;
if(isset($_SESSION['fname']))
{
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <!--<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/mylogin.css">
    <title>Guards Portal</title>
    -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
                 <link rel="stylesheet" href=
              "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                  <script src=
              "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
                  </script>
                  <script src=
              "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
                  </script>
                  <script src=
              "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
                  </script>
                <link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/morph/bootstrap.min.css">
   <style>
    	.nav-tabs .nav-link
        {
        	
        }
       .nav-tabs .nav-link
        {
        	color:white;
        }
    </style>
</head>

<body>
	
   
    <div class="container" style="padding:0px; background-color: #fff;" >
    	   			<ul class="nav nav-tabs bg-success text-white" style="margin-top:20px;padding:2px;border:1px solid green;" >
    						<li class=" nav-item" style="margin:3px;" ><a class="nav-link active" data-toggle="tab" href="#houses">Home</a></li>
    						<li class="nav-item" style="margin:3px;"><a class="nav-link" data-toggle="tab" href="#history">My Profile</a></li>
                <li class="nav-item" style="margin:3px;"><a class="nav-link" data-toggle="tab" href="#list">Logout</a></li>


    					</ul>

    					<div class="tab-content">
    						<div class="tab-pane active" id="houses">
    		   			<div class="row">
                  <div class="col-md-12">
                     <div class="card" style="background:white;margin-top:5px;font-family:Arial Black;">
                      
                        <div class="card-body">
                          <div class="row">
                            
                               <div class="col">
                                   <div class="row">
                                    
                                    <div class="col-md-8" >
                                        <div class="well text-black text-center" style="border-radius:20px;">
                                          <h5>Current Trainings</h5>
                                        </div>
                                      </div>

                                      <div class="col-md-8" >
                                        <div class="well text-white bg-primary text-center" style="border-radius:20px;padding-top: 8px;height: 40px;margin-bottom: 10px;">
                                          <h6>Cricket</h6>
                                        </div>
                                      </div>

                                      <div class="col-md-8" >
                                        <div class="well text-white bg-primary text-center" style="border-radius:20px;padding-top: 8px;height: 40px;margin-bottom: 10px;">
                                          <h6>Hockey</h6>
                                        </div>
                                      </div>

                                      <div class="col-md-8" >
                                        <div class="well text-white bg-primary text-center" style="border-radius:20px;padding-top: 8px;height: 40px;margin-bottom: 10px;">
                                          <h6>Football</h6>
                                        </div>
                                      </div>

                                      <div class="col-md-8" >
                                        <div class="well text-white bg-primary text-center" style="border-radius:20px;padding-top: 8px;height: 40px;margin-bottom: 10px;">
                                          <h6>Badminton</h6>
                                        </div>
                                      </div>

                                      <div class="col-md-8" >
                                       <div class="well text-white bg-primary text-center" style="border-radius:20px;padding-top: 8px;height: 40px;margin-bottom: 10px;">
                                          <h6>Rugby</h6>
                                        </div>
                                      </div>
                                     
                                     <div class="col-md-8" >
                                       <div class="well text-white bg-success text-center" style="border-radius:20px;padding-top: 8px;height: 40px;margin-bottom: 10px;">
                                          <a href="trainingsignup.php" style="color:white;"><h6>Sign Up</h6></a>
                                        </div>
                                      </div>
                                     
                                   </div>
                               </div>
                               <div class="col">
                                  <div class="row">
                                    
                                              <h5>Ground Booking</h5>
                                         
                                    <div class="col-md-8">
                                        <div class="card bg-primary" style="color:white;margin-top:5px;font-family:Arial Black;">
                                            <div class="card-body">
                                              <h5>Stadium 1</h5>
                                          </div> 
                                        </div>                                       
                                    </div>    
                                    <div class="col-md-8">
                                        <div class="card bg-primary" style="color:white;margin-top:5px;font-family:Arial Black;">
                                            <div class="card-body">
                                              <h5>Stadium 2</h5>
                                          </div> 
                                        </div>                                       
                                    </div>  

                                    <div class="col-md-8">
                                        <div class="well text-white bg-success text-center" style="border-radius:20px;padding-top: 8px;height: 40px;margin-top: 10px;">
                                          <a href="groundbooking.php" style="color:white;"><h6>Book Ground</h6></a>
                                        </div>                                                                      
                                    </div>  


                                      
                                  </div>
                               </div>
                                <div class="col">
                                   <div class="row">
                                    
                                                                              
                                    
                                    <div class="col-md-8">
                                        <div class="card bg-primary" style="color:white;margin-top:5px;font-family:Arial Black;">
                                            <div class="card-body">
                                              <h5>Today's Events</h5>
                                              <ul><li>Event: Cricket</li></ul>
                                              <ul><li>Venue: Stadium-1</li></ul>
                                              <hr>
                                              <ul><li>Event: Hockey</li></ul>
                                              <ul><li>Venue: Stadium-2</li></ul>
                                           </div> 
                                        </div>                                       
                                    </div> 

                                    <div class="col-md-8">
                                        <div class="card bg-primary" style="color:white;margin-top:5px;font-family:Arial Black;">
                                            <div class="card-body">
                                               <h5>Upcoming Events</h5>
                                               <ul><li>Event: Football</li></ul>
                                               <ul><li>Date: 2-21-2022</li></ul>                                              
                                          </div> 
                                        </div>                                       
                                    </div>     

                                                                          
                                  </div>     
                                </div>
                          </div>
                        </div>  
                       
                     </div>
                  </div>
                       
                </div>              

                </div>					
    										
    						<div class="tab-pane" id="history">
    							 <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="signupdb.php" method="post" style="padding-bottom: 10px;">
                            <div class="form-group">
                                <label for="username">First Name:</label><br>
                                <input type="text" name="fname" id="username" value="<?php echo $_SESSION['fname']; ?>"  class="form-control">
                            </div>
                             <div class="form-group">
                                <label for="username">Last Name:</label><br>
                                <input type="text" name="lname" id="username" 
                               value="<?php echo $_SESSION['lname']; ?>"  class="form-control">
                            </div>
                             
                             <div class="form-group">
                                <label for="username">Student ID:</label><br>
                                <input type="text" name="sid" id="username" value="<?php echo $_SESSION['sid']; ?>"  class="form-control">
                            </div>
                             
                           
                           
                         </form>
                       </div>
                     </div>
                         				
    						</div>


                <div class="tab-pane" id="myhouses">
                  

                                
                </div>

    					<div class="tab-pane" id="list" style="padding-top:-200px;">
                  Logout Here:
                <a href="logout.php" style="color:black;">exit</a>
                </div>
    					</div>
    		
    </div>


   <script>
   $(".nav-item").on("click",function()
   	{
      $(".nav-item").removeClass("active");
      $(this).addClass("active");
   	});
   </script>
  <!-- Optional JavaScript -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Custom Js -->
    <script src="./assets/js/app.js"></script>
</body>
</html>

</body>
</html>
<?php } 
else
 {
  header("Location:index.php");
}
?>