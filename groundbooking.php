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
        	
        	color:#fff;
        	
        }
    </style>
</head>

<body>
	
   
    <div class="container" style="padding:0px; background-color: #fff;" >
    	   			<ul class="nav nav-tabs bg-success text-white" style="margin-top:20px;padding:2px;border:1px solid green;" >
    						<li class=" nav-item" style="margin:3px;" ><a class="nav-link active" data-toggle="tab" href="#houses">Home</a></li>
    						<li class="nav-item" style="margin:3px;"><a class="nav-link" data-toggle="tab" href="#history">Book Here</a></li>
                <li class="nav-item" style="margin:3px;"><a class="nav-link" data-toggle="tab" href="#list">Go Back</a></li>


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
                                    
                                    <h5> Booking Now</h5>
                                         
                                    <div class="col-md-8">
                                        <div class="card bg-primary" style="color:white;margin-top:5px;font-family:Arial Black;">
                                            <div class="card-body">
                                              <h5>Stadium @ 1</h5>
                                              <h5>From</h5>
                                          </div> 
                                        </div>                                       
                                    </div>    
                                    <div class="col-md-8">
                                        <div class="card bg-primary" style="color:white;margin-top:5px;font-family:Arial Black;">
                                            <div class="card-body">
                                              <h5>Stadium @ 2</h5>
                                              <h5>From</h5>
                                          </div> 
                                        </div>                                       
                                    </div>  
                                     
                                    </div>
                               </div>
                               <div class="col">
                                  <div class="row">
                                    
                                              <h5> Booking in Advance</h5>
                                         
                                    <div class="col-md-8">
                                        <div class="card bg-primary" style="color:white;margin-top:5px;font-family:Arial Black;">
                                            <div class="card-body">
                                              <h5>Stadium @ 1</h5>
                                              <h5>From</h5>
                                          </div> 
                                        </div>                                       
                                    </div>    
                                    <div class="col-md-8">
                                        <div class="card bg-primary" style="color:white;margin-top:5px;font-family:Arial Black;">
                                            <div class="card-body">
                                              <h5>Stadium @ 2</h5>
                                              <h5>From</h5>
                                          </div> 
                                        </div>                                       
                                    </div>  

                                                                          
                                  </div>
                               </div>
                                <div class="col">
                                   <div class="row">
                                    
                                                                              
                                     
                                    <div class="col-md-12">
                                        
                                              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height:80px;">
                                                    <div class="carousel-inner">
                                                      <div class="carousel-item active">
                                                        <img class="d-block" src="images/stad1.jpg" alt="First slide" style="height:200px;width:200px;">
                                                      </div>
                                                      <div class="carousel-item">
                                                        <img class="d-block" src="images/stad2.jpg" alt="Second slide" style="height:200px;width:200px;">
                                                      </div>
                                                      
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                      <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                      <span class="sr-only">Next</span>
                                                    </a>
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
                  <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
    							    <form id="login-form" class="form" action="groundbk.php" method="post">
                                                        
                            <div class="form-group">
                                <label for="password" >Stadium:</label><br>
                                <input type="text" name="stadia" id="password" class="form-control" placeholder="Stadium 1">
                            </div>
                            <div class="form-group">
                                <label for="password" >Period From:</label><br>
                                <input type="text" name="from" id="password" class="form-control" placeholder="10-20-2020">
                            </div>
                            <div class="form-group">
                                <label for="password" >Period To:</label><br>
                                <input type="text" name="to" id="password" class="form-control" placeholder="10-22-2020">
                            </div>
                            <div class="form-group">
                                     <input type="submit" name="submit" class="btn btn-info btn-md form-control bg-success text-white text-center" value="Book Ground" style="padding-top: -20px;" >
                            </div>
                            
                         </form>
                       </div>
                     </div>
                   </div>
                         				
    						</div>


                <div class="tab-pane" id="myhouses">
                  

                                
                </div>

    						<div class="tab-pane" id="list" style="padding-top:-200px;">
                 Click here to go to previous page:
    						<a href="dashboard.php" style="color:black;">dashboard</a>
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