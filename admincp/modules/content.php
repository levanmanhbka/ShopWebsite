<div class = "content">
    <?php
        if(isset($_GET['quanly'])){
            $tmp = $_GET['quanly'];
        }
        else{
            $tmp = '';
        }

        if($tmp == 'quanlyloaisp'){
            include('modules/manakind/main.php');
        }
    ?>
</div>