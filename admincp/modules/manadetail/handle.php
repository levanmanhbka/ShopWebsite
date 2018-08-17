<?php
    include('../config.php');
    $idsp = $_GET['idsp'];
    $tensp = $_POST['tensp'];
    $giasp = $_POST['giasp'];
    $anhsp = $_FILES['anhsp']['name'];
    $anh_temp = $_FILES['anhsp']['tmp_name'];
    $motasp = $_POST['motasp'];
    $loaisp = $_POST['loaisp'];
    $thutusp = $_POST['thutusp'];

    move_uploaded_file($anh_temp, 'uploads/'.$anhsp);

    if(isset($_POST['themsanpham']))
    {
        $sql = "insert into tbchitietsp (tensp, giasp, anhsp, motasp, idloaisp, thutusp)"
        ."values ('$tensp','$giasp','$anhsp','$motasp','$loaisp', '$thutusp')";        
        if (mysql_query($sql)) {
            $message =  "New record created successfully";
        } else {
            $message =  "Error: " . $sql . "<br>" . mysql_error();
        }
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('location:../../index.php?quanly=quanlychitietsp&action=add&id=1');
    }
    else if(isset($_POST['suasanpham']))
    {
        $sql = "update tbchitietsp set tensp='$tensp', giasp = $giasp, anhsp = $anhsp, thutusp='$thutusp'" 
        . ", motasp = $motasp, loaisp = $loaisp, thutusp = $thutusp, where idsp='$idsp'";
        mysql_query($sql);
        header('location:../../index.php?quanly=quanlychitietsp&action=add&id=1');
    }
    else{
        $sql = "delete from tbchitietsp where idsp = '$idsp'";
        mysql_query($sql);
        header('location:../../index.php?quanly=quanlychitietsp&action=add&id=1');
    }
?>