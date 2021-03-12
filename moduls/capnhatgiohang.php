<?php
    include('connection.php');
    session_start();
    if (isset($_POST['id'])){
        $id = $_POST['id'];
        $numslg = $_POST['num'];
        
        $up = "UPDATE `giohang` SET `soluongsp`=$numslg WHERE `id`='$id' ";
        $connect->query($up);
        print_r($up);
    }

    

?>