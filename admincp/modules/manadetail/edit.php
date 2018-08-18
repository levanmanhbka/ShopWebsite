<?php
    $sql = "select * from tbchitietsp where idsp = $_GET[idsp]";
    $run = mysql_query($sql);
    if($run == false)
    echo msql_error();
    $row = mysql_fetch_array($run);

    $sql = "select * from tbloaisp order by id asc";
    $run = mysql_query($sql);
    if($run == false)
    echo mysql_error();
?>

<form action="modules/manadetail/handle.php?idsp=<?php echo $row['idsp']?>" method="post" enctype="multipart/form-data">
    <div class="manakind">
        <table width="100%" boder="1px">
            <tr>
                <td colspan="2">
                    <div align="center">Sua chi tiet san pham</div>
                </td>
            </tr>
            <tr>
                <td>Ten</td>
                <td><input type="text" name="tensp" id="" value = "<?php echo $row['tensp']?>"></td>
            </tr>
            <tr>
                <td>Gia</td>
                <td><input type="text" name="giasp" id="" value = "<?php echo $row['giasp']?>"></td>
            </tr>
            <tr>
                <td>Hinh anh</td>
                <td>
                <input type="file" name="anhsp" id="">
                <img src="modules/manadetail/uploads/<?php echo $row['anhsp']?>" alt="" width = "50" height="30">
                </td>
            </tr>
            <tr>
                <td>Mo ta</td>
                <td><textarea name="motasp" id="" cols="25" rows="10"><?php echo $row['motasp']?></textarea></td>
            </tr>
            <tr>
                <td>Loai</td>
                <td>
                    <select name="loaisp" id="">
                        <?php while($row_loai = mysql_fetch_array($run)){
                            if($row_loai['id'] == $row['idloaisp'])
                            {
                            ?>
                                <option selected = "selected" value="<?php echo $row_loai['id']?>">
                                <?php echo $row_loai['ten']?>
                                </option>
                            <?php
                            }
                            else
                            {
                            ?>
                                <option value="<?php echo $row_loai['id']?>">
                                <?php echo $row_loai['ten']?>
                                </option>    
                            <?php
                            }
                        } 
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Thu tu</td>
                <td><input type="text" name="thutusp" id="" value = "<?php echo $row['thutusp']?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="suasanpham" value="Sua">
                </td>
            </tr>
        </table>
    </div>
</form>