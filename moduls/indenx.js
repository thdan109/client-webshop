
    const tendk = document.getElementById('tendk');
    const matkhaudk = document.getElementById('matkhaudk');
    const nhaplaimk = document.getElementById('nhaplaimk');
    const sdtdk = document.getElementById('sdtdk');
    const diachidk = document.getElementById('diachidk');

    var errten = false;
    var errmk = false;
    var errnhaplaimk = false;
    var errsdt =false;
    var errdc = false;
    function checktendk(){
        errten = false;
        errmk = false;
        errnhaplaimk = false;
        errsdt =false;
        errdc = false;
        var valitendk = document.getElementById('tendk').value.length;

        if (valitendk < 6){
            document.getElementById('loiten').innerHTML ="Tên quá ngắn!";
            document.getElementById('loiten').style.display = "block";
            document.getElementById('tendk').style.border = "1px solid red";
             errten = true;
        } else {
            document.getElementById('loiten').style.display = "none";
            document.getElementById('tendk').style.border = "none";
        }
    }
    function checkmkdk(){
        var valimkdk = document.getElementById('matkhaudk').value.length;
        if (valimkdk < 5){
            document.getElementById('loimatkhau').innerHTML ="Nhập mật khẩu ít nhất 10 kí tự!";
            document.getElementById('loimatkhau').style.display = "block";
            document.getElementById('matkhaudk').style.border = "1px solid red";
             errmk = true;
        }else {
            document.getElementById('loimatkhau').style.display = "none";
            document.getElementById('matkhaudk').style.border = "none";
        }
    }
    function checknhaplaimk(){
        var valimatkhaunhaplai = document.getElementById('nhaplaimk').value;
        console.log(valimatkhaunhaplai, document.getElementById('matkhaudk').value )
        if (valimatkhaunhaplai != document.getElementById('matkhaudk').value){
            document.getElementById('loinhaplaimatkhau').innerHTML ="Xác thực lại mật khẩu chưa đúng!";
            document.getElementById('loinhaplaimatkhau').style.display = "block";
            document.getElementById('nhaplaimk').style.border = "1px solid red";
             errnhaplaimk = true;
        }else {
            document.getElementById('loinhaplaimatkhau').style.display = "none";
            document.getElementById('nhaplaimk').style.border = "none";
        }
    }
    function checksdt(){
        var valisdt = document.getElementById('sdtdk').value.length;
        if (valisdt < 9 && valisdt >11 ){
            document.getElementById('loisdtdk').innerHTML ="Nhập định dạng số!";
            document.getElementById('loisdtdk').style.display = "block";
            document.getElementById('sdtdk').style.border = "1px solid red";
             errsdt = true;
        }else {
            document.getElementById('loisdtdk').style.display = "none";
            document.getElementById('sdtdk').style.border = "none";
        }
    }
    function checkdiachidk(){
        var validiachi = document.getElementById('diachidk').value.length;
        if (validiachi < 1){
            document.getElementById('loidiachi').innerHTML ="Nhập đầy đủ địa chỉ!";
            document.getElementById('loidiachi').style.display = "block";
            document.getElementById('diachidk').style.border = "1px solid red";
             errdc = true;
        }else {
            document.getElementById('loidiachi').style.display = "none";
            document.getElementById('diachidk').style.border = "none";
        }
    
    }












    $('#formdk').on('submit', function() {
      



        checktendk();
        checkmkdk();
        checknhaplaimk();
        checksdt();
        checkdiachidk();

        if(errten == false && errmk == false && errnhaplaimk == false && errsdt == false && errdc == false) {
            return true;
        } else {
            console.log('áda')
            return false;

        }
    }
    )
    function addProduct(id){
        var num = document.getElementById("slg").value;
       
        $.post('moduls/themsanpham1.php',{'id' : id, 'num' : num},function(data){
            Swal.fire({
                position: 'top',
                icon: 'success',
                title: 'Đã thêm vào giỏ hàng!!!',
                showConfirmButton: false,
                timer: 1500
              }).then(function() {
                
              });
        });

       




        

    } 

    //Ham cap nhat gio hang

    function updatecart(id){
        var numslg =Number(document.getElementById('slg' + id).value);
        if (numslg > 15){
            numslg = 15;
        }
        console.log(numslg);
        $.post('moduls/capnhatgiohang.php',{'id':id, 'num': numslg},function(data){          
            $("#divcart").load("index.php?xem=giohang #tablecart, #divtongket");        
        });
    }





    
    
    
    
    
    
    

