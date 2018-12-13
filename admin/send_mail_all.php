<?php
    session_start();
    if($_SESSION["capbac"] == 1)
    {
        require("templates/header.php");
        require("templates/js_sendmail.php");
            
        if(isset($_POST["ok"]))
        {
            $tieude = addslashes(stripslashes($_POST["tieude"]));
            $noidung = addslashes(stripslashes($_POST["noidung"]));

            if(isset($tieude) && isset($noidung))
            {
                require("../config/connect.php");
                $sql = "SELECT * FROM thanhvien";
                $kq = mysqli_query($conn, $sql);
                if(mysqli_num_rows($kq)<1)
                {
                    echo "<p style='color:red;'>Không tìm thấy email nào!</p>";
                }
                else
                {
                    while ($data=mysqli_fetch_assoc($kq)) 
                    {
                        //Hàm htmlentities() sẽ chuyển các kí tự thích hợp thành các kí tự HTML entiies.
                        //Kí thự HTML entiies là các kí tự dùng để hiển thị các biểu tượng, kí tự trong HTML. Ví dụ muốn hiển thị 5 dấu cách, nếu bạn chỉ sử dụng dấu cách bình thường trình duyệt sẽ loại bỏ 4 dấu và chỉ dữ lại 1 dấu cách, muốn hiển thị tất cả bạn sẽ phải sử dụng HTML entiies.
                        //Hàm trim() sẽ loại bỏ khoẳng trắng( hoặc bất kì kí tự nào được cung cấp) dư thừa ở đầu và cuối chuỗi.
                        //Hàm stripslashes() sẽ loại bỏ các dấu backslashes ( \ ) có trong chuỗi. ( \ ' sẽ trở thành ' , \\ sẽ trở thành \).
                        //Hàm trả về chuỗi với các kí tự backslashes đã bị loại bỏ.
                        $email = htmlentities(trim(stripcslashes($data["email"])));
                        $taikhoan = htmlentities(trim(stripcslashes($data["taikhoan"])));
                        $tieude_moi = htmlentities(trim($tieude));
                        $noidung_moi = "Xin chào ! {$taikhoan}\n\n" .htmlentities(trim($noidung));
                        $noigui = "Từ : 58TH2 - Sky - TLU";

                        $guithu = mail($email, $tieude_moi, $noidung_moi, $noigui);        
                    } 
                    if( $guithu == true )
                    {
                        echo "<p style='color:blue;'>Gửi email thành công ... </p>";
                    }
                    else
                    {
                        echo "<p style='color:red;'>Không thể gửi email ...</p>";
                    }      
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
        <div class="container">
            <div class="form-container">
                <form method="post" id="reused_form" enctype=&quot;multipart/form-data&quot;>
                   
<?php
    require("templates/label_sendmail.php");  
    require("templates/footer.php");
?>