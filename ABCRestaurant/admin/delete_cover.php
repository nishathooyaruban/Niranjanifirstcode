<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);


 include 'config/config.php'; 

$loc_id =$_POST['loc_id'];



$update="UPDATE `itinery_cover` SET status = '0' WHERE id = '".$loc_id."'";

$run=mysqli_query($connect, $update);






echo '<script type="text/javascript">

		<!--

		alert("Successfully Removed");

		window.parent.location = "cover_images.php"

		//-->

		</script>' ;
	
?>
