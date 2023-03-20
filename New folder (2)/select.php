
<html>
<head></head>
<body>
<table border="2">
<tr>
<td>id</td>
<td>name</td>
<td>email</td>
<td>password</td>
<td>city</td>
<td>opretion</td>

</tr>
<?php

$con=mysqli_connect("localhost","root","","kano");

$select="SELECT * FROM `singup`";
$res=mysqli_query($con,$select);
while($row=mysqli_fetch_assoc($res))
{
	$id=$row['id'];
?>

<tr>
<td> <?php echo $row['id'];?>  </td>
<td> <?php echo $row['name'];?> </td>
<td> <?php echo $row['email'];?> </td>
<td> <?php echo $row['psw'];?> </td>
<td> <?php echo $row['city'];?> </td>
<td><a href="update.php">update</a>
<a href="delete.php">delete</a>
</td>
</tr>
<?php
	
}
?>
</table>
</body>
</html>

