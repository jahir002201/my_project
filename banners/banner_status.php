<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$update = "UPDATE banner_contents SET status=0";
$update_result = mysqli_query($db_connect, $update);

$update2 = "UPDATE banner_contents SET status=1 WHERE id=$id";
$update_result2 = mysqli_query($db_connect, $update2);

header('location:add_banner.php');

?>