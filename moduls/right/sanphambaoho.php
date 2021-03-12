<?php
    include("connection.php");
    if ($loaibh==""){
        $select = "SELECT * FROM product WHERE (loai='dobaoho' or loai='baotay' or loai='giapchan' or loai='mubaohiem'or loai='giay') " ;
        $rs = $connect -> query($select);
    }else 
    if ($loaibh == "dobaoho"){
        $select = "SELECT * FROM product WHERE loai='dobaoho' ";
        $rs = $connect -> query($select);
    }
    else if ($loaibh == "baotay"){
        $select = "SELECT * FROM product WHERE loai='baotay' ";
        $rs = $connect -> query($select);
    }
    else if ($loaibh == "giapchan"){
        $select = "SELECT * FROM product WHERE loai='giapchan' ";
        $rs = $connect -> query($select);
    }
    else if ($loaibh == "nonbaohiem"){
        $select = "SELECT * FROM product WHERE loai='mubaohiem' ";
        $rs = $connect -> query($select);
    }
    else if ($loaibh == "giay"){
        $select = "SELECT * FROM product WHERE loai='giay' ";
        $rs = $connect -> query($select);
    }
   
?>

    <?php
        while ($row = $rs-> fetch_assoc()){
    ?>

        <div class="product">
           
                <div class="anh-product">
                    <img src=" <?php echo $row['hinhanh']; ?> "alt="123">
                </div>   
                <div class="gia">Giá: 
                    <?php echo number_format($row['gia'])."  VNĐ"; ?>  
                </div>
                <div class="name-product">Tên sản phẩm: 
                    <?php echo $row['tensanpham'] ;?>
                </div>
                <!-- <input class="add-product" type="submit" value="Thêm vào giỏ" name="themgio"> -->
                <div><a href="index.php?xem=wrapper-baoho&loaibaoho=chitietsanpham&tsp=<?=$row['tensanpham']; ?>" >  <input  class="detail" type="submit" value="Chi tiết" name="timkiem"> </a></div>
           
        </div>
    <?php
            
        }
        if(isset($_POST['themgio'])){
            if($_SESSION['tendangnhap']){
                $tendnsp=$_SESSION['tendangnhap'];
                $tensp=$row['tensanpham'];
                $anhspgh=$row['hinhanh'];
                $slgh = "1";
                $giagh=$row['gia'];
                $insert = "INSERT INTO `giohang`( `iduser`, `tensanpham`, `hinhanhsp`, `soluongsp`, `giasp`) VALUES ('$tendnsp','$tensp','$anhspgh','$slgh','$giagh')";
                $rs1 = $connect -> query($insert);
                echo $insert;
            }         
        }

    ?>