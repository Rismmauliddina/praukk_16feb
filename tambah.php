<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from tambah</title>
</head>
<center>
<body>
    <h1>From Tambah</h1>
    <form action="proses_tambah.php" method="POST"><form>
        <fieldset>
            <p>
                <label for="nama_user">Nama :</label>
                <input type="text" name="nama_user"/>
            </p>
            <p>
                <label for="jabatan">Jabatan : </label>
                <input type="text" name="jabatan"/>
            </p>
            <p>
                <label for="nama_bahan">Nama Bahan : </label>
                <input type="text" name="nama_bahan"/>
            </p>
            <p>
                <label for="jenis_bahan">Jenis Bahan : </label>
                <input type="text" name="jenis_bahan"/>
            </p>
            <p>
                <label for="stok">Stok : </label>
                <input type="number" name="stok"/>
            </p>
            <p>
                <label for="harga">harga : </label>
                <input type="number" name="harga"/>
            </p>
            <p>
                <label for="kondisi">Kondisi : </label>
                <input type="radio" name="kondisi"value="baik"/>Baik</label>
                <input type="radio" name="kondisi"value="rusak"/>Rusak</label>
            </p>
            <p>
                <label for="tgl_masuk">Tanggal Masuk : </label>
                <input type="date" name="tgl_masuk"/>
            </p>
            <p> 
                <input type="submit" value="Tambah" name="tambah" />
            </p>
        </fieldset>
</form>
</center>
        </body>
</html>