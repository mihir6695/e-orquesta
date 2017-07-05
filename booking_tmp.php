<?php
$s_id = $_SESSION['s_id'];
$sql = mysql_query("SELECT * FROM `artist` where s_id='".$s_id."'");
$row = mysql_fetch_assoc($sql);
?>
<?php
if(isset($_GET['del_id']) && $_GET['del_id']!=''){
	$delete = $_GET['del_id'];
	$del = mysql_query("delete from artist_tmp where id='$delete'");
}
if(isset($_REQUEST['id']) && $_REQUEST['id'] != ''){
	$sqlEvent = mysql_query("select * from `artist` where id='".$_REQUEST['id']."'");
	$rowEvent = mysql_fetch_assoc($sqlEvent);
	
	if(isset($_SESSION['c_id']) && $_SESSION['c_id']!=''){
		$eventInsert = mysql_query("insert into artist_tmp(`id`,`artist_name`,`artist_profile`,`c_id`,`artost_fees`) values('".$rowArtist['id']."','".$rowArtist['firts_name']."','".$rowArtist['profile']."','".$_SESSION['Id']."','".$rowArtist['fees']."')");
	}
	header('location:index.php?page=booking_tmp');
}
?>
<br>
<center>

<table class="your_cart">
   <tr>
      <th width="223" align="left" valign="top">artist profile</th>
      <th width="223" align="left" valign="top">Name</th>
      <th width="132" align="center" valign="top">fees</th>
      
    </tr>
    <tr>
      <!--<td align="left" valign="middle" style="">Sale:-</td>-->
    </tr>
    <?php
	$productCartList = mysql_query("select * from `artist_tmp` where c_id='".$_SESSION['Id']."'");
	
	$totalCartRecord = mysql_num_rows($productCartList);
	if($totalCartRecord > 0)
	{ ?>
	
	<?php 
		/*while($cartRecord = mysql_fetch_assoc($productCartList))
		{
			$countProduct++;
			$totalAmmount = $totalAmmount + $cartRecord['fees'];*/
	?>
    <tr>
		<td align="left" valign="middle"><img src="<?php echo 'admin/upload/artist_profile'.$cartRecord['artist_profile']; ?>" width="100"></td>
        
      <td align="left" valign="middle"><?php echo $cartRecord['first_name']; ?></td>
      <td align="center" valign="middle" >Rs. <?php echo number_format($cartRecord['fees'], 2);?>
        
      <td align="center" valign="middle"><table width="95%" border="0" cellspacing="0" cellpadding="0">
      
      <tr id="select_shpmethod" name="select_shpmethod">
<td><a href="index.php?page=booking_tmp&del_id=<?php echo $cartRecord['id']; ?>" class="common_btn">Delete</a></td>
          </tr>
        </table></td>
      
	  <?php //$subTotal = $cartRecord->proPrice * $cartRecord->proQuantity; 
	  		//$mainSubTotal = $mainSubTotal + $subTotal;
	  ?>
	   <?php // echo number_format($subTotal, 2)?></div></td>
    </tr>	
	<?php /*}*/ ?>
    <tr>
      
	<tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp; <input type="hidden" id="smt" name="smt" value="<?php echo $countProduct; ?>" /></td>
          <tr class="total_amt_row">
      <td align="left" valign="top">&nbsp;</td>
      <td align="center" valign="top">&nbsp;</td>
      <td align="right" valign="top"><strong>Total:</strong></td>
      <td align="left" valign="top" class="total_amt">Rs.<?php echo number_format($totalAmmount + $totalVat, 2);?></td>
    </tr>
	<?php } else{  ?>
	 <tr>
      <td align="left" valign="middle" colspan="4" style="color:#FF0000;"><center>No Artists Selected</center></td>      
    </tr>
	<?php } ?>
    <tr>
      <td colspan="4" height="15">
      <div class="checkout_navi"> 
  	<a href="index.php?page=events" class="common_btn">Continue Select Event</a>
  	<a href="index.php?page=booking" class="common_btn checkout_btn">Booking</a> 
   
  </div>

      </td>
    </tr>
  </table>
  
  </center>  
  
  <style>
  <!--Cart Page-->

.checkout_container{width : 950px;padding : 5px; }
.checkout_container h1{padding:20px 0; margin:0;}
.checkout_container h2{padding:8px 10px; margin:0; background:#f6f6f6; border:1px solid #ececec; font-size:15px; font-weight:bold; font-family:Arial, Helvetica, sans-serif; color:#999;}



table.your_cart{font-size:13px; color:#666; font-family:Arial, Helvetica, sans-serif;}
table.your_cart td, table.your_cart th{padding:5px;}
table.your_cart th{background:#f6f6f6; border:1px solid #dadada;}
table.your_cart a.pro_name{font-weight:bold; font-size:13px; color:#0099ff;}
table.your_cart a.update_del{font-size:11px; line-height:16px; text-align:center; display:inline-block;}
table.your_cart .total_amt{font-weight:bold; font-size:14px;}
table.your_cart tr.total_amt_row{background:#f6f6f6; border-left:1px solid #DADADA;border-right:1px solid #DADADA;}

table.your_cart tr.total_amt_row td{border-top:1px solid #dadada; border-bottom:1px solid #dadada;}

.common_btn{float:left; background:#551C5B left center repeat-x; color:#fff; padding:10px 14px; font-size:13px; font-weight:bold; text-decoration:none;}
.common_btn span{float:left; background:#fff 100px 100px repeat-x;}
.common_btn:hover{background:#fff center repeat-x; color:#551C5B; text-decoration:none;}


.checkout_navi{float:left; width:650px; padding:20px 0 40px;}
.checkout_navi .checkout_btn{float:right;}
<!--Cart Page Over-->
  
  </style>