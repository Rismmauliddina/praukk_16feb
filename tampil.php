<!DOCTYPE html>
<html lang="en">
<head>
          
          <title>From Tampil</title>
<center>
          <h1>from tampil</h1>
</head>
<body>
       <table border="1">
          <tr>
                    <td>no</td>  
                    <td>nama user</td>
                    <td>jabatan</td>
                    <td>nama bahan</td>
                    <td>jenis bahan</td>
                    <td>stok</td>
                    <td>harga</td>
                    <td>kondisi</td>
                    <td>tanggal masuk</td>
</tr>
<?php
include 'koneksi.php';
$query= mysqli_query($koneksi, "SELECT *FROM tb_user INNER JOIN tb_bahan ON tb_user.id_bahan=tb_bahan.id_bahan");

$no=1;
foreach($query as $row):
?>
 <tr>
          <td><?=$row['nama_user'];?></td>
          <td><?=$row['jabatan'];?></td>
          <td><?=$row['nama_bahan'];?></td>
          <td><?=$row['jenis_bahan'];?></td>
          <td><?=$row['stok'];?></td>
          <td><?=$row['harga'];?></td>
          <td><?=$row['kondisi'];?></td>
          <td><?=$row['tgl_masuk'];?></td>
<td><a href ="edit.php?id_user=<?=$row ['id_user'];?>">EDIT </a>||
    <a href ="hapus.php?id_user=<?=$row ['id_user'];?>">HAPUS </a>
</td>
</tr>
<?php endforeach ?>
 <a href="tambah.php"><input type="button" value="Tambah"></a>
</center>
</table>
</body>
</html>