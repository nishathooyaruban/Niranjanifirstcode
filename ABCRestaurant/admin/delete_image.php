<?php
include 'config/config.php';  

$item_id=$_POST['item_id'];

mysqli_query($con,"DELETE FROM gallery WHERE id = '$item_id'");


echo'<script type="text/javascript">
<!--
alert("Successfully Deleted");
window.parent.location = "images.php"
//-->
</script>';




?>