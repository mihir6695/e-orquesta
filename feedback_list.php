<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<a href="index.php?page=feedback_form" class="btn btn-primary">Add New</a>
			
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
									
									<th>name</th>
									<th>email</th>
									<th>contact No</th>
									<th>feedback</th>
									<th>Status</th>
									<th>action</th>
                                   
									
								</tr>
							</thead>
							<tbody>
							
						
							<?php
							
							
							$sql = mysql_query("SELECT * FROM `feedback`");
								
                            while($row = mysql_fetch_array($sql))
							{
							?>
							
								<tr class="even gradeC">
									
									<td><?php echo $row['name'];?></td>
									<td><?php echo $row['email'];?></td>
									<td><?php echo $row['contact_no'];?></td>
									<td><?php echo $row['feedback'];?></td>
									<td><?php echo $row['status'];?></td>
									
                                     <td>
									 <a href="index.php?page=feedback_form&feed_id=<?php echo $row['feed_id'];?>" class="btn btn-primary">Edit</a>&nbsp;
									 <a href="index.php?page=feedback_action&feed_id=<?php echo $row['feed_id']; ?>" class="btn btn-info">Delete</a>
									 </td>
								</tr>
                            <?php } ?>
							</tbody>
						</table>
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->	
				
		    </div> <!-- /span12 -->
		    
		</div> <!-- /row -->
		
		
		
		
	</div> <!-- /.container -->