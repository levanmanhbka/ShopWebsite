<?php
    $sql = "select * from tbloaisp where id = $_GET[id] ";
    $run = mysql_query($sql);
    $row = mysql_fetch_array($run);
?>
<form
    action="modules/manakind/handle.php?id=<?php echo $row['id']?>" method="post" enctype="multipart/form-data">
    <div class="manakind">
        <table width="100%" boder="1px">
            <tr>
                <td colspan="2">
                    <div align="center">Sua Loai San Pham</div>
                </td>
            </tr>
            <tr>
                <td>Ten loai sp</td>
                <td><input type="text" name="tenloaisp" id="" value="<?php echo $row['ten']?>"></td>
            </tr>
            <tr>
                <td>So thu tu</td>
                <td><input type="text" name="sothutu" id="" value="<?php echo $row['thutu']?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="sualoaisp" value="Sua">
                </td>
            </tr>
        </table>
    </div>
</form>