<?php

include '../koneksi.php';

if(isset($_POST['simpan']))
{
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];
   $email = $_POST['email'];
  $sql = "INSERT INTO user (nama, username,password, email)
            VALUES ('$nama', '$username', '$password', '$email')";

            $res = mysqli_query($koneksi, $sql);

            $count = mysqli_affected_rows($koneksi);

            if($count == 1)
            {
              header("Location: ../login/index.php");
            }
            else
            {
              header("Location: tambah.php");
            }


          }
          else
          {
            header("Location: tambah.php");
          }

?>