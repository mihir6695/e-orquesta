<?php
if($_SESSION['c_id']==NULL and $_SESSION['s_id']==NULL and $_SESSION['mul_id']==NULL)
{
	header('location:index.php');
}
?>
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
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							
						
							<?php
							
							$mul_id=$_SESSION['mul_id'];
							$sql = mysql_query("SELECT * FROM `booking_mul` where mul_id='$mul_id'");
								
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
									<td><?php echo $row['phoneno'];?></td>
									<td><?php echo $row['city'];?></td>
									<td><?php echo $row['state'];?></td>
									<td>
									<form action="index.php?page=booking_mul_action1&booking_id=<?php echo $row['booking_id']; ?>" method="post">
									<input type="radio" name="status" value="denied	"<?php if($row['status']=='denied'){?>  checked="checked" <?php } ;?>>delete
									<input type="radio" name="status" value="accept"<?php if($row['status']=='accept'){?>  checked="checked" <?php } ;?>>Accept
									
									<input type="submit" name="submit" value="submit">
									</form>
									</td>
									<td></td>

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
<br>		
<br>		
<br>		
<br>		
<br>	
		
		
	</div> <!-- /.container -->