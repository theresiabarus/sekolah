<?php
include 'koneksi.php';
$id = $_POST['id'];
$namalengkap = $_POST['namalengkap'];
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

if($foto != ""){

    $ekstensi = explode('.', $foto);
    $ekstensi = strtolower(end($ekstensi));
    $fotoL = $_FILES['foto']['tmp_name'];
    $acak = rand(1,999);
    $fotobaru = $acak.$foto;
move_uploaded_file($fotoL,$folder.$fotobaru);
$query = "UPDATE siswa SET namalengkap='$namalengkap',tanggallahir='$tanggallahir',warganegara='$warganegara',
alamat='$alamat',email='$email',nohp='$nohp',asalsmp='$asalsmp',namaayah='$namaayah',namaibu='$namaibu'
,penghasilan='$penghasilan',foto='$fotobaru' where id='$id'";
mysqli_query($koneksi,$query);

}else{
    
$query = "UPDATE siswa SET namalengkap='$namalengkap',tanggallahir='$tanggallahir',warganegara='$warganegara',
alamat='$alamat',email='$email',nohp='$nohp',asalsmp='$asalsmp',namaayah='$namaayah',namaibu='$namaibu'
,penghasilan='$penghasilan'  where id='$id'";
mysqli_query($koneksi,$query);
}




if(mysqli_affected_rows($koneksi)>0){

    echo"
    <script>
    alert('data sudah berhasil di edit');
    document.location.href='tambah.php';
    </script>";
}else
    echo"
<script>
alert('data gagal di edit');
document.location.href='tambah.php';
</script>";

?>


