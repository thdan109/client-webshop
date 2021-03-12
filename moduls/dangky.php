
<?php
    include('connection.php');
    if (isset($_POST['nutdk'])){
        $tendk=$_POST['tendk'];
        //echo $tendk;
        $mkdk=$_POST['mkdk'];
        $maildk=$_POST['maildk'];
        $sdtdk=$_POST['sdtdk'];
        $diachidk=$_POST['diachidk'];

        $sql = "INSERT INTO username (tendangnhap,matkhau,email,sodienthoai,diachi) VALUES ('$tendk','$mkdk'  ,'$maildk','$sdtdk','$diachidk')";
        $connect-> query($sql);
    

    }
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<script src="jquery-3.4.1.min.js"></script>

<div class="wrapper">
    <form action="" method="post" id="formdk" enctype="multipart/form-data">
        <div class="title1">
            Đăng Ký
        </div>
       
        <div class="form1">
            <div class="input_field">
                <input type="text" placeholder="Tên" class="input" id="tendk" name="tendk">
                <i class="fas fa-user"></i>
            </div>

            <p id="loiten"></p>
            
            <div class="input_field">
                <input type="email" placeholder="Email" class="input" id="emaildk" name='maildk'>
                <i class="far fa-envelope"></i>
            </div>

            <p id=""></p>

            <div class="input_field">
                <input type="password" placeholder="Nhập mật khẩu" class="input" id="matkhaudk" name='mkdk'>
                <i class="fas fa-lock"></i>
            </div>

            <p id="loimatkhau"></p>

            <div class="input_field">
                <input type="password" placeholder=" Nhập lại mật khẩu" class="input" id="nhaplaimk">
                <i class="fas fa-lock"></i>
            </div>

            <p id="loinhaplaimatkhau"></p>

            <div class="input_field">
                <input type="number" placeholder="Số điện thoại" class="input" id="sdtdk" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" name='sdtdk'>
                <i class="fa fa-phone-square"></i>
            </div>

            <p id="loisdtdk"></p>
            
            <div class="input_field">
                <input type="text" placeholder="Địa Chỉ" class="input" id="diachidk" name ='diachidk'>
                <i class="fa fa-home"></i>
            </div>

            <p id="loidiachi"></p>

            <div class="btn">
                <input class="nutdk" type="submit" value="Đăng ký" name='nutdk'>
                <a href="index.php?check=dangnhap" class="dangnhap1">Đăng Nhập</a>
                <!-- <a href="#">Register</a> -->
            </div>
        </div>
    </form>
</div>

<style>

@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}
body{
  background: rgb(250, 232, 184);
}
p{
    color: red;
    font-size: 15px;
    display: none;
    padding-left: 10px;
}


.wrapper{
  max-width: 350px;
  width: 100%;
  height: auto;
  background: rgb(243, 203, 203);
  padding: 60px 45px;
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%,-50%);
  border-radius: 20px;
}

.wrapper .title1{
  margin-bottom: 20px;
  text-align: center;
  font-size: 26px;
  font-weight: bold;
  color: #e0730c;
}

.wrapper .social_media{
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.wrapper .social_media .item{
  margin: 0 5px;
  width: 35px;
  height: 35px;
  line-height: 35px;
  text-align: center;
  border: 2px solid #e0730c;
  border-radius: 50%;
  cursor: pointer;
  color: #e0730c;
  transition: all 0.5s ease;
}

.wrapper .social_media .item:hover{
  border: 2px solid blue;
  color: blue;
}

.wrapper .form1 .input_field{
  position: relative;
  margin-bottom: 10px;
}

.wrapper .form1 .input_field .input{
  width: 100%;
  padding: 12px;
  padding-left: 30px;
  border: none;
  background: #eeeeee;
}

.wrapper .form1 .btn .nutdk{
  width: 70%;
  margin: 20px auto 20px 38px;
  background: #e0730c;
  text-align: center;
  padding: 12px;
  font-size: 18px;
  border-radius: 25px;
}
.wrapper .form1 .btn .nutdk:hover{
  background: #073da1;
  border: 2px solid #1fdd0e;
  color: white;
}
.wrapper .form1 .btn a{
  margin: 200px 0 0 90px;
  color: blue;
}

.wrapper .form1 .input_field i{
  position: absolute;
  top: 10px;
  left: 10px;
  font-size: 14px;
  color: #1d2120;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #1d2120;
}
::-moz-placeholder { /* Firefox 19+ */
 color: #1d2120;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #1d2120;
}
</style>