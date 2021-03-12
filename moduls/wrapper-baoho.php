        <div class="otimkiem">     
                <form id="searchbox" method="post" action=" index.php?xem=wrapper-baoho&loaibaoho=timkiem" >
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
                Sản phẩm
            </div>
            <div class="content">           
                <div class="left">      
                    <?php
                       include('left/loaibaoho.php');
                    ?>
               </div> 
               <div class="tenloai">
                            <?php
                                if (isset($_GET['loaibaoho'])){
                                    $loaibh = $_GET['loaibaoho'];
                                }else {
                                    $loaibh="";
                                }if($loaibh==""){
                                    $tenl="Mời chọn loại hàng!";
                                    echo $tenl;
                                }
                                if ($loaibh=="dobaoho"){
                                    $tenl ="Đồ Bảo Hộ";
                                    echo $tenl;
                                }else if ($loaibh=="baotay"){
                                    $tenl ="Bao Tay";
                                    echo $tenl;
                                }else if ($loaibh=="giapchan"){
                                    $tenl ="Giáp Chân";
                                    echo $tenl;
                                }else if ($loaibh=="nonbaohiem"){
                                         $tenl ="Nón Bảo Hiểm";
                                    echo $tenl;
                                }else if ($loaibh=="giay"){
                                    $tenl ="Giay";
                                    echo $tenl;
                                }else if ($loaibh=="boxe"){
                                    $tenl ="Bô Xe";
                                    echo $tenl;
                                }else if ($loaibh=="ghidong"){
                                    $tenl ="Ghi Đông";
                                    echo $tenl;
                                } else if ($loaibh=="timkiem"){
                                    $tenl="Sản phẩm Bạn đang tìm";
                                    echo $tenl;
                                }          
                            ?>   
                    </div>
               <div class="right">
                    <?php
                       // include('right/sanphambaoho.php');
                       if (isset($_GET['loaibaoho'])){
                           $loaibh = $_GET['loaibaoho'];
                       }else {
                           $loaibh="";
                        }if($loaibh==""){
                            include("right/sanphambaoho.php");
                        }else if ($loaibh=="dobaoho"){
                            include("right/sanphambaoho.php");
                        }else if ($loaibh=="baotay"){
                            include("right/sanphambaoho.php");
                        }else if ($loaibh=="giapchan"){
                        include("right/sanphambaoho.php");
                        }else if ($loaibh=="nonbaohiem"){
                        include("right/sanphambaoho.php");
                        }else if ($loaibh=="giay"){
                            include("right/sanphambaoho.php");
                        }   else if ($loaibh=="timkiem"){
                            include('right/timkiem.php');
                        } else if ($loaibh=="chitietsanpham"){
                            include('chitietsanpham.php');
                        }

                    ?>
                </div> 
        </div>
        <div class="clear"></div>
       
       </div>
     
