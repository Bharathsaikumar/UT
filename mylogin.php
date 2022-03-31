<?php
session_start();
//header("Location:studentdashboard.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sports_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}




 
    
  $email=$_POST['email'];
  $thepass=$_POST['password'];
 // $count=0;
//$sql = "SELECT * FROM admin";
$sql= "SELECT * FROM members WHERE email = '".$email."' AND password = '".$thepass."'";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
$check = mysqli_fetch_array($result);
/*if(($check['email']==$email)&&($check['password']==$password))
{
	echo "Login Successful";
}
else
 {
	echo "failed";
}*/
$count = mysqli_num_rows( mysqli_query($conn,$sql));
//echo $count;
	if($count>0)
	{
		$_SESSION["fname"]=$check['fname'];
		$_SESSION["lname"]=$check['lname'];
		$_SESSION["sid"]=$check['student_id'];

		echo "<script>
		window. alert('Succesfully Logged in');
        window. location. href='dashboard.php';</script>";
		//sleep(10);
  		//header("Location:dashboard.php");
		
  		
  	}
  	else 
  	{
  		header("Location:index.php");
  		
  	}

mysqli_close($conn);
?>

