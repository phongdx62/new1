<?php 
  session_start(); 
  require("config/header.php");
?>
    
    <link rel="stylesheet" href="./css/style-header.css">
    <link rel="stylesheet" href="./css/index-content.css">
    <link rel="stylesheet" href="./css/style-footer.css">
    
    <title>Trang chủ</title>
  </head>
  <body>

    <!-- ======================== Header ======================== -->
    
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #181412; height: 90px; font-family: 'Helvetica', sans-serif;">
    
      <a class="navbar-brand mr-4 ml-3" href="index.php">
        <img src="./image/logo.png"  alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <form class="form-inline my-2 my-lg-0 " action="mylist.php" method="post">
        <input class="form-control mr-sm-2" type="search" placeholder="Tìm" aria-label="Search" name="timkiem">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"
        name="ok">Tìm kiếm</button>
      </form>
    
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Image and text -->
        <nav class="navbar navbar-dark" style="background-color: #181412;">

          <div class="navbar-brand ml-4 mr-3 d-flex" style="" href="#">
            <span class="" style=" color: #9befe0;margin-top: 7px;">
              <i class="fas fa-circle"></i>
            </span>
            <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle abc" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Thể loại
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Pop</a>
                <a class="dropdown-item" href="#">HipHop</a>
                <a class="dropdown-item" href="#">Rock</a>
                <a class="dropdown-item" href="#">Balad</a>
              </div>
            </div>
          </div>

          <a class="navbar-brand mx-4" href="#">
            <span class="mr-3" style=" color: #fae639;">
              <i class="fas fa-circle "></i>
            </span>
            Bài hát
          </a>
          
          <?php 
            if(isset($_SESSION["taikhoan"]))
            {
          ?>    
                <a class='navbar-brand mx-4' href='mylist.php'>
                  <span class='mr-3' style=' color: #f573a0;'>
                    <i class='fas fa-circle'> 
                    </i>
                  </span>
                  MyList
                </a>
              </nav>
              </div>
              <div class='info-user'>
                <div class='dropdown' style='background-color: #181412;'>
                  <button class= 'btn btn-secondary dropdown-toggle abc' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                 <?php echo $_SESSION["taikhoan"]." "; ?> 
                  </button>
                  <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                    <a class='dropdown-item' href='profile.php'>Thông tin cá nhân</a>
                    <a class='dropdown-item' href='#'>Nhạc yêu thích</a>
                    <a class='dropdown-item' href='#'>Playlist của tôi</a>
                    <a class='dropdown-item' href='#'>Nghe gần đây</a>
                    <a class='dropdown-item' href='logout.php'>Đăng xuất</a>
                  </div>
                <div>  
              </div>
          <?php  
            }            
            else
            { 
          ?>                
              <a class='navbar-brand mx-4' href='./login.php'>
                <span class='mr-3' style=' color: #f573a0;'>
                  <i class='fas fa-circle'>
                  </i>
                </span>
                Đăng nhập
              </a>
              </nav>
              </div>
          <?php    
            }      
          ?>
  </nav>

  <!-- ======================== Content ======================== -->
  <div class="body">
    <div style="background: rgb(0,0,0);background: linear-gradient(90deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.6) 0%);width: 100%;height: 100%;">
    <div style="height: 20px; width: 100%"></div>    
      <div class="container text-center">
      
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" style=" height: 350px;">
            <div class="carousel-item active">
              <img class="d-block w-100" src="./image/slider.jpg" border="0"  alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./image/slider.jpg" border="0"  alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./image/slider.jpg" border="0"  alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        
        <div class="row text-left mt-4">
          <div class="col-sm-9">
 <?php 
    require("config/connect.php");
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
  
  <label style="color: #FF66FF;">Tên bài hát : <?php echo $bhhientai['tenbh']; ?></label> <br />

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

          </div> 

        </div>

    </div>
  </div>
  </div>


  <!-- ======================== Footer ======================== -->
  
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #181412;font-family: 'Helvetica',sans-serif; height: 40px;">
    
      <a class="navbar-brand ml-5" style="color: #fff; opacity: .4; font-size: .8em;" href="">
        Copyright 2018 Personal NP
      </a>
      

      <div class="collapse navbar-collapse footer-left " id="navbarSupportedContent">
        <!-- Image and text -->
        <nav class="navbar navbar-dark" style="background-color: #181412; height: 40px; margin-left: 66%;">
          <a class="navbar-brand mx-4" style="font-size: .9em;" href="#">            
            Get Personal
          </a>
          <a class="navbar-brand mx-4" style="font-size: .9em;" href="#">            
            Legal
          </a>
          <a class="navbar-brand mx-4" style="font-size: .9em;" href="#">            
            Cookies
          </a>
        </nav>     
      </div> 

  </nav>  
  
  <div class="go-home fixed-bottom" style="bottom: 1rem; left: 94%;">
    <a href="./index.php"><i class="fas fa-home fa-3x " style="color: #3ea24c;"></i></a>
  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery-3.3.1.slim.min.js"></script>
    
    
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>