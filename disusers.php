<?php
include_once ("confg.php");

$sql = "select * from myinfo";
$result = mysqli_query($mysqli, $sql) or die (mysqli_error($mysqli));

?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<a href="Add1.php"> Add new user  </a>
<form action="add.php"  method="post" name="form1">


  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>fname</th>
        <th>lname</th>
        <th>email</th>
        <th>password</th>
        <th>confirm_password</th>
        <th>file_image</th>
        <th>gender</th>
        <th>country</th>
        <th>Delete</th>
        <th>edit</th>



      </tr>

      <?php

      while ($user = mysqli_fetch_array($result))

       {
         echo "<tr>";
         echo "<td>".$user['ID']."</td>";
         echo "<td>".$user['fname']."</td>";
         echo "<td>".$user['lname']."</td>";
         echo "<td>".$user['email']."</td>";
         echo "<td>".$user['password']."</td>";
         echo "<td>".$user['confirm_password']."</td>";
         echo "<td>".$user['file_image']."</td>";
         echo "<td>".$user['gender']."</td>";
         echo "<td>".$user['country']."</td>";
         echo "<td>"."<a href='delete.php?ID=$user[ID]'> delete </a>"."</td>";
         echo "<td>"."<a href='edit.php?ID=$user[ID]'> edit </a>"."</td>";

         echo "</tr>";

      }
 ?>
</table>
    </thead>
      <tbody>



</tbody>
</html>
