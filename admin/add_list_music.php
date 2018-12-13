<?php
	session_start();
    if($_SESSION["capbac"] == 1)
    {
    	require("templates/header.php");

		$loi = array();
		$loi["them"] = NULL;

		if(isset($_POST["ok"]))	
		{
			//stripslashes loại bỏ ký tự \ trước dấu '
			$tenbh = addslashes(stripslashes($_POST["tenbh"]));
			$tencs = addslashes(stripslashes($_POST["tencs"]));
			$tenns = addslashes(stripslashes($_POST["tenns"]));
			$url = addslashes(stripslashes($_POST["url"]));

			if(isset($tenbh) && isset($tencs) && isset($tenns) && isset($url))
			{
				require("../config/connect.php");
				$sql = "SELECT * FROM baihat WHERE tenbh = '$tenbh'";
				$kt = mysqli_query($conn,$sql);
				if(mysqli_num_rows($kt)>0)
				{
					$loi["them"] = "* Tên bài hát đã tồn tại";
				}
				else
				{
					$sql = "INSERT INTO baihat(tenbh,
										   tencs,
										   tenns,
										   url)	VALUES	
										   ('$tenbh',
										   '$tencs',
										   '$tenns',
										   '$url')";

					mysqli_query($conn,$sql);
					$loi["them"] = "* Thêm bài hát thành công";					   	
				}					
				mysqli_close($conn);						   								   
			}
		}	
    } 
	else
	{
		ob_start(); 
		header('Location: ../index.php');
		ob_end_flush();
	}
?>	
	<form action="add_list_music.php" method="post">	
		<h2>Thêm bài hát</h2>
		<div>
			<div>
				<input style="height: 24px; width: 300px;" type="text" name="tenbh" placeholder="Tên bài hát" value required>
				<div></div>
			</div>
			<div>
				<input style="height: 24px; width: 300px;" type="text" name="tencs" placeholder="Tên ca sĩ" value required>
				<div></div>
			</div>
			<div>
				<input style="height: 24px; width: 300px;" type="text" name="tenns" placeholder="Tên nhạc sĩ" value required>
				<div></div>
			</div>
			<div>
				<input style="height: 24px; width: 300px;" type="text" name="url" placeholder="Đường dẫn file" value required>
				<div></div>
			</div>
				
		<button style="height: 30px;" type="submit" name="ok">Thêm</button>
	</form>

	<div style="width: 500px; margin: 30px; text-align: center; color: red;">
		<?php  
			echo $loi["them"];
		?>
	</div>

<?php  
	require("templates/footer.php");
?>
