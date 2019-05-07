<?php $table=($_GET['table']);  ?>
<?php 
session_start();
if(!empty($_SESSION['login_user'])){ ?>

	<?php 
	if($table=='AdminUsers'){

		require_once('conn.php') ; 

		// sql to delete a record
		$sql = "DELETE FROM AdminUsers WHERE id={$_GET['id']}";

		// use exec() because no results are returned
		$conn->exec($sql);
    
    
		header('Refresh:0; users.php');

	}?>
	<?php 
	if($table=='Scarfvesdb'){

		require_once('conn.php') ; 

		// sql to delete a record
		$sql = "DELETE FROM Scarfvesdb WHERE ScarfID={$_GET['ScarfID']}";

		// use exec() because no results are returned
		$conn->exec($sql);
    
    
		header('Refresh:0; product.php');

	}?>
	
	<?php }else{ 
	header("location: http://localhost/faster_website%20-%20IT%20Project/pages/Admin.php");
}
?>