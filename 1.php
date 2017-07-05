<?<?php  
		$limit = 2;  
		if (isset($_GET['page'])) {
			$page  = $_GET['page'];
		} else {
			$page=1;
		}
		$offset = ($page-1) * $limit;
		$sql='SELECT * FROM Gallery ORDER BY id ASC LIMIT '. $limit .' offset ' . $offset;
		$rs_result = mysql_query($sql);
		// echo "<pre>";
		// print_r(mysql_fetch_object($rs_result));
		// exit;
	?>  
	<table class="table table-bordered table-striped">  
	<thead>  
		<tr>  
			<th>id</th> 
		</tr>  
	</thead> 
	<tbody>  
		<?php  
		while ($row = mysql_fetch_assoc($rs_result)) {  
		?>  
					<tr>  
					<td><?php echo $row["id"]; ?></td>  
					<td><?php if($row['photo']!=NULL) {?>
					<img src="<?php echo 'admin/upload/gallery_photo/'.$row['photo'];?>"   style="align:center;Height:25%;width:25%;"/><?php } ?>									</td> 
					</td>  
					</tr>  
		<?php  
		};  
		?>  
	</tbody>  
	</table>  
	<?php  
	$sql = "SELECT COUNT(id) FROM gallery";  
	$rs_result = mysql_query($sql);  
	$row = mysql_fetch_row($rs_result);  
	$total_records = $row[0];  
	$total_pages = ceil($total_records / $limit);
	$pagLink = "<div class='pagination'>";  
	for ($i=1; $i<=$total_pages; $i++) {  
		$pagLink .= "<a href='1.php?page=".$i."'>".$i."</a>";  
	}
	echo $pagLink . "</div>";  
	?>
</body>
</html>
