
<?php
     
        include('connection.php');
        // $chitiet = "SELECT * FROM product WHERE tensanpham="
       if (isset($_GET['tsp'])){
                $te1=$_GET['tsp'];
                $select = "SELECT * FROM product  WHERE tensanpham='$te1' ";
                $rs1 = $connect -> query($select);
                //while ($row1 =$rs1-> fetch_assoc()){
                $row1 =$rs1-> fetch_assoc();
                $idsp=$row1['id'];
                //echo $_SESSION['id_sp'];
        ?>



    <div class="thongtinsanpham">
        <div class="asp">
            <img src=" <?php echo $row1['hinhanh'];?>" alt="123">
        
        </div>
        <span id="ten" > Tên sản phẩm: <?php  echo $row1['tensanpham'] ?></span><br> <br><br> 
        <div class="thongtin">
        <!-- <form  method='post'> -->
            <ul>
                <li><span id ="gia"> Giá sản phẩm:</span><span class="gia1" style="color: blue; "> <?php  echo number_format($row1['gia']) ?> VNĐ</span> <br></li>
                <li>
                    <span id="gia">Số lượng: </span>
                    <span class="btsluong">
                        <!-- <input class="min" type="button" value="-"> -->
                        <input id="slg" class="osl" min="1" name="oslct" type ="number" value="1">
                        <!-- <input class="plus" type="button" value="+"> -->
                    </span> <br>
                </li>
                <li><span id ="gia"> Mô tả: </span> <span class="gia1"><?php  echo  $row1['thongso'] ?></span> <br></li>
                <li><span id ="gia"> Nhà Sản Xuất: </span> <span class="gia1"><?php  echo $row1['nhasanxuat'] ?></span> <br> <br></li>
            </ul> 
            <input type="button"  onclick="addProduct('<?php echo $row1['id']; ?>')" id="them" value="Thêm vào giỏ" name="themgio">  
            <a href="index.php?xem=<?=$_SESSION['bam']?>" class="back">Tiếp tục mua hàng</a>
        <!-- </form> -->
       
        </div>
    </div>    
   








<?php
            }
        
           
        // if(isset($_POST['themgio'])){
        //     if ($_SESSION['check']=="1"){
        //        echo "<script>
        //                 alert('Đăng Nhập!');
        //             </script>";
        //     }  else{
        //         $tendnsp=$_SESSION['tendangnhap'];
        //         $tensp=$row1['tensanpham'];
        //         $anhspgh=$row1['hinhanh'];
        //         $slgh = $_POST['oslct'];
        //         $giagh=$row1['gia']; 
        //         $insert = "INSERT INTO `giohang`( `idsanpham`,`iduser`, `tensanpham`, `hinhanhsp`, `soluongsp`, `giasp`) VALUES ($idsp,'$tendnsp','$tensp','$anhspgh','$slgh','$giagh')";
        //         // echo $insert;
        //         $rs1 = $connect -> query($insert);     
        //     }
                
        // }
        
            
        
?>          
    
<style>
        .thongtinsanpham{
            margin:auto;
            width: 830px;
            height: 450px;
            margin-bottom:30px;
            margin-top: 30px;
            /* border: 1px solid black; */
            background:rgb(224, 251, 255);
        }
        
        .asp{
            float:left;
           
            margin-bottom: 30px;

        }
        .asp img{
            margin-top: 25px;
            width: 380px;
            height: 400px;
            margin-left: 10px;
        }
        .thongtin{
            float: right;
            padding-top: 120px;
            padding-right: 50px;
            
        }
        #ten{
            color: red;
            font-size: 25px;
            float: left;
            padding-top: 20px;
            text-align: center;
            margin-left: 50px;
            
        }
        li{
            padding-top:5px;
        }
        #gia{
            font-size: 16px;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            

        }
        .gia1{
            float: right;
            font-size: 16px;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
        .btsluong{
            float: right;
        }
        .btsluong .osl{
            width: 50px;
            border-radius: 5px;
            text-align: center;
        }
         



        #them{
            width: 150px;
            height: 40px;
            font-size: 16px;
            color: white;
            background: rgb(224, 24, 24);     
            margin-top: 50px;
            margin-left: 25px;
            
        }
        #them:hover{
            border: 2px solid rgb(50, 50, 250);
            border-radius: 4px;
        }
        .back{
            width: 150px;
            height: 80px;
            font-size: 16px;
            padding:11px;
            color: white;
            background: rgb(221, 134, 21);
            margin-left: 40px;
            text-decoration: none;

            
        }
        .back:hover{
            border: 2px solid rgb(50, 15, 250);
            border-radius: 4px;
        }

    </style>