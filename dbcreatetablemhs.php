<?php 
	include_once("dbkoneksi2.php");
	$sql = "CREATE TABLE mhs(
			NIM varchar(8) PRIMARY KEY,
			NAMA varchar(30),
		    JURUSAN varchar(30),
			JK varchar(1),
			TGLLAHIR date,
			PASSCODE varchar(10)
		);";

	$hsl = mysqli_query($cnn, $sql);

	if($hsl){
		echo "Pembuatan Table <strong>mhs</strong> sukses<br>";
	}else{
		echo "pembuatan tabel <strong>mhs</strong> Gagal<br>";
	}
	mysqli_close($cnn);