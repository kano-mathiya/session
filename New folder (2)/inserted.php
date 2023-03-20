<?php
$con=mysqli_connect("localhost","root","","kano");

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$psw=$_REQUEST['psw'];
$city=$_REQUEST['city'];

$insert="INSERT INTO `singup` (`name`,`email`,`psw`,`city`) VALUES('$name','$email','$psw','$city')";
$res=mysqli_query($con,$insert);
if($res==TRUE)
{
	
	echo "true";
}
else
{
	echo  "false";
}
?>