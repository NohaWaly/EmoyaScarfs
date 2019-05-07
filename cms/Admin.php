
<?php require_once('conn.php') ;?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	// username and password sent from form 
      
	$myusername = $_POST['uname'];
	$mypassword = $_POST['psw'];
	$sql = "SELECT * FROM AdminUsers WHERE name = '{$myusername}' AND password = '{$mypassword}'";
	$result = $conn->query($sql);

	if($result != NULL){
		session_start();
		$_SESSION['login_user'] = $myusername;
		header("location: http://localhost/EmoyaScarfs/cms/index.php");
	}
	//If result matched $myusername and $mypassword, table row must be 1 row
	var_dump($result);
	
}
?>



<?php include 'headeradmin.php';?>


<form class="" method="post" action="">
    <div class="loginForm">   
    <div class="imgcontainer">
      
      <img src="img/avatar.jpg" alt="Avatar" class="avatar">
      <h1 style="text-align:center">Your Account</h1>
    </div>

    <div class="container">
	 <label>Username</label>
     <input type="text" placeholder="Enter Username" name="uname">
	 <br>
	  <label>Password</label>
      <input type="password" placeholder="Enter Password" name="psw">       
	<br>
     <button type="submit" class="btn btn-primary">Login</button>
      
    </div>
    </div> 
  </form>

<?php include 'footeradmin.php';?>