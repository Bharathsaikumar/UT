<?php
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
     if(empty( $_POST['from'])||empty( $_POST['to']))
     {
       echo "Input all the fields";
      // header("Location:signup.php");
     }
     else
     {
        $stadia = $_POST['stadia'];
        $from = $_POST['from'];
        $to =  $_POST['to'];
        $sid =  $_SESSION['sid'];
        $fname =  $_SESSION['fname'];
       // $password = $_POST['password'];

        $checkingsql="SELECT * FROM bookground WHERE ground='".$stadia."' AND start='".$from."' AND ending='".$to."'";
        $result = mysqli_query($conn,$checkingsql) or die(mysqli_error($conn));
        // $check = mysqli_fetch_array($result);
        $count = mysqli_num_rows( $result);
        if($count>0)
        {
            echo "<script>
        window. alert('Ground Succesfully Booked Up');
        window. location. href='groundbooking.php';</script>";
        }
        else
        {
      
        
        $sql = "INSERT INTO bookground(sid,fname,ground,start,ending)  VALUES ('". $sid."', 
            '".$fname."','".$stadia."','". $from."','". $to."')";
          
        if(mysqli_query($conn, $sql))
        {
             
            echo "<script>
        window. alert('Ground Succesfully Booked Up');
        window. location. href='groundbooking.php';</script>";

         } 
         else
         {
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
          }
          
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
        ?>