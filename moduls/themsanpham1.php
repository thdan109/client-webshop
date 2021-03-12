<?php 

  include("connection.php");
  session_start();
  if(isset($_POST["id"]) && isset($_POST["num"])){
    $id = $_POST["id"];
    $num = $_POST["num"];  
    $select = "SELECT * FROM product  WHERE id=$id ";
    $rs1 = $connect -> query($select);
    $row1 =$rs1-> fetch_assoc();
    $idsp=$_POST['id'];
    $tendnsp=$_SESSION['tendangnhap'];
    $tensp=$row1['tensanpham'];
    $anhspgh=$row1['hinhanh'];
    $slgh = $_POST['num'];
    $giagh=$row1['gia']; 
        
    
    $select_t = "SELECT * FROM giohang WHeRe tensanpham='$tensp'";           
    $rs_t = $connect->query($select_t); 
    $row_t=$rs_t->fetch_assoc();
    if ($rs_t -> num_rows !=0){
      $tong_t = $row_t['soluongsp'] + $num;
        $connect->query("UPDATE `giohang` SET `tensanpham`='$tensp', `soluongsp`=$tong_t where idsanpham=$id");
    }else{
      $insert = "INSERT INTO `giohang`( `idsanpham`,`iduser`, `tensanpham`, `hinhanhsp`, `soluongsp`, `giasp`) VALUES ($idsp,'$tendnsp','$tensp','$anhspgh','$slgh','$giagh')";
    $rs1 = $connect -> query($insert); 
    }
  }
?>