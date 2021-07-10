

<html>
<head>
	<title>Add Users</title>
</head>

<body>

	<a href= "index.php"> Home page </a>

	<form action="add.php"  method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	


<?php
include_once ("confg.php");
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'] ;
$pass = $_POST['up'];
$confpass = $_POST['up2'];
$picurl = $_POST['myImage'];
$gender = $_POST['gender'];
$country = $_POST['country'];

$sql = "insert into myinfo (fname,lname,email,password,confirm_password,file_image,gender,country) values ('$fname','$lname','$email','$pass','$confpass','$picurl','$gender','$country')";
$result1 = mysqli_query ($mysqli,$sql);

header("Location: disusers.php");


 ?>
