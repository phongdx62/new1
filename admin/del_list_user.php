<?php 
	$matv = $_GET["matv"];
	require("../config/connect.php");
	$sql = "DELETE FROM thanhvien WHERE matv = $matv";
	$kq = mysqli_query($conn,$sql);
	mysqli_close($conn);
	ob_start(); 
	header('Location: list_user.php');
	ob_end_flush(); 
?>