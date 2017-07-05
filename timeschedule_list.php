<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<a href="index.php?page=timeschedule_form" class="btn btn-primary">Add New</a>
			
		</div> <!-- /.page-title -->
	
		
		<!-- /.page-title -->

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
									<th>description</th>
                                    <th>status</th>
									<th>action</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$sql = mysql_query("SELECT * FROM `timeschedule`");
                            while($row = mysql_fetch_assoc($sql))
							{
							?>
								<tr class="even gradeC">
									<td><?php echo $row['description'];?></td>
									<td><?php echo $row['status'];?></td>
                                    <td><a href="index.php?page=timeschedule_form&id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>&nbsp;<a href="index.php?page=timeschedule_action&id=<?php echo $row['id']; ?>" class="btn btn-info">Delete</a></td>
								</tr>
                            <?php } ?>
							</tbody>
						</table>
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->	
				
		    </div> <!-- /span12 -->
		    
		</div> <!-- /row -->
		
		
		
		
	</div> <!-- /.container -->