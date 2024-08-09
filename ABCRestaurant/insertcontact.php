<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];


// database connection
 include 'mysqlicon.php'; 
 
$SQL="INSERT INTO contact (name,email,phone,message) VALUES('$name','$email','$phone','$message')";

$run=mysqli_query($con,$SQL);

//send email to customer and hotel staff
	$to = ''.strip_tags($email).',ruban0802@gmail.com ';
					$subject = 'Contact message from abc restaurant';
					// Always set content-type when sending HTML email
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					$message = '<div class="table-responsive"  style="width:700px;margin:0 auto">  
                             <table class="table" style="width:75%;margin:0 auto">  
                             
							
                               <tr>   <td>Name</td>  
									 <td style="text-align:right;">'.$name.'</td>  
                                   
                                   
                               </tr>  
							     <tr>   <td>Email</td>  
									 <td style="text-align:right;">'.$email.'</td>  
                                   
                                   
                               </tr>  
							   <tr>   <td>Phone</td>  
									 <td style="text-align:right;">'.$phone.'</td>  
                                   
                                   
                               </tr>  
							   <tr>   <td>Message</td>  
									 <td style="text-align:right;">'.$message.'</td>  
                                   
                                   
                               </tr>  
                              
                                         </table>  
                                 
                           
                     </div>  ';
					// More headers
					$headers .= 'From: Signature Cusine -<ruban0802@gmail.com>'. "\r\n".
					'Reply-To: ruban0802@gmail.com' . "\r\n" ;
				

					mail($to,$subject,$message,$headers);
					
					echo'<script type="text/javascript">
<!--
window.location = "thankyou_mail.html"
//-->
</script>';
?>php