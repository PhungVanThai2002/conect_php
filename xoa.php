<?php
include_once("config.php");
$id = $_GET['id'];
$sql = "DELETE FROM sinhvien WHERE id=$id";
mysqli_query($conn,$sql);
header("location:index.php");
?>