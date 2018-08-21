
<?php
    include('modules/config.php');
    session_start();
    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $userpass = $_POST['userpass'];
        $sql = "select * from tbacounts where username = '$username' and userpass = '$userpass' limit 1";
        $run = mysql_query($sql);
        $num = mysql_num_rows($run);
        if($num > 0)
        {
            $_SESSION['login'] = $username;
            echo $username ."-".$userpass;
            header('location:index.php');
        }
        else
        {
            echo "faild";
            header('location:login.php');
        }
    }
?>

<form action="" method = "post">
    <center>
        <table>
            <tr>
                <td colspan = "2">Login</td>
            </tr>

            <tr>
                <td>User name:</td>
                <td><input type="text" name="username" id=""></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="userpass" id=""></td>
            </tr>

            <tr>
                <td colspan = "2">
                    <input type="submit" name = "login" value="Login">
                </td>
            </tr>
        </table>
    </center>
</form>