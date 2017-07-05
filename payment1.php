<?php
function getUserNameById($c_id){
	$sqlUser = mysql_query("select * from `custmore` where `Id`='".$c_id."'");
	$rowUser = mysql_fetch_assoc($sqlUser);
	return $rowUser['Name'];
}
function getEventNameById($s_id){
	$sql = mysql_query("select * from `artist` where `id`='".$s_id."'");
	$row = mysql_fetch_assoc($sql);
	return $row['first_name'];
}
?>
            <div class="banner">
      	<div class="wrap">
      	     <h2 style="font-size:15px;">Booking Confirmation</h2><div class="clear"></div>
      	</div>
    </div>
			
					<div class="widget-content" style="margin-top:50px;margin-left:50px;">
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
								</tr>								
                            <?php } ?>
							<form method="post" name="paypal_form" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
                <input type="hidden" value="jankitalati23@gmail.com" name="business">
                <input type="hidden" name="rm" value="2"/>
                <input type="hidden" name="cmd" value="_xclick"/>
                <input type="hidden" value="index.php?page=thanks" id="edit-return" name="return">
                <input type="hidden" name="method" value="Paypal"/>
                <input type="hidden" value="index.php?page=thanks&email=notify" name="notify_url">
                <input type="hidden" value="index.php?page=thanks&order=cancel" name="cancel_return"> 
                <input type="hidden" value="USD" id="edit-currency-code" name="currency_code">
                <input type="hidden" name="custom" value="<?php echo $_SESSION['book_id']; ?>">
                <input type="hidden" value="<?php echo nl2br($rwFetchUser['address']); ?>"  name="address1">
                 <input type="hidden" value="<?php echo $rwFetchUser['city'];  ?>" name="city">
                <input type="hidden" value="" name="country">
                <input type="hidden" value="<?php echo $rwFetchUser['email']; ?>"  name="email">
                <input type="hidden" value="<?php echo $rwFetchUser['name']; ?>"  name="first_name">
                <input type="hidden" value="" name="last_name">
                <input type="hidden" value=""  name="phone">
                <input type="hidden" value="<?php echo number_format($payamount,2);?>" name="amount">
                <input type="hidden" value="Order <?php echo $cartRecord['book_id']; ?> at Creation Events" name="item_name">
                <div style="" >
                <span style="float:right;margin-right:50px;" class="button active"> 	
                <input type="submit" name="confirm_order"  value="Confirm Booking">
                             </span>
                </div>
                
                </form>
							</tbody>
						</table>
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
					</div> <!-- /widget-content -->
					
              <!--<td align="left" valign="middle" style="">Sale:-</td>-->