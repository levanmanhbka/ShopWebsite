<?php
    $sql = "select * from tbloaisp order by id asc";
    $run = mysql_query($sql);
?>

<form action="modules/manadetail/handle.php" method="post" enctype="multipart/form-data">
    <div class="manakind">
        <table width="100%" boder="1px">
            <tr>
                <td colspan="2">
                    <div align="center">Them chi tiet san pham</div>
                </td>
            </tr>
            <tr>
                <td>Ten</td>
                <td><input type="text" name="tensp" id=""></td>
            </tr>
            <tr>
                <td>Gia</td>
                <td><input type="text" name="giasp" id=""></td>
            </tr>
            <tr>
                <td>Hinh anh</td>
                <td><input type="file" name="anhsp" id=""></td>
            </tr>
            <tr>
                <td>Mo ta</td>
                <td><textarea name="motasp" id="" cols="25" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Loai</td>
                <td>
                    <select name="loaisp" id="">
                        <?php while($row = mysql_fetch_array($run)){ ?>
                        <option value="<?php echo $row['id']?> ">
                            <?php echo $row['ten']?>
                        </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Thu tu</td>
                <td><input type="text" name="thutusp" id=""></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="themsanpham" value="Them">
                </td>
            </tr>
        </table>
    </div>
</form>