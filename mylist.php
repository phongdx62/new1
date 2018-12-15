<?php 
  session_start(); 
  require("config/header.php");
?>
    
    <link rel="stylesheet" href="./css/style-header.css">
    <link rel="stylesheet" href="./css/music-content.css">
    <link rel="stylesheet" href="./css/style-footer.css">
    
    <title>List nhạc</title>
  </head>
  <body>

    <!-- ======================== Header ======================== -->
    
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #181412; height: 90px; font-family: 'Helvetica', sans-serif;">
    
      <a class="navbar-brand mr-4 ml-3" href="#">
        <img src="./image/logo.png"  alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <form class="form-inline my-2 my-lg-0 " action="myList.php" method="post">
        <input class="form-control mr-sm-2" type="search" placeholder="Tìm" aria-label="Search" name="timkiem">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"
        name="ok">Tìm kiếm</button>
      </form>
    
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Image and text -->
        <nav class="navbar navbar-dark" style="background-color: #181412;">

        <div class="navbar-brand ml-4 mr-3" style="" href="#">
            <span class="" style=" color: #9befe0; position: relative;top: 2px;">
              <i class="fas fa-circle"></i>
            </span>
            
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
                  
          <a class="navbar-brand mx-4" href="#">
            <span class="mr-3" style=" color: #fae639;">
              <i class="fas fa-circle "></i>
            </span>
            Bài hát
          </a>
          
          <?php 
            if(isset($_SESSION["taikhoan"]))
            {
                echo"<a class='navbar-brand mx-4' href='#'>";
                  echo"<span class='mr-3' style=' color: #f573a0;'>";
                    echo"<i class='fas fa-circle'>"; 
                    echo"</i>";
                  echo"</span>";
                  echo "MyList";
                echo"</a>";
              echo "</nav>";
              echo "</div>";

              echo "<div class='info-user'>";
                echo"<a href='#'>";
        
                  echo "Xin Chào ".$_SESSION["taikhoan"]." <a href='logout.php'>Đăng xuất</a>";
                echo"</a>";
              echo "</div>";
            }
            else
            {             
              echo"<a class='navbar-brand mx-4' href='./login.php'>";
                echo"<span class='mr-3' style=' color: #f573a0;'>";
                  echo"<i class='fas fa-circle'>"; 
                  echo"</i>";
                echo"</span>";
                echo "Đăng nhập";
              echo"</a>";
              echo "</nav>";
              echo "</div>";
            }      
          ?>
  </nav>

  <!-- ======================== Content ======================== -->
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
                  if (isset($_REQUEST['ok'])) 
                  {
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
                  }
                  else
                  {
                    //Mở kết nối với CSDL
                    require("config/connect.php");
                    mysqli_set_charset($conn, 'UTF8');
                    //Thực hiện truy vấn
                    $sql = "SELECT * FROM baihat bh
                            INNER JOIN dsnhac ds
                            ON bh.mabh = ds.mabh
                            INNER JOIN thanhvien tv
                            ON ds.matv = tv.matv";

                    $kq = mysqli_query($conn,$sql);
                 
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
    <script src="./js/content.js"></script>
  </body>
</html>