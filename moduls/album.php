<div    class ="note">
    Một vài mẫu xe đẹp
</div>

<?php
    include("connection.php");
    $s="SELECT * FROM `anhxe`";
    $rs = $connect -> query($s);
    
   while ( $row = $rs -> fetch_assoc()){ 
?>
    <div class="divv">
        <img class="anhxedep" src="<?php echo $row['duongdan'];  ?>" alt="">
    </div>
    
<?php        
    }
?>
<div class="clear"></div>
    

<style>
   

</style>




