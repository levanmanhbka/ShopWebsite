<?php
    $sql = "select * from tbloaisp order by id asc";
    $run = mysql_query($sql);
?>

<div class="manakind">
    <table width="100%" border="1px">
        <tr>
            <td>ID</td>
            <td>Ten sp</td>
            <td>Thu tu</td>
            <td colspan="2">Quan ly</td>
        </tr>
        <?php
            while($row = mysql_fetch_array($run)){

        ?>
        <tr>
            <td>
                <?php echo $row['id']?>
            </td>
            <td>
                <?php echo $row['ten']?>
            </td>
            <td>
                <?php echo $row['thutu']?>
            </td>
            <td><a href="index.php?quanly=quanlyloaisp&action=edit&id=<?php echo $row['id']?>">Sua</a></td>
            <td><a href="modules/manakind/handle.php?id=<?php echo $row['id'] ?>">Xoa</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
</div>