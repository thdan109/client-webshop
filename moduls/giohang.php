<?php
        include("connection.php");         
            $idspp=$_SESSION['tendangnhap'];
            $idkhachhang = $_SESSION['id'];
            
            $select = "SELECT * FROM giohang WHeRe iduser='$idspp'";           
            $rs = $connect->query($select);             
            $tongthanhtien=0;
           
         



?>
<div class="divcart" id="divcart">
   <table id="tablecart">
        <tr>
            <th>Tên sản phẩm</th>
            <th>Ảnh sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Tổng tiền</th>
            <th>Quản lý</th>
            
        </tr>  
        <?php
              while ($row = $rs->fetch_assoc()){
                $thanhtien=$row['giasp'] * $row['soluongsp'];
                $gia = $row['giasp'];
                $tsphd = $row['tensanpham'];
                $slsphd=$row['soluongsp'];        
        ?> 
        <tr>
            <td> <?php echo $row['tensanpham']; ?> </td>
            <td> <img src="<?php echo $row['hinhanhsp']; ?>" alt=""></td>
            <td>   
                <input id="slg<?=$row['id']?>" onchange="updatecart(<?=$row['id']; ?>)" style="width: 50px; height: 20px;" type="number" min="1" max="15" name="oslgiohang" value="<?php echo $row['soluongsp'];?>">
            </td>
            <td><?php echo number_format($row['giasp']);?></td>
            <td><?php echo number_format($thanhtien)."   VNĐ"; ?></td>
            <td><a href="index.php?xem=giohang&xoa=<?=$row['id']?>"><i class="fa fa-times"></i></a></td>
        </tr>
    <?php
                $tongthanhtien +=$thanhtien;
                $_SESSION['tongthanhtien']=$tongthanhtien;
            }
    ?>
    </table>

    <div class="tongket" id="divtongket">
        <span class="tongtienthanhtoan" id="tongtiencart" >TỔNG CỘNG:</span>
        <span class="tongtienthanhtoan" id="tongthanhtoancart"><?php echo number_format($tongthanhtien)."     VNĐ"; ?></span>
        <!-- <p><input type="submit" class="nutdathang1" value="Đặt Hàng"></p> -->
       <p> <a href="index.php?xem=giohang&dathang=dathang"class="nutdathang1"  value="Đặt Hàng">Đặt Hàng</a></p>
       <p> <a href="index.php?xem=giohang&don=donhang"class="nutxemdon" value="Đơn hàng">Đơn hàng</a></p>
    </div>
</div>
<?php
    $sel1="SELECT * FROM username where tendangnhap='$idspp' ";
    $rs1 = $connect->query($sel1);
    $r1= $rs1 ->fetch_assoc();
        $dcnhan=$r1['diachi'];


    if (isset($_GET['dathang'])){
            $select_1 = "SELECT * FROM giohang WHeRe iduser='$idspp'";           
            $rs_gh = $connect->query($select_1);
            $dem = $rs_gh->num_rows;
        if ($dem == 0){
            header('location: index.php?xem=giohang');
        }else{
            $inserthd= "INSERT INTO `hoadon`(`tenkh`,`idkhachhang`, `phivanchuyen`, `diachigui`, `diachinhan`, `tongtien`) VALUES ('$idspp','$idkhachhang','50000','TP.HCM,  Việt Nam','$dcnhan','$tongthanhtien')";
            $rhd=$connect->query($inserthd);
        }
        $select1 = "SELECT * FROM giohang WHeRe iduser='$idspp'";
        $rs1 = $connect->query($select1);
        
        $sel = $connect->query("SELECT * FROM `hoadon` ORDER BY `hoadon`.`id` DESC LIMIT 1");
        $r = $sel->fetch_assoc();
        $iddon = $r['id'];

        while ($rows = $rs1->fetch_assoc()){
            $idsp = $rows['idsanpham'];
            $tsphd = $rows['tensanpham'];
            $slsphd=$rows['soluongsp']; 
            $connect->query("INSERT INTO `sanphamhoadon`( `idkhachhang`,`tenkhachhang`, `sanphamdadat` ,`ngaydat`,`soluong`, `giasp`,`iddon`, `idsanphamhoadon`)
             VALUEs ('$idkhachhang','$idspp','$tsphd',NOW(),'$slsphd','$gia',$iddon,$idsp)");
            $connect->query("INSERT INTO `thongke`( `idkhachhang`,`tenkhachhang`, `sanphamdadat` ,`ngaydat`,`soluong`, `giasp`,`iddon`, `idsanphamhoadon`)
            VALUEs ('$idkhachhang','$idspp','$tsphd',NOW(),'$slsphd','$gia',$iddon,$idsp)");
        }
      $connect->query("DELETE FROM `giohang` WHERE iduser='$idspp'");
      header('location: index.php?xem=giohang');
      
    }
    if(isset($_GET['xoa'])){
        $del=$_GET['xoa'];
        $del1="DELETE FROM giohang WHERE id='$del' ";
        $rsdl=$connect->query($del1);
        header('location: index.php?xem=giohang');

    }
    if (isset($_GET['don'])){
        include("donhang.php");
    }
    
?>

<style>
    table{
        margin: 100px auto 50px auto;
        width: 1600px;
        /* border: 1px solid rgb(174, 185, 248); */
     
        
   }
   th{
        border: 1px solid rgb(174, 185, 248);
        width: 500px;
        font-size: 20px;
        height: 70px;
        text-align: center;
   }
   td{
    border: 1px solid rgb(174, 185, 248);
    width: 500px;
    text-align: center;
   }
    img{
        width: 80px;
        height: 90px;
    }
   .tongket{
       margin-left: 1400px;
       margin-bottom: 100px;
   }
   .tongtienthanhtoan{
       font-size: 20px;
       margin-left: 50px;
   }
   p{
    margin-top: 50px;
   }
   a{
       text-decoration: none;
   }
   .nutdathang1, .nutxemdon{
       margin-left: 100px;
       padding: 10px 70px 10px 70px;
       background-color: orange;
       font-size: 20px;
       border-radius: 10px;
   }
   .nutdathang1:hover, .nutxemdon:hover{
       background: orangered;
       color: white;
       border: 2px solid black;
   }

</style>