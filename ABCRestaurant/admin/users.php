<?php include('config/header.php');?>   
<?php include('config/side_menu.php');?>   

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Users table</h3>
                                
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>Username</th>
                                                <th>User Type</th>
                                             
                                                <th>Status</th>
                                             
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										 include 'config/config.php'; 
$sqlid= "SELECT * FROM login";
	$runid=mysqli_query($con,$sqlid) or die("SQL error");
	$norid=mysqli_num_rows($runid);

	while($rowid=mysqli_fetch_array($runid))
	{ 
										?>
                                            <tr class="tr-shadow">
                                              
                                                <td><?php echo $rowid['username']; ?></td>
                                                <td>
                                                    <span class="block-email"><?php echo $rowid['u_type']; ?></span>
                                                </td>
                                              
                                                <td>
                                                    <span class="status--process"><?php echo $rowid['status']; ?></span>
                                                </td>
                                               
                                             
                                            </tr>
                                            <tr class="spacer"></tr>
	<?php } ?>           
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                       
                  
                    </div>
                </div>
            </div>
        </div>
<?php include('config/footer.php');?>
