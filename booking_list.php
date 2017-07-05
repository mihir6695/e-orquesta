
<?php
if($_SESSION['c_id']==NULL and $_SESSION['s_id']==NULL and $_SESSION['mul_id']==NULL)
{
	header('location:index.php');
}
?>
 <div class="banner">
<div class="about-middle">
		   	 <h4><span>view booking </span></h4>
		   	  </div>
</div>	
<div class="container">		
		<div class="row">
		    
		    <div class="span12">
	      		
	      		<div class="widget widget-table">
				
					<div class="widget-content">
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
									<th>city</th>
									<th>state</th>
									<th>status</th>
									
								</tr>
							</thead>
							<tbody>
							
						
							<?php
							
							$c=$_SESSION['c_id'];
							$sql = mysql_query("SELECT * FROM `booking` where c_id='$c'");
								
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
									<td><?php echo $row['city'];?></td>
									<td><?php echo $row['state'];?></td>
									<td><?php echo $row['status'];?></td>
										<td>
										<?php if($row['status']=='accept'){?>
										<a href="index.php?page=payment1">
										<input type="submit"value="payment">
										
										</a>
										<?php } else  { ?>
										</td>
									
								
	<?php } ?>
										
						
					
									 
								</tr>	
								
                            <?php } ?>
							</tbody>
						</table>
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->	
				
		    </div> <!-- /span12 -->
		    
		</div> <!-- /row -->
		
		
		
<br>		
<br>		
<br>		
<br>		
<br>		
<br>		
<br>		
<br>		
<br>		
<br>		
<br>		
	</div> <!-- /.container -->