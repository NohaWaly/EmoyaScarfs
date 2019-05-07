<?php
require_once('conn.php') ;
$data = $conn->query("SELECT * FROM Scarfvesdb")->fetchAll();
	?>
<?php include 'headeradmin.php';?>
<!-- PAGE CONTAINER-->
<div class="page-container">
	<!-- MAIN CONTENT-->
	<div class="main-content">
		
			 <div class="control-group">
					<h2 >Products</h2>
		<div class="controls">	<a href="insert.php?table=Scarfvesdb"  class="btn btn-primary" type="submit" name="yt0">Insert new product</a>	</div>
		</div> 
					
						<table class="table table-borderless table-striped table-earning">
							<thead>
								
								<tr>
									<th>ID</th>
									<th>Desription</th>
									<th>Price</th>
									<th>Available</th>
                                    <th>image</th>
												
								</tr>
							</thead>
							<tbody>
							
										<?php foreach ($data as $scarf ){?>
									<tr>
												<td><?php echo $scarf['ScarfID'];?></td>
												<td><?php echo $scarf['description'];?></td>
												<td><?php echo $scarf['price'];?></td>
                                                <td><?php echo $scarf['availability'];?></td>
                                                <td><?php echo $scarf['image'];?></td>
												<td><a href="update.php?table=Scarfvesdb&ScarfID=<?php echo $scarf['ScarfID']; ?>"  class="btn btn-primary" type="submit" name="yt0">Update</a>---<a href="delete.php?table=Scarfvesdb&ScarfID=<?php echo $scarf['ScarfID']; ?>"  class="btn btn-danger" type="submit" name="yt0">Delete</a></td>
									</tr>
									
											<?php }?>
							</tbody>
						</table>
					</div>
			
                            


<?php include 'footeradmin.php';?>

    