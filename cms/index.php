<?php session_start();
if(!empty($_SESSION['login_user'])){ ?>


<?php include 'headeradmin.php';?>
<div class="main">
<h1>Welcome<br> to<br>Admin control panel</h1>
</div>


<?php include 'footeradmin.php';?>
<?php }else{ 
	header("location: http://localhost/faster_website%20-%20IT%20Project/pages/Admin.php");
}
?>

