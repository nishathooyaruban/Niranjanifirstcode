<?php
session_start();
include 'config/config.php'; 
date_default_timezone_set('Asia/colombo');


 $cdate=date('Y-m-d h:i:s');

$username = $_POST['email'];

$password = $_POST['password'];

if($username=="")
		{
			echo"Please enter the User name";
			return;
		}
if($password=="")
		{
			echo"Please enter the Password";
			return;
		}

$sqlid= "SELECT * FROM login WHERE username = '$username' and password = '$password' AND status='ENABLE'";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);
	if($norid>0){
	while($rowid=mysqli_fetch_array($runid))
	{
	 	$u_type = $rowid['u_type'];
	 	$u_id = $rowid['id'];

		
					
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['u_type'] = $u_type;
				$_SESSION['u_id'] = $u_id;
				/*$SQL="INSERT INTO login_details (user_name,time_date) VALUES('$username','$cdate')";
				$run=mySQL_query($SQL,$con);
				//header('location:item.php');*/
				
				echo'<script type="text/javascript">
			<!--

			window.parent.location = "dashboard.php"
			//-->
			</script>';
			
	}
	}else{
				
			
//Count the table row. 0 = No user exists

?>
<script type="text/javascript">
<!--

window.parent.location = "index.php?err_msg=1"
//-->
</script>
	<?php } ?>
</body>
</html>