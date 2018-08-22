<?php
    if(isset($_POST['dangkykh'])){
        $tenkh = $_POST['tenkh'];
        $matkhaukh = $_POST['matkhaukh'];
        $dienthoaikh = $_POST['dienthoaikh'];
        $emailkh = $_POST['emailkh'];
        $diachikh = $_POST['diachikh'];

        $sql = "insert into tbcustomer (tenkh, matkhaukh, dienthoaikh, emailkh, diachikh) ".
        "values ('$tenkh', '$matkhaukh', '$dienthoaikh', '$emailkh', '$diachikh')";
        $run = mysql_query($sql);
        if($run)
        {
            header('location:index.php?xem=dangnhap');
        }
        else
        {
            header('location:index.php?xem=dangky');
        }
    }
?>

<form action="index.php?xem=dangky" method = "post" enctype="multipart/form-data">
    <table width = "400" boder = "2px">
        <tr><td colspan = "2" style = "text-align:center">Dang Ky Thanh Vien</td></tr>
        <tr>
            <td>Ten Khach Hang: </td>
            <td><input type="text" name="tenkh" id=""></td>
        </tr>
        <tr>
            <td>Mat Khau: </td>
            <td><input type="password" name="matkhaukh" id=""></td>
        </tr>
        <tr>
            <td>So Dien Thoai:</td>
            <td><input type="text" name="dienthoaikh" id=""></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="emailkh" id=""></td>
        </tr>
        <tr>
            <td>Dia Chi: </td>
            <td><input type="text" name="diachikh" id=""></td>
        </tr>

        <tr>
        <td colspan = "2" align = "center">
        <input type="submit" name = "dangkykh" value="Dang Ky">
        </td>
        </tr>
       
    </table>
</form>