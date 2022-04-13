<?php 
	include_once("konfigurasi.php");

	$cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME,DBPORT) or die("koneksi ke DBMS Mysql Gagal<br>");
	echo "Koneksi ke DBMS Mysql Sukses";