<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<a href="index.php?page=booking_form" class="btn btn-primary">Add New</a>
			
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
									<th>fees</th>
									<th>name</th>
									<th>Email</th>
									<th>starttime</th>
									<th>endtime</th>
									<th>date</th>
									<th>address</th>
                                    <th>phone_no</th>
									<th>action</th>
									
								</tr>
							</thead>
							<tbody>
							
						
							<?php
							
							
							$sql = mysql_query("SELECT * FROM `booking`");
								
                            while($row = mysql_fetch_array($sql))
							{
							?>
							
								<tr class="even gradeC">
									<td><?php echo $row['fees'];?></td>
									<td><?php echo $row['name'];?></td>
									<td><?php echo $row['email'];?></td>
									<td><?php echo $row['starttime'];?></td>									
									<td><?php echo $row['endtime'];?></td>
									<td><?php echo $row['date'];?></td>	
									<td><?php echo $row['address'];?></td>
									<td><?php echo $row['phone_no'];?></td>
									 
									 <td><a href="index.php?page=booking_form&book_id=<?php echo $row['book_id']; ?>" class="btn btn-primary">Edit</a>&nbsp;<a href="index.php?page=booking_action&book_id=<?php echo $row['book_id']; ?>" class="btn btn-info">Delete</a></td>
								</tr>
                            <?php } ?>
							</tbody>
						</table>
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->	
				
		    </div> <!-- /span12 -->
		    
		</div> <!-- /row -->
		
		
		
		
	</div> <!-- /.container -->