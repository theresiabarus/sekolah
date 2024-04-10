<?php



include "koneksi.php";


$id = $_POST['id'];


$query = mysqli_query($koneksi,"DELETE FROM siswa WHERE id='$id'");

header('location:tambah.php');
?>