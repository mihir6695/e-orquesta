<?php
$book_id=$_GET['book_id'];
$sql="SELECT * FROM `booking` where book_id='$book_id'";
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
						<form class="form-horizontal" method="post" action="index.php?page=booking_form" enctype="multipart/form-data" onsubmit="return booking_form();">
					        <fieldset>
                            <input type="hidden" name="book_id" value="<?php echo $row['book_id'];?>"/>
                            <div class="control-group">
					            <label class="control-label" for="input01">fees</label>
					            <div class="controls">
					              <input type="text" name="fees"  class="input-large" id="fees" value="<?php echo $row['fees']; ?>">
								    
					            </div>
					          </div>
							<div class="control-group">
					            <label class="control-label" for="input01">name</label>
					            <div class="controls">
					              <input type="text" name="name"  class="input-large" id="name" value="<?php echo $row['name']; ?>">
								    
					            </div>
					          </div>
							  <div class="control-group">
					            <label class="control-label" for="input01">email</label>
					            <div class="controls">
					              <input type="text" name="email"  class="input-large" id="email" value="<?php echo $row['email']; ?>">
								    
					            </div>
					          </div>
                                <div class="control-group">
					            <label class="control-label" for="input01">start-time</label>
					            <div class="controls">
					              <input type="text" name="start-time"  class="input-large" id="start-time" value="<?php echo $row['start-time']; ?>">
								    
					            </div>
					          </div>
							   <div class="control-group">
					            <label class="control-label" for="input01">end-time</label>
					            <div class="controls">
					              <input type="text" name="end-time"  class="input-large" id="end-time" value="<?php echo $row['end-time']; ?>">
								    
					            </div>
					          </div>
							  
							   <div class="control-group">
					            <label class="control-label" for="input01">date</label>
					            <div class="controls">
					              <input type="text" name="date"  class="input-large" id="date" value="<?php echo $row['date']; ?>">
								    
					            </div>
					          </div>
							     <div class="control-group">
					            <label class="control-label" for="input01">phone_no</label>
					            <div class="controls">
					              <input type="text" name="phone_no"  class="input-large" id="phone_no" value="<?php echo $row['phone_no']; ?>">
								    
					            </div>
					          </div>
							     <div class="control-group">
					            <label class="control-label" for="input01">address</label>
					            <div class="controls">
					              <input type="text" name="address"  class="input-large" id="address" value="<?php echo $row['address']; ?>">
								    
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