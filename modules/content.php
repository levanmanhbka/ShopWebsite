<div class = "clear"></div>
<div class = "content">
    <div class = "left">
        <?php 
            include("modules/left/listgoods.php");
        ?>
    </div>
    <div class = "right">
        <?php 
            if(isset($_GET['xem'])){
                $temp = $_GET['xem'];
            }
            else{
                $temp = '';
            }
            if($temp == 'detailkind'){
                include('modules/right/detailkind.php');
            }else if($temp == 'detailgood'){
                include('modules/right/detailgood.php');
            }else if($temp == 'giohang')
            {
                include ('modules/right/cart.php');
            }else{
                include("modules/right/goodsall.php");
            }
        ?>
    </div>
</div>