<?php
    $sql_com = "select * from tbchitietsp where idsp = $_GET[id]";
    $run_com = mysql_query($sql_com);
    if($run_com)
    echo mysql_error();
    $item = mysql_fetch_array($run_com);
?>
<p class = "texttitle">Chi tiet san pham</p>
<div class = "goodsall">
    <table width="auto" border="1px">
        <tr>
            <td colspan = "2"><div align = "center">Chi Tiet San Pham</div></td>
        </tr>
        <tr>
            <td rowspan = "2"><img 
            src="admincp/modules/manadetail/uploads/<?php echo $item['anhsp']?>" alt="miss image" width = "200px" height = "200px"></td>
            <td>Ten SP: <?php echo $item['tensp']?></td>
        </tr>
        <tr>
            <td>Gia SP: <?php echo $item['giasp']?></td>
        </tr>
        <tr>
            <td colspan = "2"><div align = "center">Thong so ky thuat</div></td>
        </tr>
        <tr>
            <td colspan = "2"><?php echo $item['motasp']?></td>
        </tr>
    </table>
</div>