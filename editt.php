<?php 
session_start();
include "koneksi.php";


$id          = $_POST['id'];
$namalengkap = $_POST['namalengkap'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir = $_POST['tanggallahir'];
$jeniskelamin = $_POST['jeniskelamin'];
$warganegara = $_POST['warganegara'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$asalsmp = $_POST['asalsmp'];
$namaayah = $_POST['namaayah'];
$namaibu = $_POST['namaibu'];
$penghasilan = $_POST['penghasilan'];
$agama = $_POST['agama'];

$folder = "foto/";
$foto = $_FILES['foto']['name'];
$ekstensi_file = ['png','jpeg','jpg'];
$ekstensi = explode('.',$foto);
$ekstensi = strtolower(end($ekstensi));

if($foto !=""){
    $ekstensi = explode('.',$foto);
    $ekstensi = strtolower(end($ekstensi));
     $fotoL   = $_FILES['foto']['name'];
      $acak   = rand(1,999);
      $fotobaru = $acak.$foto;


move_uploaded_file($fotoL,$folder.$fotobaru);


$query = "UPDATE siswa set namalengkap='$namalengkap',tempatlahir='$tempatlahir',tanggallahir='$tanggallahir',
jeniskelamin='$jeniskelamin',warganegara='$warganegara',alamat='$alamat',email='$email',nohp='$nohp',asalsmp='$asalsmp',
namaayah='$namaayah',namaibu='$namaibu',penghasilan='$penghasilan'agama='$agama',foto='$fotobaru',where id='$id'";
mysqli_query($koneksi,$query);
}else{

    $query = "UPDATE siswa set namalengkap='$namalengkap',tempatlahir='$tempatlahir',tanggallahir='$tanggallahir',
    jeniskelamin='$jeniskelamin',warganegara='$warganegara',alamat='$alamat',email='$email',nohp='$nohp',asalsmp='$asalsmp',
    namaayah='$namaayah',namaibu='$namaibu',penghasilan='$penghasilan'agama='$agama' ,where id='$id'";
    mysqli_query($koneksi,$query);
}



if(mysqli_affected_rows($koneksi)>0){
    
   echo"
   <script>
   alert('data Sudah Berhasil!');
   document.location.href='tambah.php';
   </script>";
}else{
    echo"
   <script>
   alert('data gagal di edit !');
   document.location.href='tambah.php';
   </script>";
}
?>