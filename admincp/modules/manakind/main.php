<div class = "left">
    <?php
        if(isset($_GET['action'])){
            $tmp = $_GET['action'];
        }
        else{
            $tmp = '';
        }
        if($tmp == 'add')
        {
            include('modules/manakind/add.php');
        }
        else if($tmp == 'edit'){
            include('modules/manakind/edit.php');
        }
    ?>
</div>

<div class = "right">
    <?php
        include('modules/manakind/list.php');
    ?>
</div>