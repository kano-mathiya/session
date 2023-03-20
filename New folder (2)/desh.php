
<?php

$con=mysqli_connect("localhost","root","","kano");

session_start();
if(!isset($_SESSION['name']))
{
	header("location:login.php");
	
}
?>
<h1>wellcome</h1>
<button><a href ="logout.php">logout</a></button>
