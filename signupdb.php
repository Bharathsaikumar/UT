<?php
  
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
     if(empty( $_POST['fname'])||empty( $_POST['lname'])||empty( $_POST['email'])||empty( $_POST['sid'])||empty( $_POST['school'])||empty( $_POST['password']))
     {
       echo "Input all the fields";
      // header("Location:signup.php");
     }
     else
     {
        $fname =  $_POST['fname'];
        $lname = $_POST['lname'];
        $email =  $_POST['email'];
        $sid =  $_POST['sid'];
        $school =  $_POST['school'];
        $password = $_POST['password'];
      
         $checkingsql="SELECT * FROM members WHERE email='".$email."'";
        $result = mysqli_query($conn,$checkingsql) or die(mysqli_error($conn));
        // $check = mysqli_fetch_array($result);
        $count = mysqli_num_rows( $result);
        if($count>0)
        {
            echo "<script>
        window. alert('this  user email already exists.please use another');
        window. location. href='index.php';</script>";
        }
        else
        {

        $sql = "INSERT INTO members(fname,lname,email,student_id,school,password)  VALUES ('". $fname."', 
            '".$lname."','".$email."','". $sid."','". $school."','". $password."')";
          
        if(mysqli_query($conn, $sql))
        {
             
            echo "<script>
        window. alert('Succesfully Signed Up');
        window. location. href='index.php';</script>";

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