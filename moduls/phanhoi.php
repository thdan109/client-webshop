<?php
        include('connection.php');
        if (isset($_POST['guiph'])){
          $nameph=$_POST['tname'];
          $trainghiemph=$_POST['trainghiem'];
          $donggopph=$_POST['donggop'];
          if ($_SESSION['check']=='1'){

            $tenkh="Người dùng khách!";
           
          }else{
            $tenkh=$_SESSION['tendangnhap'];
            $id = $_SESSION['id'];
          }
            // echo $nameph,$trainghiemph,$donggopph,$tenkh  ;
            echo $id;
            $insertph = "INSERT INTO phanhoi (`idkh`,`tenph`, `trainghiem`, `donggop`, `tenkh`) VALUES ('$id','$nameph','$trainghiemph','$donggopph','$tenkh')";  
            $connect -> query($insertph);
          
        }

?>


<body>
<style>
    input[type=text], #trainghiem, textarea {
        width: 100%; 
        padding: 12px; 
        border: 1px solid #ccc; 
        border-radius: 4px; 
        box-sizing: border-box; 
        margin-top: 6px; 
        margin-bottom: 16px; 
        resize: vertical ;
    }
    input[type=submit] {
        margin-left: 450px;
        background-color: grey;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type=submit]:hover {
        background-color: #4CAF50;
    }
    .container {
        width: 1000px;
        margin-top:  200px;
        margin: auto;
        border-radius: 5px;
        background-color: #f2f2f2;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        padding: 20px;
    }
</style>


<div class="container">
  <form method='post'>

    <label for="name">Tên</label>
    <input type="text" id="name" name="tname" placeholder="Tên của bạn..">

    <!-- <label for="email">Email</label>
    <input type="text" id="email" name="mail" placeholder="Mail của bạn.."> -->
    
    <label for="">Trải nghiệm của bạn</label>
    <select id="trainghiem" name="trainghiem">
      <option value="Tệ">Tệ</option>
      <option value="Bình thường">Bình thường</option>
      <option value="Tốt">Tốt</option>
    </select>

   

    <label for="subject">Đóng góp</label>
    <textarea id="subject" name="donggop" placeholder="Rất mong nhận được đóng góp của bạn.." style="height:200px"></textarea>

    <input type="submit" name="guiph" value="Gửi">

  </form>
</div>

   


</body>
