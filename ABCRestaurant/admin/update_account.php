<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);


 include 'config/config.php'; 
$name =$_POST['name'];
$phone =$_POST['phone'];
$email =$_POST['email'];
$pass =$_POST['pass'];

$user_id =$_POST['user_id'];

date_default_timezone_set('Asia/colombo');



 $created_on=date('Y-m-d h:i:s');


$update="UPDATE `users` SET name = '".$name."' ,phone = '".$phone."',email = '".$email."',pass = '".$pass."', WHERE id = '".$user_id."'";

$run=mysqli_query($connect, $update);






echo '<script type="text/javascript">

		<!--

		alert("Successfully Updated");

		window.parent.location = "dashboard.php"

		//-->

		</script>' ;
	
?>
