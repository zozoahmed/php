<?php
include_once ("confg.php");
$id = $_GET['ID'];
// echo "$id";
$sql = "delete from myinfo where ID = $id";
$result = mysqli_query($mysqli,$sql);
header("Location: disusers.php");
