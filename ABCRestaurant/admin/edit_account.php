<?php include('config/header.php');?>   
<?php include('config/side_menu.php');?>   
   <!-- PAGE CONTAINER-->
        

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          
                           
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Edit Account</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="update_account.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                         <?php
										 $user_id=$_POST['user_id'];
										 $sqlusere= "SELECT * FROM users WHERE id='$u_id'";
	$runusere=mysqli_query($con,$sqlusere) or die("SQL error");
	$norusere=mysqli_num_rows($runusere);

	while($rowusere=mysqli_fetch_array($runusere))
	{ 

	
?>										 
                                         <input type="hidden" value="<?php echo $user_id; ?>" name="user_id">
											  <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name" value="<?php echo $rowusere['name']; ?>" placeholder="Name" class="form-control">
                                                   
                                                </div>
                                            </div>
											  <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Phone Number</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="phone" value="<?php echo $rowusere['phone']; ?>" placeholder="Phone" class="form-control">
                                                   
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Email Input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email-input" name="email" value="<?php echo $rowusere['email']; ?>" placeholder="Enter Email" class="form-control">
                                                   
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password-input" name="pass" value="<?php echo $rowusere['pass']; ?>" placeholder="Password" class="form-control">
                                                    
                                                </div>
                                            </div>
                                          
                                            
                                          
                                          
                                           
                                          
                                            
                                            
                                      
                                      <?php } ?>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                       
                                    </div>
                                </div>
                                 </form>
                            </div>
                            </div>
                            </div>
                            </div>
                         
		
		<?php include('config/footer.php');?>