<?php
$id = $_GET['id'];
$sql = mysql_query("SELECT * FROM `gallery_mul` where id='".$id."'");
$row = mysql_fetch_assoc($sql);
?>
<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			    <a href="default.htm">Home</a> <span class="divider">/</span>
			  </li>
			  <li>
			    <a href="#">Components</a> <span class="divider">/</span>
			  </li>
			  <li class="active">Form Styles</li>
			</ul>
			
		</div> <!-- /.page-title -->
		
		<div class="row">
			
			<div class="span12">
	      		
	      		<div id="horizontal" class="widget widget-form">
	      			
	      			<div class="widget-header">	      				
	      				<h3>
	      					<i class="icon-pencil"></i>
	      					Horizontal Layout	      					
      					</h3>	
      				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						<?php displayErrSucMsg(); ?>
						<form class="form-horizontal" method="post" action="index.php?page=gallery_mul_action" enctype="multipart/form-data" onsubmit="return gallery_form();">
					        <fieldset>
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                            
					          <!--<div class="control-group">
					            <label class="control-label" for="input01">Name</label>
					            <div class="controls">
					              <input type="text" name="name"  class="input-large" id="name" value="<?php //if($_SESSION['name']!=''){ echo $_SESSION['name']; unset($_SESSION['name']); }else{ echo $row['name'];} ?>">
										<span style="display:none; color:#FF0000" id="req_name">enter name</span>
										<span style="display:none; color:#F00"id="valid_name">enter valid name</span>
									
									 </div>
					          </div>-->
                             
                              
                             <div class="control-group">
					            <label class="control-label" for="input01">photo</label>
					            <div class="controls">					              
					              <input type="file" class="input-large" name="photo" ><?php echo $row['photo'];?>
					             </div>
					          </div>	
															  
							
					          <div class="control-group">
					        
					          <div class="form-actions">
					            <input type="submit" name="submit" value="submit" class="btn btn-primary btn-large">
					            <button class="btn btn-large">Cancel</button>
					          </div>
					        </fieldset>
					      </form>	
						
					</div> <!-- /widget-content -->
						
				</div>	
				
				
		    </div> <!-- /span8 -->
		    
		    
		    
		</div> <!-- /row -->
		
		
		
		
	</div> <!-- /.container -->