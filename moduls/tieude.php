<?php
    session_start();
?>

<div class="header-top">      
        <div class="support">  TƯ VẤN HỖ TRỢ: hdclassicshop@gmail.com      
            <!-- <select name="ngonngu" id="ngonngu">
                <option value="Tiếng Việt">TIẾNG VIỆT</option>
                <option value="Tiếng Anh">TIẾNG ANH</option>
            </select> -->
        </div>
    </div>   
    <div class="w-menu">
        <div class="menu">
            <ul class="c-menu">
                <li id="logo"><a href="index.php"><img src="../image/logo2.png"></a></li>
                <li id="op-menu"><a href="index.php">TRANG CHỦ</a></li>
                <li id="op-menu"><a href="index.php?xem=wrapper-phukien">PHỤ KIỆN XE</a> </li>
                <li id="op-menu"><a href="index.php?xem=wrapper-baoho">ĐỒ BẢO HỘ</a> </li>
                <li id="op-menu"><a href="index.php?xem=gxd">GÓC XE ĐẸP</a> </li>
                <li id="op-menu"><a href="index.php?xem=phanhoi">PHẢN HỒI</a></li>
            </ul>
            <ul class="nd-gh">
               <a href=""> <li id="nguoidung"><img id="ndung" src="../image/user.png" alt=""></a>
                    <ul>
                        <li><a href="index.php?check=dangnhap" style="color: rgb(44, 0, 165); font-size: bold">
                            <?php
                            
                               if (!isset($_SESSION['tendangnhap'])){
                                   $name = "Đăng nhập";
                                   $check="1";    
                                   echo $name;
                               }else {
                                   $name=$_SESSION['tendangnhap'];
                                   $iduser=$_SESSION['id'];
                                   echo "User: ".$name; 
                                   $check="0";                               
                               }
                               $_SESSION['check']=$check;
                            ?>
                        </a></li>
                        <li><a href="index.php?xem=dangxuat" style="color:  rgb(44, 0, 165); font-size: bold;">Đăng xuất</a></li>
                        
                    </ul>
                </li>
                <li id="giohang"><a href="index.php?xem=giohang"><img id="ghang" src="../image/cart.jpg" alt=""></a></li>
            </ul>
        </div>
    </div>


    
<?php
     if (isset($_GET['xem'])){
         $kt = $_GET['xem'];
         $_SESSION['bam'] = $_GET['xem'];
     }
     else{
        $kt ="";
    }
    
    if ($kt == "wrapper-phukien"){
        include("wrapper-phukien.php");
    }else if ($kt == "wrapper-baoho"){
        include("wrapper-baoho.php");
    }else if ($kt == ""){
        include('content.php');
    }else if ($kt == "gxd"){
        include('album.php');
    }else if ($kt == "phanhoi"){
        include('phanhoi.php');
    }else if($kt=="dangxuat"){
        unset($_SESSION['tendangnhap']);
        header('location: index.php');
    }else if($kt=="giohang"){
        if($name=="Đăng nhập"){
            echo '<script>
                    alert("Bạn Phải Đăng Nhập!");
                </script>';
               
        }else if($name!=""){
            include('giohang.php');  
        
        }
    }
    
?>