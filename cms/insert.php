<?php $table=($_GET['table']);  ?>

<?php 
if($_SERVER["REQUEST_METHOD"] == "POST" AND $table=='AdminUsers'){

	require_once('conn.php') ;
	$name = $_POST['username'];
	$passcode = $_POST['passcode']; 
	$sql = "INSERT INTO {$table} (name, password)
	VALUES ('{$name}', '{$passcode}')";

	$conn->exec($sql);

	header('Refresh:0; users.php');
}
if($_SERVER["REQUEST_METHOD"] == "POST" AND $table=='Scarfvesdb'){

	require_once('conn.php') ;
	$description = $_POST['description'];
	$price = $_POST['price']; 
    $avaiable = $_POST['availability']; 
    $img = $_POST['image']; 
	$sql = "INSERT INTO {$table} (description, price,availability,image)
	VALUES ('{$description}', '{$price}','{$avaiable}','{$img}')";

	$conn->exec($sql);

	header('Refresh:0; product.php');
}




?>


<?php 
session_start();
if(!empty($_SESSION['login_user'])){ ?>

	<?php include 'headeradmin.php';?>

	<?php if($table=='AdminUsers'){ ?>


		<div class="page-container">
				
			<div class="main-content">
				<div class="section__content section__content--p30">
	
					<form class="form-horizontal"  action="" method="post">		
						
	
						<div class="control-group "><label class="control-label required" for="Aboutus_vision">User Name <span class="required">*</span></label><div class="controls"><input class="span5" maxlength="255" name="username" id="Aboutus_vision" type="text"></div></div>
						<div class="control-group "><label class="control-label required" for="Aboutus_mission">Password <span class="required">*</span></label><div class="controls"><input class="span5" maxlength="255" name="passcode" id="Aboutus_mission" type="text"></div></div>								
						<div class="control-group ">
							<div class="controls">	<button class="btn btn-primary" type="submit" name="yt0">Create</button>	</div>
						</div>
			
					</form>

				</div>
                        
			</div>
		</div>
			<?php  }?>
	
  <?php if($table=='Scarfvesdb'){ ?>            
                                  
            <div class="page-container">
				
			<div class="main-content">
				<div class="section__content section__content--p30">
	
					<form class="form-horizontal"  action="" method="post">		
						
	
						<div class="control-group ">
                            <label class="control-label required" for="Aboutus_vision">Description <span class="required">*</span>
                            </label>
                        <div class="controls"><input class="span5" maxlength="255" name="description"          id="Aboutus_vision" type="text"></div>
                        </div>
						<div class="control-group ">
                                <label class="control-label required" for="Aboutus_mission">price<span class="required">*</span></label>
                        <div class="controls">
                            <input class="span5" maxlength="255" name="price" id="Aboutus_mission" type="text">
                        </div></div>	
                        
                        	<div class="control-group ">
                                <label class="control-label required" for="Aboutus_mission">	availability <span class="required">*</span></label>
                        <div class="controls">
                            <input class="span5" maxlength="255" name="availability" id="Aboutus_mission" type="text">
                        </div></div>
                                    
                           	<div class="control-group ">
                                <label class="control-label required" for="Aboutus_mission">image<span class="required">*</span></label>
                        <div class="controls">
                            <input class="span5" maxlength="255" name="image" id="Aboutus_mission" type="text">
                        </div></div>
                                    
						<div class="control-group ">
							<div class="controls">	<button class="btn btn-primary" type="submit" name="yt0">Create</button></div>
						</div>
			
					</form>

				</div>
                                    
                </div>
                                    </div>
            
            
         <?php    } }?>

	<?php include 'footeradmin.php';?>
    