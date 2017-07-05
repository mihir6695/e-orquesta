<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<a href="index.php?page=news_form" class="btn btn-primary">Add New</a>
			
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
									<th>title</th>
                                    <th>upld_file</th>
                                    <th>description</th>
									<th>action</th>
								</tr>
							</thead>
							<tbody>
							<?php
							$sql = mysql_query("SELECT * FROM `news`");
                            while($row = mysql_fetch_assoc($sql))
							{
							?>
								<tr class="even gradeC">
									<td><?php echo $row['title'];?></td>
									<td>
											<?php if($row['upld_file']!=NULL) {?>
											<img src="<?php echo 'upload/news_upld_file/'.$row['upld_file'];?>" style="width:60px; height:60px;"/><?php }else{?>
											<img src="img/avatar.jpg">
										<?php } ?>
									</td> 
									<td><?php echo $row['description'];?></td>
									<td><a href="index.php?page=news_form&news_id=<?php echo $row['news_id']; ?>" class="btn btn-primary">Edit</a>&nbsp;<a href="index.php?page=news_action&news_id=<?php echo $row['news_id']; ?>" class="btn btn-info">Delete</a></td>
								</tr>
                            <?php } ?>
							</tbody>
						</table>
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->	
				
		    </div> <!-- /span12 -->
		    
		</div> <!-- /row -->
		
		
		
		
	</div> <!-- /.container -->