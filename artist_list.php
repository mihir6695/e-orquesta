<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<a href="index.php?page=artist_form" class="btn btn-primary">Add New</a>
			
		</div> <!-- /.page-title -->
	
		
		
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
									<th>Email</th>
									<th>Phone No</th>
									<th>city</th>
                                    <th>Gender</th>
                                    <th>Profile</th>
									<th>fees</th>
									<th>action</th>
									
								</tr>
							</thead>
							<tbody>
							
						
							<?php
							
							
							$sql = mysql_query("SELECT * FROM `artist`");
								
                            while($row = mysql_fetch_array($sql))
							{
							?>
							
								<tr class="even gradeC">
									<td><?php echo $row['first_name'];?></td>
									<td><?php echo $row['middle_name'];?></td>
									<td><?php echo $row['last_name'];?></td>
									<td><?php echo $row['email'];?></td>									
									<td><?php echo $row['phone_no'];?></td>	
									<td><?php echo $row['city'];?></td>
									<td><?php echo $row['gender'];?></td>
						
									 <td>
											<?php if($row['profile']!=NULL) {?>
											<img src="<?php echo 'upload/artist_profile/'.$row['profile'];?>" style="width:60px; height:60px;"/><?php }else{?>
											<img src="img/avatar.jpg">
										<?php } ?>
									</td> 

								
									<td><?php echo $row['fees'];?></td>
									
									 <td><a href="index.php?page=artist_form&s_id=<?php echo $row['s_id']; ?>" class="btn btn-primary">Edit</a>&nbsp;<a href="index.php?page=artist_action&s_id=<?php echo $row['s_id']; ?>" class="btn btn-info">Delete</a></td>
								</tr>
                            <?php } ?>
							</tbody>
						</table>
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->	
				
		    </div> <!-- /span12 -->
		    
		</div> <!-- /row -->
		
		
		
		
	</div> <!-- /.container -->