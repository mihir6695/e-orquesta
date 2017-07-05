<?php
$event_id = $_GET['event_id'];
$sql = mysql_query("SELECT * FROM `event` where event_id='".$event_id."'");
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
						<form class="form-horizontal" method="post" action="index.php?page=event_action" enctype="multipart/form-data" >
					        <fieldset>
                            <input type="hidden" name="event_id" value="<?php echo $row['event_id']; ?>" />
                            
					        
                            
					          </div>
                             
                             <div class="control-group">
					            <label class="control-label" for="input01">image</label>
					            <div class="controls">					              
					              <input type="file" class="input-large" name="image" ><?php echo $row['image'];?>
					             </div>
					          </div>	
								<div class="control-group">
					            <label class="control-label" for="input01">location</label>
					            <div class="controls">
					              <input type="text" name="location" class="input-large" id="location" value="<?php if($_SESSION['location']!=''){ echo $_SESSION['location']; unset($_SESSION['location']); }else{ echo $row['location'];} ?>">
										
							   </div>
					          </div>							  
							<div class="control-group">
					            <label class="control-label" for="input01">date</label>
					            <div class="controls">
					              <input type="text" name="date" class="input-large" id="date" value="<?php if($_SESSION['date']!=''){ echo $_SESSION['date']; unset($_SESSION['date']); }else{ echo $row['date'];} ?>">
										
							   </div>
					          </div>	
					          	<div class="control-group">
					            <label class="control-label" for="input01">time</label>
					            <div class="controls">
					              <input type="text" name="time" class="input-large" id="time" value="<?php if($_SESSION['time']!=''){ echo $_SESSION['time']; unset($_SESSION['time']); }else{ echo $row['time'];} ?>">
										
							   </div>
					          </div>
							  <div class="control-group">
							  <label class="control-label" for="input01">decription</label>
							   <div class="controls">
							   <textarea class="input-large" name="description" value="<?php if($_SESSION['description']!=''){ echo $_SESSION['description']; unset($_SESSION['description']); }else{ echo $row['description'];} ?>" >
								</textarea>
								</div>
								</div>
								<div class="control-group">
					            <label class="control-label" for="input01">endtime</label>
					            <div class="controls">
					              <input type="text" name="endtime" class="input-large" id="endtime" value="<?php if($_SESSION['endtime']!=''){ echo $_SESSION['endtime']; unset($_SESSION['endtime']); }else{ echo $row['endtime'];} ?>">
										
							   </div>
					          </div>
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