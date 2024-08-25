<?php include('config/header.php');?>   
<?php include('config/side_menu.php');?>   

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Menu Items</h3>
                                
                              <div class="table-responsive">
								<table class="table">
								<thead>
								<th>Name</th>
								<th>Image</th>
								<th>Price</th>
								
								
								<th></th>
								</tr>
								</thead>
								<tbody>
								<?php										 
								include 'config/config.php'; 	
								
								date_default_timezone_set('Asia/colombo'); $created_on=date('Y-m-d');	
								
										$sqlid= "SELECT * FROM food_items";	
								
								
								$runid=mysqli_query($con,$sqlid) or die("SQL error");	
								$norid=mysqli_num_rows($runid);	while($rowid=mysqli_fetch_array($runid))	{ 	
								?>                                            
								<tr class="tr-shadow" style="background:#fff;">                                                                                              
								<td><?php echo $rowid['name']; ?></td>                                                
								<td><img src="../<?php echo $rowid['img']; ?>" style="width:150px;height:150px;object-fit:cover;"></td>
								<td class="desc"><?php echo $rowid['price']; ?></td>
								
								</tr>
								<?php } ?>
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
