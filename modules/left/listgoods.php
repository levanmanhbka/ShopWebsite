<?php
    $sql_loaisp = "select * from tbloaisp";
    $run_loaisp = mysql_query($sql_loaisp);
    if($run_loaisp == false)
    echo mysql_error();
?>

<p class = "texttitle"> Loai San Pham</p>
<div class = "listgoods">
    <ul>
        <?php
        while($loaisp = mysql_fetch_array($run_loaisp))
        {
        ?>
            <li><a href="index.php?xem=detailkind&id=<?php echo $loaisp['id']?>"><?php echo $loaisp['ten'] ?></a></li>
        <?php
        }
        ?>
    </ul>
</div>

<p class = "texttitle"> Hieu San Pham</p>
<div class = "listgoods">
    <ul>
        <li><a href="#">Apple</a></li>
        <li><a href="#">Dell</a></li>
        <li><a href="#">Sony</a></li>
        <li><a href="#">Samsung</a></li>
    </ul>
</div>