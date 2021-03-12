

    <?php
        include("connection.php");
        $san = "SELECT * FROM `product` ORDER BY `product`.`id` DESC LIMIT 10";
        $rs = $connect -> query($san);

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



