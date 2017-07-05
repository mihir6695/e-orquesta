<?php
if($_SESSION['c_id']==NULL and $_SESSION['s_id']==NULL and $_SESSION['mul_id']==NULL)
{
	header('location:index.php');
}
?>
<div class="main">	
	 <div class="project-wrapper">
	    <div class="wrap">
	 	  <div class="contact">
	 	  		<div class="cont span_2_of_contact">
	 	  		<h5 class="leave">
				<ul>
				<li style="color:#FFF; margin:15px 0px 10px 40px;">
					<?php echo 'Welcome '.$_SESSION['first_name'];?>					
                </li>
				
				</ul>
				</h5>
					
					</div>
				
	 	  		<div class="cont span_3_of_contact">
				<table>
					<thead>
								<tr>
									<th style="color:#F00">first_name</th>
									<th style="color:#F00">middle_name</th>
									<th style="color:#F00">last_name</th>
                                    <th style="color:#F00">email</th>
                                    <th style="color:#F00">city</th>
									<th style="color:#F00">gender</th>
									<th style="color:#FF0">phoneno</th>
								</tr>
							</thead>
							<tbody>
							<?php
							
							$id = $_SESSION['id'];
							$sql = mysql_query("SELECT * FROM `custmoret` where id='".$id."'");
							while($row = mysql_fetch_assoc($sql))
							{
							?>
								<tr>
									<td><?php echo $row['first_name'];?></td>
									<td><?php echo $row['middle_name'];?></td>
									<td><?php echo $row['last_name'];?></td>
									<td><?php echo $row['email'];?></td>
									
									<td><?php echo $row['city'];?></td>
									<td><?php echo $row['gender'];?></td>
									
									<td><?php echo $row['phone_no'];?></td>
                                    <td>
									<a href="index.php?page=customer_register&id=<?php echo $row['id'];?>" class="btn btn-primary"style="color:#00F">Edit</a></td>
								</tr>
                            <?php } ?>
							</tbody>
						</table>
						
							
				</div>	            
			
				</form>
				
				</div>
				<div class="clear"></div>				
		    </div>
		</div>
     </div>
  </div>