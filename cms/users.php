
<?php 
session_start();
if(!empty($_SESSION['login_user'])){ ?>


<?php
require_once('conn.php') ;
$data = $conn->query("SELECT * FROM AdminUsers")->fetchAll();
	?>
<?php include 'headeradmin.php';?>
<!-- PAGE CONTAINER-->
<div class="page-container">
	<!-- MAIN CONTENT-->
  
	<div class="main-content">
			<div class="control-group">
					<h2 class="title">Admins</h2> 
		           <div class="controls">	
            <a href="insert.php?table=AdminUsers"  class="btn btn-primary" type="submit" name="yt0">Intsert new Admin</a>	
                
                </div>
		</div>
            
                        
						<table class="table table-border table-striped table-earning">
							<thead>
								
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>password</th>
									<th>Action</th>
												
								</tr>
							</thead>
							<tbody>
							
										<?php foreach ($data as $user ){?>
									<tr>
												<td><?php echo $user['id'];?></td>
												<td><?php echo $user['name'];?></td>
												<td><?php echo $user['password'];?></td>
												<td><a href="update.php?table=AdminUsers&id=<?php echo $user['id']; ?>"  class="btn btn-primary" type="submit" name="yt0">Update</a>---<a href="delete.php?table=AdminUsers&id=<?php echo $user['id']; ?>"  class="btn btn-danger" type="submit" name="yt0">Delete</a></td>
									</tr>
									
											<?php }?>
							</tbody>
						</table>
					</div>
                            
                        

<?php include 'footeradmin.php';?>

<?php }else{ 
	header("location: http://localhost/faster_website%20-%20IT%20Project/pages/Admin.php");
}
?>