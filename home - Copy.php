
<?php
if($_SESSION['c_id']==NULL and $_SESSION['s_id']==NULL and $_SESSION['mul_id']==NULL)
{
	header('location:index.php');
}
?>


<div class="main" align="center" style="width:100%;">
<div class="project-list">
	 	 <div class="search_box">
			<form method="post" action="index.php?page=search_action2">
				<input type="text" value="" name="first_name" placeholder="search" >
				<input type="submit" name="submit" value="serch">
			</form>
			<?php
		?>
		 </div>
		</div>	
	<h4 style="font-family:kerla;font-size:45px;color:red;">
	<?php echo 'Wel-Come '.$_SESSION['first_name'];?></li>
	</h4>
	 <div class="project-wrapper" style="overflow:hidden;">
	   <div class="project">
	    <div class="blog-left">
									<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("project1",$con);

 $sel="select COUNT(*) as num from `gallery`";


$res=mysql_query($sel);
$row=mysql_fetch_assoc($res);
 $totalpage=$row['num'];

$perpage=$row['num'];
$page=$_GET['id'];
$endpage=2;
     $startpage=($page -1 )* $endpage;


$sql="select * from `artist` LIMIT $startpage,$endpage";
$result=mysql_query($sql,$con);
?>
<html>
	  <body>
	  <table border="1px solid black">
	  	
        <?php
while($row2=mysql_fetch_assoc($result))
  {
	  
	?>
		
	<tr>
				
	<td><?php echo $row2['first_name'];?></td>
    <td>
	<a href="index.php?page=artist_myprofile_cus&s_id=<?php echo $row2['s_id']; ?>" >
		<img src="<?php echo 'admin/upload/artist_profile/'.$row2['profile'];?>"/>
	</a></td>
	</tr>		
	</a>
    
  <?php
    }
	?>
      </table>
      </body>
      </html>
      <?php
echo "<br>";    
for($startpage=0;$startpage<=$perpage/2;$startpage++)
{
if($startpage)
{   
    ?>
	<a href="index.php?page=home&numrec=<?php echo $row['num']; ?>&id=<?php echo $startpage;  ?>" ><?php echo $startpage ;?></a>
   
<?php
}
}	
?>

	    </div>
		    <div class="blog-right">
						<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("project1",$con);

 $sel="select COUNT(*) as num from `gallery_mul`";


$res=mysql_query($sel);
$row=mysql_fetch_assoc($res);
 $totalpage=$row['num'];

$perpage=$row['num'];
$page=$_GET['id'];
$endpage=2;
     $startpage=($page -1 )* $endpage;


$sql="select * from `artist_mul` LIMIT $startpage,$endpage";
$result=mysql_query($sql,$con);
?>
<html>
	  <body>
	  <table border="1px solid black">
	  	
        <?php
while($row1=mysql_fetch_assoc($result))
  {
	  
	?>
	<tr>
    <td>
	<a href="index.php?page=artist_mul_profile_cus&mul_id=<?php echo $row1['mul_id']; ?>" >
	<img src="<?php echo 'admin/upload/artist_mul_profile/'.$row1['profile'];?>"/>
	</a></td>
	</tr>		
	
    
  <?php
    }
	?>
      </table>
      </body>
      </html>
      <?php
echo "<br>";    
for($startpage=0;$startpage<=$perpage/2;$startpage++)
{
if($startpage)
{   
    ?>
	<a href="index.php?page=home&numrec=<?php echo $row['num']; ?>&id=<?php echo $startpage;  ?>" ><?php echo $startpage ;?></a>
   
<?php
}
}	
?>

			
	    </div>
	
	   <div class="clear"></div>
	   
	 </div>
		 <div class="project-sidebar"style="">
	 	<!--<marquee behavior="scroll" direction="down" scrollamount="17" onmouseover="this.stop();" onmouseout="this.start();">
		
-->
		
				
		<div>			
				
			
		
		<?php
							$sql = mysql_query("SELECT * FROM `gallery`");
                            while($row = mysql_fetch_assoc($sql))
							{
							?>
								<ul class="even gradeC" style="margin:0px;padding:0px;">

<?php									
									$video=$row['video'];
									if($video!='')
									{
										
								
									?>
									
									
									
									
									 <li style="float:left;">
									 <video  src="<?php echo 'admin/upload/gallery_video/'.$row['video'];?>" controls="controls" style="height:60%;width:143%;margin:0px 25px;" autoplay></video> 
																			</li>
									 <?php } ?>
									 <?php } ?>
									
									
		
		<?php
							$sql = mysql_query("SELECT * FROM `gallery_mul`");
                            while($row = mysql_fetch_assoc($sql))
							{
							?>
								<ul class="even gradeC" style="height:50%;">

<?php					
									$video=$row['video'];
									if($video!='')
									{
										
								
									?>
									
									
									
									
									 <li style="float:left;">
									 <video  src="<?php echo 'admin/upload/gallery_video_mul/'.$row['video'];?>" controls="controls" style="height:60%;;width:148%;margin:0px 25px;"autoplay></video> 
														</li>
									 <?php } ?>
									
									
																		
									
								</ul>
								
                          
				
				<?php } ?>
			</div>				
				
				<!--</marquee>
				-->
				
		
	 </div>	
	 <div class="clear"></div>
  </div>
 </marquee>  		
             </div>
		    
      	                                                                                            