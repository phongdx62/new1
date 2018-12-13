<?php 
	require("../config/connect.php");
	
	$mabh = $_GET["mabh"];

	$sql = "DELETE FROM baihat WHERE mabh = $mabh";
	$kq = mysqli_query($conn,$sql);
	mysqli_close($conn);
	ob_start(); 
	header('Location: list_music.php');
	ob_end_flush(); 	
?>