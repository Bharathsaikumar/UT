<?php
if (isset($_POST['sbmit'])) 
{
   
session_start();
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "sports_database");
          
        // Check connection
        if($conn === false)
        {
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
    // if(isset( $_POST['fname'])&& isset( $_POST['lname'])&& isset($_POST['email']) && isset( $_POST['sid'])&&isset( $_POST['school'])&&isset( $_POST['password']))
     if(empty( $_POST['fname'])||empty( $_POST['lname'])||empty( $_POST['sid'])||empty( $_POST['teamname'])||empty( $_POST['teamid'])||empty( $_POST['trainingname'])||empty( $_POST['sportsname']))
     {
       echo "Input all the fields";
      // header("Location:signup.php");
     }
     else
     {
        $fname =  $_POST['fname'];
        $lname = $_POST['lname'];
        $sid =  $_POST['sid'];
        $teamname =  $_POST['teamname'];
        $teamid = $_POST['teamid'];
        $trainingname = $_POST['trainingname'];
        $spname = $_POST['sportsname'];
      
        
        $sql = "INSERT INTO trainingmembership(fname,lname,sid,teamid,teamname,trainingname,sportsname)  VALUES ('". $fname."', 
            '".$lname."','".$sid."','". $teamname."','". $teamid."','". $trainingname."','". $spname."')";
          
        if(mysqli_query($conn, $sql))
        {
           $_SESSION['teamname']=$teamname;
           $_SESSION['teamid']=$teamid;
           $_SESSION['trainingname']=$trainingname;
           $_SESSION['spname']=$spname;

            echo "<script>
        window. alert('Succesfully Signed Up for Training');
        window. location. href='trainingsignup.php';</script>";

         } 
         else
         {
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
          }
          
          }
         // else 
         // {?>
           <!-- <script type="text/javascript">alert("Input all the fields")</script>;-->
            <?php
           // sleep(5);
            //header("Location:signup.php");
        //  }

        // Close connection
        mysqli_close($conn);
    }
    else
    {
        header("Location:dashboard.php");
    }

        ?>