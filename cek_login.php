<?php

session_start();
 include "koneksi.php";


$username = $_POST['username'];
$password  = $_POST['password'];

$query = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' and password='$password'");

$row = mysqli_num_rows($query);


if($row ==1){
    $_SESSION['login']=true;
    header('location:tambah.php');
}else{

    echo"
    <script>
    alert('username dan password salah!');
    document.location.href='index.php';
    </script>";
}

?>