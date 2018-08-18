<?php
    $sql_all = "select * from tbchitietsp";
    $run_all = mysql_query($sql_all);
?>

<p class = "texttitle"> Tat Ca San Pham</p>
<div class = "goodsall">
    <ul>
        <?php
        while($row_all = mysql_fetch_array($run_all))
        {
            ?>
            <li>
            <a href="index.php?xem=detailgood&id=<?php echo $row_all['idsp']?>">
                <img src="admincp/modules/manadetail/uploads/<?php echo $row_all['anhsp']?>" alt="miss image" width = "100px" height = "100px">
                <p style = "color: blue">Ten: <?php echo $row_all['tensp']?></p>
                <p style = "color: blue">Gia: <?php echo $row_all['giasp']?></p>
                <p style = "color: red; text-align: center">Chi tiet</p>
            </a>
            </li>
            <?php
        }
        ?>
    </ul>
</div>