<h1 width = "100%" style ="align:center">Gio Hang</h1>
<?php
    session_start();
    if(isset($_GET['them']) && !empty($_GET['them']))
    {
        $idsp = $_GET['them'];
        @$_SESSION['cart_'.$idsp] += 1;
        header('location:index.php?xem=giohang');
    }
    if(isset($_GET['cong']) && !empty($_GET['cong']))
    {
        $idsp = $_GET['cong'];
        @$_SESSION['cart_'.$idsp] += 1;
        header('location:index.php?xem=giohang');
    }
    if(isset($_GET['tru']) && !empty($_GET['tru']))
    {
        $idsp = $_GET['tru'];
        @$_SESSION['cart_'.$idsp] -= 1;
        header('location:index.php?xem=giohang');
    }
    if(isset($_GET['delete']) && !empty($_GET['delete']))
    {
        $idsp = $_GET['delete'];
        @$_SESSION['cart_'.$idsp] = 0;
        header('location:index.php?xem=giohang');
    }
?>

<table width = "100%" border = "1px">
    <tr>
        <td>Hinh Anh</td>
        <td>Ten SP</td>
        <td>So Luong</td>
        <td>Gia SP</td>
        <td>Thanh Tien</td>
        <td>Thay Doi</td>
    </tr>

<?php
    $tongtien = 0;
    foreach($_SESSION as $name => $value){
        if($value > 0)
        {
            if(substr($name, 0, 5)== 'cart_')
            {
                $idsp = substr($name, 5, strlen($name) - 5);
                $soluong = $value;
                $sql = "select * from tbchitietsp where idsp = '$idsp'";
                $run = mysql_query($sql);
                $item = mysql_fetch_array($run);
                $tien = $value * $item['giasp'];
                $tongtien += $tien;
?>
                <tr>
                    <td><img src="admincp/modules/manadetail/uploads/<?php echo $item['anhsp']?>" width="100" height="50" alt="<?php echo $item['anhsp']?>"></td>
                    <td><?php echo $item['tensp']?></td>
                    <td><?php echo $soluong?></td>
                    <td><?php echo $item['giasp']?></td>
                    <td><?php echo $tien ?></td>
                    <td>
                    <a href="index.php?xem=giohang&cong=<?php echo $item['idsp']?>">[+]</a>
                    <a href="index.php?xem=giohang&tru=<?php echo $item['idsp']?>">[-]</a>
                    <a href="index.php?xem=giohang&delete=<?php echo $item['idsp']?>">[del]</a>
                    </td>
                </tr>
<?php
            }
        }
    }
?>
</table>

<br>
<br>
<h3>Tong gia tri hoa don: <?php echo $tongtien?></h3>