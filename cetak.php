
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<body>
   
<h5 class="text-center mt-4 text-warning">LAPORAN PPDB SMK MANDIRI</h5>

<table class="table table-bordered border-primary ">
<div class="mt-4"></div>
<thead>
    <tbody>
        <tr>
            <th>NO</th>
            <th>Nama lengkap</th>
            <th>Tangga llahir</th>
            <th>warganegara</th>
            <th>alamat</th>
            <th>email</th>
            <th>nohp</th>
            <th>asalsmp</th>
            <th>Nama Ayah</th>
            <th>Nama ibu</th>
            <th>Penghasilan</th>
            <th>Foto</th>
            <th>Aksi</th>

        </tr>
        <tr>
          <?php
 
 include "koneksi.php";

 $no = 1;
 $data = mysqli_query($koneksi,"SELECT * FROM siswa");
 while($d = mysqli_fetch_array($data)){

 

?>
<tr>

<td><?= $no++; ?></td>
<td><?= $d['namalengkap'];?></td>
<td><?= $d['tanggallahir'];?></td>
<td><?= $d['warganegara'];?></td>
<td><?= $d['alamat'];?></td>
<td><?= $d['email'];?></td>
<td><?= $d['nohp'];?></td>
<td><?= $d['asalsmp'];?></td>
<td><?= $d['namaayah'];?></td>
<td><?= $d['namaibu'];?></td>
<td><?= $d['penghasilan'];?></td>
<td><img src="foto/<?= $d['foto']; ?>" width="100px" height="100px"></td>


<td>
    <a class="btn btn-outline-success" href="fromedit.php?id=<?php echo $d['id'];?>">Edit</a>

    <div class="mt-4">
    <a class="btn btn-outline-info" href="fromcetak.php?id=<?php echo $d['id'];?>">Cetak</a>
    </div>
<div class="mt-4">
<button type="submit" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#Hapusdata<?php echo $d['id'];?>">
 Hapus
</button>
</div>

 <script>

    window.print();
 </script>
</td>

<!-- awal modal hapus -->





<!-- Modal -->
<div class="modal fade" id="Hapusdata<?php echo $d['id'];?>" tabindex="-1" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Hapus Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="hapus.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $d['id'];?>">

            <p>Apakah Anda ingin Menghapus Pesan ini??</p>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Hapus</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    
        
        </form>
      </div>
    </div>
  </div>
</div>


<!-- akhir modal hapus -->
</tr>
        </tr>
        

        
<?php

}
?>


    </tbody>
</thead>
</table>
<div class="text-center">
<h5>Hari/tanggal :</h5>
<p></p>
<p></p>
<p></p>


<h5>(-------------)</h5>
</div>


<h5>Panitia : THERESIA EVALINA BARUS</h5>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>