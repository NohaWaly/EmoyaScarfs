<?php include 'headeradmin.php';?>
<?php
session_start();
session_destroy();
?>
<div class="loggingout">
<h1><a href="../index.php">Go Home</a></h1>
</div>
<?php include 'footeradmin.php';?>