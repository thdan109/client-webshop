 
    <div class="image-b">
        <div class="image-b-left">
            <!-- <img src="../image/xe/head1.jpg" alt="">  -->
            <a href="" target="_blank" id="link"><img name="imagexe" 
			src="../image/xe/head1.jpg" height="300" width="300" 
			onmouseover="pauseTimer()" onmouseout="activateTimer()" /></a>
        </div>
        <div class="image-b-right">
            <!-- <img src="../image/xe/head3.jpg" alt="">  -->
            <a href="" target="_blank" id="link"><img name="imagexe1" 
			src="../image/xe/head3.jpg" height="300" width="300" 
			onmouseover="pauseTimer()" onmouseout="activateTimer()" /></a>
        </div>
    </div>
    <div class="feature">
        <div><marquee width="1200px">HD Shop chúc bạn có trải nghiệm mua sắm thật thú vị.</marquee></div>
    </div>  
    <div class="chuasanphammoi">
        <p>SẢN PHẨM MỚI</p>
        <div class="sanphammoi">
            
                <?php
                    include('sanphammoinhat.php');

                ?>  
        </div>
    </div>
    <div class="clear"></div>
        
    </div>
    <script>
        var IMAGE_PATHS = [];
        var IMAGE_PATHS1 = [];
        var i=0;
        IMAGE_PATHS[0] = "../image/xe/head3.jpg";
        IMAGE_PATHS[1] = "../image/xe/xe2.jpg";
        IMAGE_PATHS[2] = "../image/xe/xe1.jpg";
        IMAGE_PATHS[3] = "../image/xe/xe3.jpg";

        IMAGE_PATHS1[0] = "../image/xe/head1.jpg";
        IMAGE_PATHS1[1] = "../image/xe/xe12.jpg";
        IMAGE_PATHS1[2] = "../image/xe/xe13.jpg";
        IMAGE_PATHS1[3] = "../image/xe/xe14.jpg";
        function changeSlide() {
            i += 1;
            if ( i > 3){
                i=0;
            }else if (i < 0){
                i=3
            }
            document.getElementsByName('imagexe1')[0].src = IMAGE_PATHS[i];	
            document.getElementsByName('imagexe')[0].src = IMAGE_PATHS1[i];	
        }

        var go = setInterval(changeSlide,2000);
        function pauseTimer(){
            clearInterval(go);
            console.log("Stop");
        }
        function activateTimer(){
            go = setInterval(changeSlide,2000);
        }	
    </script>
        

   