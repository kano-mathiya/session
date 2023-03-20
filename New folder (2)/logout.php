<?php
$con=mysqli_connect("localhost","root","","kano");
session_start();
session_destroy();
header("location:login.php");

?>