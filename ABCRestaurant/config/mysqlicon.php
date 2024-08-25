<?php
$servername="localhost";
$username="root";
$password="";
$database="abc_restaurant";
//DB Connection via MYSQLI
$con=mysqli_connect('localhost','root','','abc_restaurant');
//check connection
if(!$con){
die("connection failed:".mysqli_connect_error());
}
?>