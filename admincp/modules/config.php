<?php
    $tenmaychu = 'localhost';
    $tentaikhoan = 'root';
    $pass = '';
    $tencsdl = 'web_ban_hang';

    $conn = mysql_connect($tenmaychu, $tentaikhoan, $pass, $tencsdl) 
    or die('Khong ket noi duoc co so du lieu');
    mysql_select_db($tencsdl);
?>