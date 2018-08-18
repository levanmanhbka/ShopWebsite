<?php
    $sql_detail = "select * from tbchitietsp where idloaisp = $_GET[id]";
    $run_detail = mysql_query($sql_detail);
?>
<p class = "texttitle">Chi tiet loai san pham</p>
<div class = "goodsall">
    <ul>
        <?php
            while($row_detail = mysql_fetch_array($run_detail))
            {
                ?>
                <li>
                <a href="index.php?xem=detailgood&id=<?php echo $row_detail['idsp']?>">
                    <img src="admincp/modules/manadetail/uploads/<?php echo $row_detail['anhsp']?>" alt="miss image" width = "100px" height = "100px">
                    <p style = "color: blue">Ten: <?php echo $row_detail['tensp']?></p>
                    <p style = "color: blue">Gia: <?php echo $row_detail['giasp']?></p>
                    <p style = "color: red; text-align: center">Chi tiet</p>
                </a>
                </li>
                <?php
            }
        ?>
        
    </ul>
</div>