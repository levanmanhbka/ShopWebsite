<!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js">
</script>
<script>
    tinymce.init({
        selector: 'textarea'
    });
</script> -->

<?php
    $sql = "select * from tbchitietsp, tbloaisp where idloaisp = id order by idsp asc";
    $run = mysql_query($sql);
    if($run == false)
    {
        echo "failure".mysql_error();
    }
?>
<div
    class="manakind">
    <table width="100%" border="1px">
        <tr>
            <td>ID</td>
            <td>Ten</td>
            <td>Anh</td>
            <td>Gia</td>
            <td>Loai</td>
            <td>Thu Tu</td>
            <td colspan="2">Quan Ly</td>
        </tr>
        <?php while($row = mysql_fetch_array($run)) {?>
        <tr>
            <td>
                <?php echo $row['idsp']?>
            </td>
            <td>
                <?php echo $row['tensp']?>
            </td>
            <td>
                <img src="modules/manadetail/uploads/<?php echo $row['anhsp']?>" width="100" height="50" alt="<?php echo $row['anhsp']?>">
            </td>
            <td>
                <?php echo $row['giasp']?>
            </td>
            <td>
                <?php echo $row['ten']?>
            </td>
            <td>
                <?php echo $row['thutusp']?>
            </td>
            <td><a href="index.php?quanly=quanlychitietsp&action=edit&idsp=<?php echo $row['idsp']?>">Sua</a></td>
            <td><a href="modules/manadetail/handle.php?idsp=<?php echo $row['idsp']?>">Xoa</a></td>
        </tr>
        <?php }?>
    </table>
</div>