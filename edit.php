<?php
	include("koneksi.php");
	if(!isset($_GET['id_user'])){
	    header("Location:tampil.php?");
	}
	$id=$_GET['id_user'];
	$sql= "SELECT * FROM tb_user INNER JOIN tb_bahan ON tb_user.id_bahan = tb_bahan.id_bahan WHERE tb_user.id_user='$id'";
	$query = mysqli_query($koneksi,$sql);
	$row = mysqli_fetch_assoc($query);
	
	if(mysqli_num_rows($query) < 1){
	    die ("Data tidak ditemukan");
	}
	?>
	
	<html>
	    <head>
	</head>
	<body>
	    <h1>Form Edit</h1>
	    <a href="tampil.php"><input type="button" value="Kembali"></a>
	    <form action="proses_edit.php" method="POST">
	                <input type="hidden" name="id_user" value="<?php echo $row['id_user']?>" />
	                <p>
	        <label for="nama_user"> Nama user : </label>
	        <input type="text" name="nama_user" value="<?php echo $row['nama_user']?>" />
	    </p>
	    <p>
	        <label for="jabatan"> jabatan : </label>
	        <input type="text" name="jabatan" value="<?php echo $row['jabatan']?>" />
	    </p>
	    <p>
	    <label for="nama_bahan"> nama bahan: </label>
	        <input type="text" name="nama_bahan" value="<?php echo $row['nama_bahan']?>" />
	    </p>
	    <p>
	        <label for="jenis_bahan"> jenis bahan : </label>
	        <input type="text" name="jenis_bahan" value="<?php echo $row['jenis_bahan']?>"/>
	    </p>
	    <p>
	        <label for="stok"> stok : </label>
	        <input type="number" name="stok" value="<?php echo $row['stok']?>"/>
	    </p>
	    <p>
	        <label for="harga"> harga : </label>
	        <input type="number" name="harga" value="<?php echo $row['harga']?>"/>
	    </p>
	    <p>
	        <label for="kondisi"> kondisi : </label>
	        <input type="radio" name="kondisi" value = "baik" value="<?php echo $row['kondisi']?>"/>baik
            <input type="radio" name="kondisi" value = "rusak" value="<?php echo $row['kondisi']?>"/>rusak
	    </p>
        <p>
	        <label for="tgl_masuk"> tgl masuk : </label>
	        <input type="date" name="tgl_masuk" value="<?php echo $row['tgl_masuk']?>"/>
	    </p>
	    
	<p>
	<input type="submit" value="Edit" name="edit" /> 
	</p>
	</form>
	</body>
	</html>