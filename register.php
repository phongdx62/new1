<?php  
	require("config/header.php");
?>
    
    <link rel="stylesheet" href="./css/style-register.css">

	<title>Trang đăng ký</title>
</head>
<body class="text-center">
	<?php 
		//Khai báo biến và mảng lỗi
		$loi = array();
		
		$loi["dangky"] = $loi["kt_matkhau"] = NULL;
		if(isset($_POST["ok"]))
		{
			$ho = $_POST["ho"];
			$ten = $_POST["ten"];
			$taikhoan = $_POST["taikhoan"];
			$email = $_POST["email"];
			$matkhau = $_POST["matkhau"];
		}

		if(isset($ho) && isset($ten) && isset($taikhoan) && isset($email) && isset($matkhau))
	  	{	
	  		if($matkhau != $_POST["kt_matkhau"])
			{
				$loi["kt_matkhau"] = "* Bạn nhập lại mật khẩu không đúng";
			}
  			else
  			{
  				require("config/connect.php");
				//mysqli_query($conn,"SET NAMES 'UTF8'");
		  		// Kiểm tra tài khoản đã tồn tại chưa
		  		$sql="SELECT * FROM thanhvien WHERE taikhoan='$taikhoan'";
		  		
				$kt=mysqli_query($conn, $sql);
		 
				if(mysqli_num_rows($kt) > 0)
				{
					$loi["dangky"] = "* Tài khoản đã tồn tại";
				}
				else
				{

					//thực hiện việc lưu trữ dữ liệu vào db
			    	$sql = "INSERT INTO thanhvien(
			    				ho,
			    				ten,
			    				taikhoan,
			    				email,
			    				matkhau) VALUES 
			    				('$ho',
			    				'$ten',
			    				'$taikhoan',
			    				'$email',
								'$matkhau')";
					
		  			mysqli_query($conn,$sql);
					$loi["dangky"] = "* Đăng kí thành công, <a href='login.php'>Đăng nhập</a> để vào website<br />";	
				}			
				// Sau khi thực thi xong thì ngắt kết nối database
				mysqli_close($conn);	
	  		}	  												    
		}				 		
	?>

	<form action="register.php" method="post" class="form-signin">
		<img class="mb-3" src="./image/login.png" alt="" width="158" height="65">
		<h1 class="h3 mb-3 font-weight-normal">Đăng ký</h1>
		<div class="row">
			<div class="col-md-7 mb-3">
		
				<input type="text" class="form-control is-valid" id="firstName" name="ho" placeholder="Họ tên đệm" value required>
				<div class="invalid-feedback">
					Valid first name is required.
				</div>

			</div>
			<div class="col-md-5 mb-3">
			
				<input type="text" class="form-control is-valid" id="lastName" name="ten" placeholder="Tên" value required>
				<div class="invalid-feedback">
					Valid last name is required.
				</div>
			</div>			
		</div>
		<div class="mb-3">
				
				<div class="input-group">										
					<input type="text" class="form-control is-valid" id="username" name="taikhoan" placeholder="Tài khoản" required>
					<div class="invalid-feedback">
						Your username is required.
					</div>			
				</div>
		</div>
		<div class="mb-3">
			<label for="inputEmail" class="sr-only"></label>
			<input type="Email"  name = "email" class="form-control is-valid" placeholder="Địa chỉ email" required autofocus>
		</div>
		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="password"  name="matkhau" class="form-control is-valid" placeholder="Mật khẩu" required >
		</div>

		<div class="mb-3">
			<label for="inputPassword" class="sr-only"></label>
			<input type="password"  name="kt_matkhau" class="form-control is-valid" placeholder="Nhập lại mật khẩu" required >
		</div>

		<div style="color:green;" class="mb-2">
			<?php			
				echo $loi["dangky"];
				echo $loi["kt_matkhau"];
			?>
		</div>

		<div class="row">
         	<div class="col-md-3 mb-3">                
                <select class="custom-select is-valid d-block w-100" required="">
	                <option value="">Sex</option>		                
	                <option>Nữ</option>
	                <option>Nam</option>
                </select>               
            </div>
			
			
            <div class="col-md-5 mb-3" style="">	                
                <input type="text" class="form-control is-valid d-block w-100"  placeholder="Địa Chỉ" required="" style="padding: 6px;">	                
            </div>

			<div class="col-md-4 mb-3" style="">	                
                <input type="date">                
            </div>
		</div>

		<hr class="mb-2">			
		<button class="btn btn-lg btn-success btn-block mb-2" type="submit" name="ok">Đăng ký</button>
		<p class="mt-4 mb-4 text-muted" style="font-size: 15px; opacity: .8;">Copyright 2018-2019</p>
	</form>
	
	<div class="go-home fixed-bottom" style="bottom: 1rem; left: 94%;">
	    <a href="./index.php"><i class="fas fa-home fa-3x " style="color: #3ea24c;"></i></a>
	</div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php  
    	require("config/footer.php");
    ?>
    
</body>
</html>