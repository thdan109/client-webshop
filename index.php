
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>     HD Store - Classic Motorcycle          </title>
    <link rel="icon" href="../image/2.jpg" type="image/x-icon" />
    <link rel="stylesheet"  type="text/css" href="./homecss.css" >
</head>
<body>
    
    <?php
            ob_start();
            if (isset($_GET['check'])){
                $login=$_GET['check'];

            } else {
                $login = "";
            }
            if ($login=='dangnhap'){
                include('moduls/dangnhap.php');
            } else if($login == "") {
                include('moduls/tieude.php');  
                include('moduls/footer.php');
            }
            if (isset($_GET['dk1'])){
                $dk2 = $_GET['dk1'];
            }else{
                $dk2 = "";
            }
            if ($dk2 == 'dangky'){
                    include('moduls/dangky.php');
            }   
    ?>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="moduls/indenx.js"></script>
    
</body>
</html> 