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

      <form class="form-inline my-2 my-lg-0 " action="index.php" method="post">
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

          <a class="navbar-brand mx-4" href="./music.php">
            <span class="mr-3" style=" color: #fae639;">
              <i class="fas fa-circle "></i>
            </span>
            Bài hát
          </a>
          
          <?php 
            if(isset($_SESSION["taikhoan"]))
            {
          ?>    
                <a class='navbar-brand mx-4' href='./mylist.php'>
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
          <div class="d-flex">
            <a href="#" style="font-size: 1.7em; color: #FFF;font-weight: bold;margin-right: 10px;">Ablum</a>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb" style="background-color: transparent;font-weight: bold;">
                <li class="breadcrumb-item"><a href="#">Nghe nhiều</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">Mới nhất</a></li>
              </ol>
            </nav>
          </div>
          <div class="content">
            
          <?php
            if (isset($_REQUEST['ok'])) 
            {
          ?>
            
               <div class="body">
      <div style="background: rgb(0,0,0);background: linear-gradient(90deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.6) 0%);width: 100%;height: 100%;">
      <div style="height: 20px; width: 100%"></div>
      <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div class="player">
            <div style="background: rgb(0,0,0);background: linear-gradient(90deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.6) 0%);width: 100%;height: 100%;">
            <div class="cover"></div>
            <div class="title"></div>
            <div class="artist"></div>
            
            <div class="controls">
              <div class="rew">
                <i class="fas fa-backward" ></i>
              </div>
              <div class="play">
                <i class="fas fa-play-circle" ></i>
           
              </div>
              <div class="pause">
                <i class="fas fa-pause-circle" ></i>
              </div>
              <div class="fwd">
                <i class="fas fa-forward" ></i>
              </div>
              
            </div>
            </div>
          </div>

          <div class="viewlist" id="style-1">
            <ul class="playlist">
            <?php         
              // Gán hàm addslashes để chống sql injection
                $timkiem = addslashes($_POST['timkiem']);

                // Nếu $timkiem rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
                if (empty($timkiem)) 
                {
                  echo "<p style= 'color:red;'>* Dữ liệu tìm kiếm không được để trống</p>";
                } 
                else
                {
                  // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                  $sql = "SELECT * FROM baihat WHERE tenbh LIKE '%$timkiem%' OR tencs LIKE '%$timkiem%' OR tenns LIKE '%$timkiem%' OR quocgia LIKE '%$timkiem%' OR theloai LIKE '%$timkiem%' ";

                  // Kết nối sql
                  require("config/connect.php");
                  mysqli_set_charset($conn, 'UTF8');
                  // Thực thi câu truy vấn
                  $kq = mysqli_query($conn,$sql);

                  // Đếm số dòng trả về trong sql.
                  $num = mysqli_num_rows($kq);

                  // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                  if ($num > 0 && $timkiem != "") 
                  {
                    // Dùng $num để đếm số dòng trả về.
                    echo "<p style='color:#FF6633;'>$num kết quả trả về với từ khóa <b>$timkiem</b></p>";
                    $dem=1;
                    while ($data = mysqli_fetch_assoc($kq))
                    {
                      $data['url']="../".$data['url'];
                      $data['img']="../".$data['img'];
                      echo"<li audiourl='$data[url]' cover='$data[img]' artist='$data[tenbh]'>";
                        echo"<div class='bai-hat-tuan'>";

                          echo"<div class='number'>$dem</div>";
                          echo"<div class='info'>";
                            echo"<div><a id='id-name' href='#'>$data[tenbh]</a></div>";
                            echo"<div class='singer'><a id='id-singer' href='#'>$data[tencs]</a></div>";
                          echo"</div>";
                          echo"<div class='view-count'>12</div> ";          

                        echo"</div>";
                      echo"</li>";
                      $dem++;
                    }
                  }                 
                  else 
                  {
                    echo"<p style='color:red;'>* Không tìm thấy kết quả!;</p>";
                  } 

                  //Đóng kết nối với CSDL
                  mysqli_close($conn);
                }
        ?> 
               </ul>
            <div class="force-overflow"></div>
          </div>
        </div>
        <div class="col-sm-3">
          abc
        </div>
      </div>
      </div>
      <div style="height: 20px; width: 100%"></div>s    
    </div>

      <?php 
          

          }


          else
          {
            //Mở kết nối với CSDL
            require("config/connect.php");
            //Thực hiện truy vấn
            $sql = "SELECT * FROM baihat WHERE moi = 1";
            $kq = mysqli_query($conn,$sql);
                      
            while ($data = mysqli_fetch_assoc($kq)) 
            {           
              echo"<div class='box'>";
                echo"<div class='avatar'>";
                  echo"<div class='overload'>";
                    echo"<a href='music.php?mabh= $data[mabh]'><img src='$data[img]' alt=''></a>";
                    echo"<span><i class=' fab fa-google-play fa-2x'></i></span>";
                  echo"</div>";
                echo"</div>";
                echo"<div class='name'>$data[tenbh]</div>";
                  echo"<div class='singer'>$data[tencs]</div>";                
              echo"</div>";
            }
            mysqli_close($conn);
          ?>
            
          </div>

          <div class="mb-3 mt-2">
            <a href="#" style="font-size: 1.7em; color: #FFF;font-weight: bold;">The Best</a>
          </div>
         
            
            <div class="row">
              <?php  
                //Mở kết nối với CSDL
                require("config/connect.php");
                //Thực hiện truy vấn
                $sql = "SELECT * FROM baihat WHERE haynhat = 2";
                $kq = mysqli_query($conn,$sql);
                $data = mysqli_fetch_assoc($kq);
              ?>
              <div class="col-sm-5">
                <div class="box">
                  <div class="avatar">
                    <div class="overload">
                      <img src="<?php echo $data['img']; ?>" alt="" style="width: 326px; height: 307px;">
                      <span><i class=" fab fa-google-play fa-2x"></i></span>
                    </div>
                  </div>
                  <div class="name">The Best Of All</div>                
                </div>
              </div>
              <?php 
                mysqli_close($conn);
              ?>

              <div class="col-sm-7">
                <div class="content">
                  <?php  
                    require("config/connect.php");
            
                    $sql = "SELECT * FROM baihat WHERE haynhat = 1";
                    $kq = mysqli_query($conn,$sql);
                              
                    while ($data = mysqli_fetch_assoc($kq))
                    {
                      echo"<div class='box'>";
                        echo"<div class='avatar'>";
                          echo"<div class='overload'>";
                            echo"<a href='music.php?mabh= $data[mabh]'><img src='$data[img]' style='width: 140px;height: 130px;'></a>";
                            echo"<span><i class=' fab fa-google-play fa-2x'></i></span>";
                          echo"</div>";
                        echo"</div>";
                        echo"<div class='name'>The Best Of</div>";            
                      echo"</div>";
                    }
                    mysqli_close($conn);
                  ?>
                  

                 
               
                </div>
              </div>                
            </div>           
          </div>

          <div class="col-sm-3 mb-3" style="">
            <div class="mb-2">
              <a href="#" style="font-size: 1.7em; color: #FFF;font-weight: bold;">BXH Bài hát</a>
            </div>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-1" style="background-color: transparent;font-weight: bold;padding: 0px;">
                <li class="breadcrumb-item"><a href="#">Việt Nam</a></li>
                <li class="breadcrumb-item"><a href="#">Âu Mỹ</a></li>
                <li class="breadcrumb-item"><a href="#">Hàn Quốc</a></li>
              </ol>
            </nav>
            
            <?php  
              require("config/connect.php");
            
              $sql = "SELECT mabh, topten, tenbh, tencs FROM baihat WHERE topten >0 AND topten <11 ORDER BY topten";
              $kq = mysqli_query($conn,$sql);
              while ($data = mysqli_fetch_assoc($kq))
              {
                echo"<div class='bai-hat-tuan'>";
                  echo"<div class='number'>$data[topten]</div>";
                  echo"<div class='info'>";
                    echo"<div class='title'><a id='id-name' href='music.php?mabh= $data[mabh]'>$data[tenbh]</a></div>";
                    echo"<div class='singer mb-2'><a id='id-singer' href='music.php?mabh= $data[mabh]'>$data[tencs]</a></div>";
                  echo"</div>";
                echo"</div>";
              }
              mysqli_close($conn);
          }         
            
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