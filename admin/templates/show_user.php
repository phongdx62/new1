<?php  
	echo"<tr>";
		echo"<td>$stt</td>";
		echo"<td>$data[taikhoan]</td>";
		echo"<td>$data[email]</td>";						
		if($data['capbac'] == 1)
		{
			echo "<td>Admin</td>";
		}
		else
		{
			echo "<td>Thành viên</td>";
		}
		echo"<td><a href='send_mail.php?matv=$data[matv]' style='color:blue;'>Gửi</a></td>";
		echo"<td><a href='del_list_user.php?matv=$data[matv]' onclick='return show_confirm()' style='color:red;'>Xóa</a></td>";						
		echo"</tr>";
		//href='del_list_user.php?id=$data[matv]' matv sẽ được chuyển theo đường dẫn
?>