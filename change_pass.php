<div id="all">
<div id="content">

            <div class="container">


                <div class="col-md-12">
                    <div class="box">
                        <h1>Change Password </h1>
         
<form action="index.php?page=change_pass_action" method="post" enctype="multipart/form-data">
<?php 
							$s_id=$_SESSION['s_id'];
							$_SESSION['password']=$row['password'];
							$sql="select * from `artist` Where `s_id`='$s_id'";
							$query=mysql_query($sql);
							$row=mysql_fetch_assoc($query);
							
							?>

                            <input type="hidden" name="id" value="<?php echo $row['s_id']; ?>"/>
                            
                           <div class="col-sm-12">
                            <div class="form-group">
                                <label for=""><b style="color:#F00;">*</b> Change Password </label>
                                <input type="text" name="password" value="<?php echo $row['password'];?>"class="form-control"  required="required">
                            </div>
                           </div>
                            
                            
                            
                            <div class="text-center">
                                <button type="submit" name="submit" value="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Update Password</button>
                            </div>
                        </form>
                    </div>
                </div>

                


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
</div>