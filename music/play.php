<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nghe nhạc</title>
</head>
<body>
	<br /><br />
	<?php 
		require("../config/connect.php");
		$mabh = $_GET['mabh'];
		// Câu truy vấn
		$sql = "SELECT * FROM baihat WHERE mabh = '". $mabh ."'";
		// Thực hiện câu truy vấn, hàm này truyền hai tham số vào là biến kết nối và câu truy vấn
		$kq = mysqli_query($conn, $sql);
		// Nếu thực thi không được thì thông báo truy vấn bị sai		
		if (!$kq){
		    die ('Câu truy vấn bị sai');
		}
				
		$bhhientai = mysqli_fetch_array($kq);
	?>	
	
	<label>Tên bài hát : <?php echo $bhhientai['tenbh']; ?></label> <br />

	<audio controls>
    	<source src="<?php echo $bhhientai['url']; ?>" type="audio/mpeg">
	</audio>
	<br />

	<?php
		// Xóa kết quả khỏi bộ nhớ
		mysqli_free_result($kq);
		 
		// Sau khi thực thi xong thì ngắt kết nối database
		mysqli_close($conn);
	?>		
</body>
</html>