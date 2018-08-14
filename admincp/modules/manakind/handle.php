<?php
    include('../config.php');
    $id = $_GET['id'];
    $tenloaisp = $_POST['tenloaisp'];
    $sothutu = $_POST['sothutu'];

    if(isset($_POST['themloaisp']))
    {
        $sql = "insert into tbloaisp (ten,thutu) values ('$tenloaisp','$sothutu')";        
        if (mysql_query($sql)) {
            $message =  "New record created successfully";
        } else {
            $message =  "Error: " . $sql . "<br>" . mysql_error();
        }
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('location:../../index.php?quanly=quanlyloaisp&action=add&id=1');
    }
    else if(isset($_POST['sualoaisp']))
    {
        $sql = "update tbloaisp set ten='$tenloaisp', thutu='$sothutu' where id='$id'";
        mysql_query($sql);
        header('location:../../index.php?quanly=quanlyloaisp&action=add&id=1');
    }
    else{
        $sql = "delete from tbloaisp where id = '$id'";
        mysql_query($sql);
        header('location:../../index.php?quanly=quanlyloaisp&action=add&id=1');
    }

    mysql_close($conn);
?>