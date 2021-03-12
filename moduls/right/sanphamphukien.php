

<?php
    include("connection.php");
    if ($loaipk==""){
        $select = "SELECT * FROM product WHERE (loai='xi-nhan' or loai='chongdo' or loai='ghidong' or loai='lopxe' or loai='denhau' or loai='kinhhau' or loai='boxe')";
        $rs = $connect -> query($select);
    }
    if ($loaipk == "xinhan"){
        $select = "SELECT * FROM product WHERE loai='xi-nhan' ";
        $rs = $connect -> query($select);
    }
    else if ($loaipk == "chongdo"){
        $select = "SELECT * FROM product WHERE loai='chongdo' ";
        $rs = $connect -> query($select);
    }
    else if ($loaipk == "ghidong"){
        $select = "SELECT * FROM product WHERE loai='ghidong' ";
        $rs = $connect -> query($select);
    }
    else if ($loaipk == "lopxe"){
        $select = "SELECT * FROM product WHERE loai='lopxe' ";
        $rs = $connect -> query($select);
    }
    else if ($loaipk == "denhau"){
        $select = "SELECT * FROM product WHERE loai='denhau' ";
        $rs = $connect -> query($select);
    }
    else if ($loaipk == "kinhhau"){
        $select = "SELECT * FROM product WHERE loai='kinhhau' ";
        $rs = $connect -> query($select);
    }
    else if ($loaipk == "boxe"){
        $select = "SELECT * FROM product WHERE loai='boxe' ";
        $rs = $connect -> query($select);
    } else if(isset($_POST['tim'])){
        $loai=$_POST['tim'];
    }else{
        $loaipk="";
    }if ($loaipk){
        include('timkiem.php');
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
                <?php echo $row['tensanpham'];?>
            </div>
            <!-- <form action="index.php?xem=wrapper-phukien&loaisp=chitietsanpham&tsp=<?=$row['tensanpham']; ?>" method="post"> -->
                <!-- <div><a href="index.php?xem=wrapper-phukien&loaisp=chitietsanpham&themsp=<?php echo $row['id'];?>"> <input  class="add-product" type="submit" value="Thêm vào giỏ" name="themgio"> </a></div> -->
                <div><a href="index.php?xem=wrapper-phukien&loaisp=chitietsanpham&tsp=<?=$row['tensanpham']; ?>" > <input  class="detail" type="submit" value="Chi tiết" name="timkiem"> </a></div>
            </form>
        </div>
    <?php
        }
    
    ?>                   
