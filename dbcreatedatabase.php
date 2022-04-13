<?php 
	include_once("dbkoneksi.php");
	if($cnn){
		$sql = "CREATE DATABASE oka";

		$hsl = mysqli_query($cnn, $sql);
		if($hsl){
			echo "Database oka <strong>sukses</strong> dibuat<br>";
		}else{
			echo "Database oka <strong>gagal</strong>  dibuat<br>";
		}
		mysqli_close($cnn);
	}