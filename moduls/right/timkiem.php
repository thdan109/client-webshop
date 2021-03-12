
   
   <?php
                  include("connection.php");
                
                    if (isset($_POST['tim'])){  
                        if (empty($_POST['osearch'])){
                            ?>
                                  <p style="text-align: center; font-size: 20px; color: red;">  <?php echo  " Mời nhập từ khóa!"; ?></p>
                            <?php
                        } else{
                            $sear=$_POST['osearch'];
                            $select1 = "SELECT * FROM product WHERE tensanpham LIKE '%$sear%'";
                            $rs1 = $connect -> query($select1);
                            $count=mysqli_num_rows($rs1);
                          

                            if ($count>0 && $sear!=""){
                               
                                while ($row1 = $rs1-> fetch_assoc()){
    ?>
                                    <div class="product">
                                        <div class="anh-product">
                                            <img src=" <?php echo $row1['hinhanh']; ?> "alt="123">
                                        </div>   
                                        <div class="gia">Giá: 
                                            <?php echo $row1['gia']."  VNĐ"; ?>  
                                        </div>
                                        <div class="name-product">Tên sản phẩm: 
                                            <?php echo $row1['tensanpham'];?>
                                        </div>
                                      
                                        <div><a href="index.php?xem=wrapper-phukien&loaisp=chitietsanpham&tsp=<?=$row1['tensanpham'] ?>">  <input  class="detail" type="submit" value="Chi tiết" name="chitietsanpham"> </a></div>
                                    </div>
    <?php
                                }   
                    
                            }else{
                            ?>
                                <p style="text-align: center; font-size: 20px; color: red;">  <?php echo  " Không tìm thấy sản phẩm!"; ?></p>
                            <?php
                            }

                        }
                    }
    ?>    
