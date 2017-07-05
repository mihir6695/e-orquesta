<?php
$id=$_GET['id'];
$sql="SELECT * FROM `timeschedule` where id='$id'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>
<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			    <a href="index.php">Home</a> <span class="divider">/</span>
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
						<form class="form-horizontal" method="post" action="index.php?page=timeschedule_action" enctype="multipart/form-data">
					        <fieldset>
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
                            
					          
							  
							    <div class="control-group">
							  <label class="control-label" for="input01">description</label>
							   <div class="controls">
							   <textarea class="input-large" name="description" value="<?php if($_SESSION['description']!=''){ echo $_SESSION['description']; unset($_SESSION['description']); }else{ echo $row['description'];} ?>" >
								</textarea>
								</div>
								</div>
									  <div class="control-group">
					            <label class="control-label">Status</label>
					            <div class="controls">
					              <label class="radio">
					                <input type="radio" name="status" id="active" value="Active" <?php if($row['status']=='Active' || $row['ststus']=='' ){?> checked="checked" <?php } ?>>Active
					              </label>
					              <label class="radio">
					                <input type="radio" name="status" id="inactive" value="inactive" <?php if($row['status']=='Inactive'){?> checked="checked" <?php } ?>>Inactive
									
								 </label>
								      </div>
					          </div>
							    <div class="form-actions">
					            <input type="submit" name="submit" value="submit" class="btn btn-primary btn-large">
					            <button class="btn btn-large">Cancel</button>
					          </div>
					        </fieldset>
					      </form>	
						
					<!-- /widget-content -->
						
				</div>	
				
				
		    </div> <!-- /span8 -->
		    
		    
		    
		</div> <!-- /row -->
		
		
		
		
	</div> <!-- /.container -->