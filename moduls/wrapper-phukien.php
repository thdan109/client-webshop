
        <div class="otimkiem">
     
                <form id="searchbox" method="post" action="index.php?xem=wrapper-phukien&loaisp=timkiem" >
                    <input name="osearch" type="text" size="15" placeholder="Tìm gì tìm đê..." />
                    <input id="button-submit" type="submit" value=" " name="tim"/>
                </form> 
    
                <!-- <input type="text" id="otk" name="otim" >
                <input type="submit" id="timk" placeholder="Tìm gì tìm đê...." value="timkiem"> -->
                <?php
                
                ?>
        </div>

        <div class="wrapper">
            <div class="title">
                Phụ Kiện
            </div>
            <div class="content">           
                <div class="left">      
                    <?php
                       include('left/loaisanpham.php');                   
                    ?>
               </div> 
               <div class="tenloai">
                            <?php
                                
                                if (isset($_GET['loaisp'])){
                                    $loaipk = $_GET['loaisp'];
                                }else {
                                    $loaipk="";
                                }if($loaipk==""){
                                    $tenl="Mời chọn loại hàng!";
                                    echo $tenl;
                                }
                                if ($loaipk=="xinhan"){
                                    $tenl ="Xi Nhan";
                                    echo $tenl;
                                }else if ($loaipk=="chongdo"){
                                    $tenl ="Chống Đổ";
                                    echo $tenl;
                                }else if ($loaipk=="denhau"){
                                    $tenl ="Đèn Hậu";
                                    echo $tenl;
                                }else if ($loaipk=="kinhhau"){
                                         $tenl ="Kính Hậu";
                                    echo $tenl;
                                }else if ($loaipk=="lopxe"){
                                    $tenl ="Lốp Xe";
                                    echo $tenl;
                                }else if ($loaipk=="boxe"){
                                    $tenl ="Bô Xe";
                                    echo $tenl;
                                }else if ($loaipk=="ghidong"){
                                    $tenl ="Ghi Đông";
                                    echo $tenl;
                                    $tenl="";
                                }else if ($loaipk=="timkiem"){
                                    $tenl="Sản phẩm Bạn đang tìm";
                                    echo $tenl;
                                }
                            ?>   
                    </div>
               <div class="right">
             
                    <?php
                       if (isset($_GET['loaisp'])){
                           $loaipk = $_GET['loaisp'];
                       }else {
                           $loaipk="";
                        }if ($loaipk==""){
                            include("right/sanphamphukien.php");
                        }else if ($loaipk=="xinhan"){
                            include("right/sanphamphukien.php");
                        }else if ($loaipk=="chongdo"){
                            include("right/sanphamphukien.php");
                        }else if ($loaipk=="denhau"){
                        include("right/sanphamphukien.php");
                        }else if ($loaipk=="kinhhau"){
                        include("right/sanphamphukien.php");
                        }else if ($loaipk=="lopxe"){
                            include("right/sanphamphukien.php");
                        }else if ($loaipk=="boxe"){
                            include("right/sanphamphukien.php");
                        }else if ($loaipk=="ghidong"){
                            include("right/sanphamphukien.php");
                        }else if ($loaipk=="timkiem"){
                            include('right/timkiem.php');
                        }else if ($loaipk=="chitietsanpham"){
                            include('chitietsanpham.php');
                        }


                
                    ?>
                
                </div>
                
        </div>
        <div class="clear"></div>
       
       </div>
     
