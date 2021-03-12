<?php
    include('connection.php');
    $idkh1=$_SESSION['tendangnhap'];
    $idkhachhang=$_SESSION['id'];


    $sel1="SELECT * FROM hoadon where idkhachhang='$idkhachhang' ";
    $rs1 = $connect->query($sel1);
    $r1= $rs1 ->fetch_assoc();
        $diachinhan=$r1['diachinhan'];
        $tongtien=$r1['tongtien'];
        $sohd = $r1['id'];
      
    $sel3 ="SELECT * FROM hoadon ";
    $rs3 = $connect->query($sel3);    
?>








<body>    

         <?php
            while ($r3 = $rs3 -> fetch_assoc()){
                $sohdon = $r3['id'];
                $sel2="SELECT * FROM sanphamhoadon where iddon ='$sohdon' ";
                $rs2 = $connect->query($sel2);
                $tongthanhtiendh=0;
            
        ?>

        <td>
            <?php 
                // echo $r3['id'] ;
            ?> 
        </td>
        <div class="conten">
        <p><h1>HD CLASSIC</h1></p>
         <p><h2>Đơn Mua Hàng</h2></p>
         <table class="bangthongtin">
            
           <tr> 
                <td> <span class="tenkhhd">Khách hàng:</span></td> 
                <td><span class='tt'><?php echo $diachinhan; ?></span></td>
            </tr>
            <tr> 
                <td> <span class="tthd">Địa chỉ nhận:</span></td> 
                <td><span class="tt"> <?php echo $idkh1; ?></span></td>
            </tr>
            <tr> 
                <td> <span class="tthd">Địa chỉ gửi:</span></td> 
                <td> <span class='tt'>TP.HCM, Việt Nam </span></td>
            </tr>
         </table>
      
         <table class="bangsanpham">
            <tr>
                <th >Mặt hàng</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
            <?php
            $thanhtiendh =0;
               while ($r2 = $rs2->fetch_assoc()){
                $thanhtiendh =$r2['giasp']*$r2['soluong'];
                
            ?> 
            <tr>
                
                <td class="o1" style="text-align: left; padding-left: 200px;"><?php echo $r2['sanphamdadat'];?></td>
                <td class="o1"><?php echo $r2['soluong'];?></td>
                <td class="o1"> <?php echo number_format($thanhtiendh) ;?> </td>
            </tr>
             <?php
             
               // $tongthanhtiendh +=$thanhtiendh;
              }
              $phivanchuyen = 50000;
              $tongtien += $phivanchuyen;
             ?>
         </table>
        
       <table class="bangthongtin">
              <tr>
                <td><span class="tthd">Phí vận chuyển:</span> </td>
                <td><span class='tt'> <?php echo number_format($phivanchuyen); ?> VNĐ (toàn quốc)</span></td>
              </tr>
              <tr>
                <td> <span class="tthd">Tổng tiền:</span> </td>
                <td> <span class='tt'><?php echo number_format($tongtien);?> VNĐ</span></td>
              </tr>
              <tr>
                <!-- <td><span class="tthd">Trạng thái:</span></td> -->
              
              </tr>
       </table>
     
          </p>
        
         
      
         <!-- <div class="nuthuy"><a href="index.php?xem=giohang&don=donhang&xoahd=xhd" class="huydon">Hủy</a> </div> -->
         

    </div>
    <?php
        }
    ?>
</body>
<?php
    if (isset($_GET['xoahd'])){
       $connect -> query("DELETE FROM `hoadon` WHERE id='$sohdon'");
       $connect -> query("DELETE FROM `sanphamhoadon` WHERE iddon='$sohdon'");
       header('location: index.php?xem=giohang&don=donhang');
    }

?>

<style>
    .conten{
        margin: auto;
        width: 1600px;
        height: auto;
        border: 1px solid  wheat;
        border-radius: 10px;
        background: #dafffa;
        margin-bottom: 50px;
       
    }
    .tt{
        /* margin-right: 1000px;
        text-align: left;
        float:right; */
        margin-left: 100px;
        font-size: 20px;
    }
    h1{
        color: #4a596d;
        text-align: center;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 50px;

    }
    h2{
        color: rgb(230, 41, 41);
        text-align: center;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    table{
        width: 1000px;
        margin: auto;
     
    }
    .bangthongtin{
        border: 0px; 
        margin-left: 30px;
    }
    .bangthongtin{
        width: 1000px;

    }
    .bangthongtin td{
        border: 0px;
        text-align: left;
        margin: 0px;
       
        
    }
    .bangthongtin tr{
        height: 40px; 
    }

    .tenkhhd, .tthd{
        margin-left: 150px;
        font-size: 20px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .bangsanpham td{
     
    }
    .o1{
        width: auto;
        padding-left: 20px;
        height: 30px;
        border-bottom: brown 1px solid;
        border-top: brown 1px solid;
    }
    .nuthuy{
        width: 100%;
        text-align: center;
        margin-bottom: 50px;
    }
    .huydon{
        /* margin-bottom: 50px; */
        padding: 10px 50px 10px 50px ;
        width: 200px;;
        height: 50px;
        font-size: 18px;
        font-weight: bolder;
        border-radius: 10px;;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        background: coral;
        /* padding: 20px 70px; */
    }
    .huydon:hover{
        background: #dafffa;

        color: #dafffa;
    }
</style>