<div class="left">
    <?php
        if(isset($_GET['action'])){
            $tmp = $_GET['action'];
        }
        else{
            $tmp = '';
        }
        if($tmp == 'add')
        {
            include('modules/manadetail/add.php');
        }
        else if($tmp == 'edit'){
            include('modules/manadetail/edit.php');
        }
    ?>
</div>

<div class="right">
    <?php
        include('modules/manadetail/list.php');
    ?>
</div>