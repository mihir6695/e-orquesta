<div class="container">
		
		
		
		
		<div class="row">
		    
		    <div class="span12">
	      		
	      		<div class="widget widget-table">
						
					<div class="widget-header">						
						<h3>
							<i class="icon-th-list"></i>
							Data Table Plugin							
						</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						<?php displayErrSucMsg(); ?>
						<table class="table table-striped table-bordered table-highlight" id="example">
							<thead>
								<tr>
									<th>first_name</th>
									<th>middle_name</th>
									<th>last_name</th>
									<th>email</th>
									<th>password</th>
                                    <th>phone_no</th>
                                    <th>gender</th>
                                    <th>profile</th>
									<th>action</th>
									
								</tr>
							</thead>
							<tbody>
							
						
							<?php
							
							
							$sql = mysql_query("SELECT * FROM `custmore`");
								
                            while($row = mysql_fetch_array($sql))
							{
							?>
							
								<tr class="even gradeC">
									<td><?php echo $row['first_name'];?></td>
									<td><?php echo $row['middle_name'];?></td>
									<td><?php echo $row['last_name'];?></td>
									<td><?php echo $row['email'];?></td>
									<td><?php echo $row['password'];?></td>
									<td><?php echo $row['phone_no'];?></td>
									<td><?php echo $row['gender'];?></td>
									  <td>
											<?php if($row['profile']!=NULL) {?>
											<img src="<?php echo 'upload/custmore_profile/'.$row['profile'];?>" style="width:60px; height:60px;"/><?php }else{?>
											<img src="img/avatar.jpg">
										<?php } ?>
									</td> 
                                     <td><a href="index.php?page=customer_action&c_id=<?php echo $row['c_id']; ?>" class="btn btn-info">Delete</a></td>
								</tr>
                            <?php } ?>
							</tbody>
						</table>
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->	
				
		    </div> <!-- /span12 -->
		    
		</div> <!-- /row -->
		
		
		
		
	</div> <!-- /.container -->