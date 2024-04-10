<?php
include 'koneksi.php';



$namalengap = $_POST['namalengkap'];
$tanggallahir = $_POST['tanggallahir'];
$warganegara = $_POST['warganegara'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$asalsmp = $_POST['asalsmp'];
$namaayah = $_POST['namaayah'];
$namaibu = $_POST['namaibu'];
$penghasilan = $_POST['penghasilan'];

$folder= "foto/";
$foto = $_FILES['foto']['name'];
$ekstensi_file = ['png','jpg','jpeg'];
$ekstensi = explode('.',$foto);
$ekstensi = strtolower(end($ekstensi));


move_uploaded_file($_FILES['foto']['tmp_name'],$folder.$foto);

$query = "INSERT INTO  siswa VALUES('','$namalengkap','$tanggallahir','$warganegara',
'$alamat','$email','$nohp','$asalsmp','$namaayah','$namaibu','$penghasilan','$foto')";




mysqli_query($koneksi,$query);


if(mysqli_affected_rows($koneksi)>0){

    echo"
    <script>
    alert('data sudah berhasil');
    document.location.href='index.php';
    </script>";
}else
    echo"
<script>
alert('data gagal');
document.location.href='index.php';
</script>";

?>


