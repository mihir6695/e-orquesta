<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<a href="index.php?page=city_form" class="btn btn-primary">Add New</a>
			
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
						<?php
							if($_SESSION['sucMsg']!=''){
								echo $_SESSION['sucMsg'];
								unset($_SESSION['sucMsg']);	
							}
						?>
						<table class="table table-striped table-bordered table-highlight" id="example">
							<thead>
								<tr>
									<th>City Name</th>
									<th>State Name</th>
                                    <th>Action</th>
								</tr>
							</thead>
							<tbody><?php
							$row1 = mysql_query("SELECT * FROM `city`");
                            while($row = mysql_fetch_assoc($row1))
							{
							
								?>
								<tr class="even gradeC">
									<td><?php echo $row['city_name'];?></td>
									<td><?php echo getStateName($row['state_id']);?></td>
                                    <td><a href="index.php?page=city_form&id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>&nbsp;<a href="index.php?page=city_action&id=<?php echo $row['id']; ?>" class="btn btn-info">Delete</a></td>
								</tr>
                               <?php } ?>
							</tbody>
						</table>
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->	
				
		    </div> <!-- /span12 -->
		    
		</div> <!-- /row -->
		
		
		
		
	</div> <!-- /.container -->