<?php
    include('admincp/modules/config.php');
    session_start();
    if(isset($_POST['loginkh']))
    {
        $emailkh = $_POST['emailkh'];
        $matkhaukh = $_POST['matkhaukh'];
        $sql = "select * from tbcustomer where emailkh = '$emailkh' and matkhaukh = '$matkhaukh' limit 1";
        $run = mysql_query($sql);
        $num = mysql_num_rows($run);
        if($num > 0)
        {
            $_SESSION['loginkh'] = $emailkh;
            header('location:index.php?xem=giohang');
        }
        else
        {
           echo '<script> alert("sai tai khoan hoac mat khau")</script>';
        }
    }
?>


<form action="" method = "post">
    <center>
        <table>
            <tr>
                <td colspan = "2" align = "center">Khach Hang Dang Nhap</td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text" name="emailkh" id=""></td>
            </tr>

            <tr>
                <td>Mat Khau: </td>
                <td><input type="password" name="matkhaukh" id=""></td>
            </tr>

            <tr>
                <td colspan = "2" align = "center">
                    <input type="submit" name = "loginkh" value="Login">
                </td>
            </tr>
        </table>
    </center>
</form>