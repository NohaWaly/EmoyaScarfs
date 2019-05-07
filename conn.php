<?php
   $conn = mysqli_connect("localhost","root","","Emoya");
if($conn-> connect_error){
    die("connection faled:" . $conn-> connect_error);
}
?>