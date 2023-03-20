<html>
<head></head>
<body>
<form action="login.php" method="POST">
<table border="2">
<tr><td>name</td><td><input type="text" name="name"></td></tr>
<tr><td>password</td><td><input type="password" name="psw"></td></tr>
<tr><td>submit</td><td><input type="submit" name="submit" value="submit"></td></tr>
</table>
</form>
</body>
</html>
<?php  
$con=mysqli_connect("localhost","root","","kano");
if(isset($_POST['submit']))
{
	
$name=$_REQUEST['name'];
$psw=$_REQUEST['psw'];
$select="SELECT  * FROM `singup` WHERE `name`='$name' AND `psw`='$psw'";
$res=mysqli_query($con,$select);
$row=mysqli_fetch_assoc($res);
$count=mysqli_num_rows($res);

if($count>0)
{
	session_start();
	$_SESSION['name']=$row['name'];
	header("location:desh.php");
}
else
{
	echo "not";
	
}
}
?>