<?php
session_start();
include '../koneksi.php';

if(isset($_POST['btnlogin']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, nama FROM user
            WHERE username='$username' AND password='$password'";
    $res = mysqli_query($koneksi, $sql);

    $count = mysqli_affected_rows($koneksi);

    if($count == 1)
    {
        $data_login = mysqli_fetch_assoc($res);

        $_SESSION['id'] = $data_login['id'];

        $_SESSION['nama'] = $data_login['nama'];

        header("Location: http://localhost/corona/corona/index.php");
    }
    else
    {
        header("Location: http://localhost/corona/login/index.php");
    }
}
?>