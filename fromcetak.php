
<?php

include "koneksi.php";


$id = $_GET['id'];

$query = mysqli_query($koneksi,"SELECT * FROM siswa WHERE id='$id'");

$d = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container py-4 mt-4">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div clas="card-body bg-light">
                        <div class="text-center-judul">
                          
  <h5 class="text-center mt-3 " >Cetak Data
<table>

        <tr>
     <td>Nama Lengkap</td>
     <input type="hidden" name="id" value="<?= $d['id'];?>">
     <td>:</td>
     <td><input type="text" name="namalengkap"  value="<?php echo $d['namalengkap'];?>"></td>
    

        </tr>
        <tr>
     <td>Tanggallahir</td>
     <td>:</td>
     <td><input type="text" name="tanggallahir" value="<?php echo $d['tanggallahir'];?>"></td>
    

        </tr>
        <tr>
     <td> warganegara</td>
     <td>:</td>
     <td><input type="text" name="warganegara" value="<?php echo $d['warganegara'];?>"></td>
    
         </tr>
         <tr>
     <td> alamat</td>
     <td>:</td>
     <td><input type="text" name="alamat" value="<?php echo $d['alamat'];?>"></td>
    
         </tr>
         <tr>
     <td>E-mail</td>
     <td>:</td>
     <td><input type="text" name="email" value="<?php echo $d['email'];?>"></td>
    
         </tr>
         <tr>
     <td> nohp</td>
     <td>:</td>
     <td><input type="text" name="nohp" value="<?php echo $d['nohp'];?>"></td>
    
         </tr>
         <tr>
     <td> Asal Smp</td>
     <td>:</td>
     <td><input type="text" name="asalsmp" value="<?php echo $d['asalsmp'];?>"></td>
    
         </tr>
         <tr>
     <td>Nama Ayah</td>
     <td>:</td>
     <td><input type="text" name="namaayah" value="<?php echo $d['namaayah'];?>"></td>
    
         </tr>
         <tr>
     <td>Nama ibu</td>
     <td>:</td>
     <td><input type="text" name="namaibu" value="<?php echo $d['namaibu'];?>"></td>
    
         </tr>
         <tr>
     <td> Penghasilan Orang tua</td>
     <td>:</td>
     <td><input type="text" name="penghasilan" value="<?php echo $d['penghasilan'];?>"></td>
    
         </tr>
         <tr>
     <td>foto Siswa</td>
     <td>:</td>
     <td><img src="foto/<?= $d['foto']; ?>" width="100px" height="100px" ></td>
  
    
         </tr>
        
        </div>
  

</table>

<div class="text-center mt-4">
        <p> tanda Tangan :</p>

        <p>(---------------)</p>
        </div>


        
<script>

window.print();
</script>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



</body>
</html>