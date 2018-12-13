<?php  
	$server_username = "root";
	$server_password = "";
	$server_host = "localhost";
	$database = 'quan_ly_web_nhac';
			 
	$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
?>