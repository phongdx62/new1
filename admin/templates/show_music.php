<?php  
	echo"<tr>";
		echo"<td>$data[mabh]</td>";
		echo"<td>$data[tenbh]</td>";
		echo"<td>$data[tencs]</td>";
		echo"<td>$data[tenns]</td>";
		echo"<td>$data[quocgia]</td>";
		echo"<td>$data[theloai]</td>";
		echo"<td>$data[url]</td>";						
		echo"<td><a href='edit_list_music.php?mabh=$data[mabh]' style='color:blue;'>Sửa</a></td>";	
		echo"<td><a href='del_list_music.php?mabh=$data[mabh]' onclick='return show_confirm()' style='color:red;'>Xóa</a></td>";						
	echo"</tr>";
?>