<?php 
	if(isset($_POST["txNIM"])){
	include_once("dbkoneksi2.php");

	$nim = $_POST["txNIM"];
	$nama = $_POST["txNAMA"];
	$talag = $_POST["txTALAG"];
	$jk = $_POST["txJK"];
	$jur = $_POST["txJUR"];
	$pass = $_POST["txPASS"];



	$sqlINSERT = "INSERT INTO mhs(NIM, NAMA, JURUSAN, JK, TGLLAHIR, PASSCODE) VALUES
	('".$nim."','".$nama."','".$jur."','".$jk."','".$talag."','".$pass."');
	";
	$hsl = mysqli_query($cnn, $sqlINSERT);

	//echo "SQL: ". $sqlINSERT . "<br>"; //privasi jika ditampilkan

	if($hsl){
		echo "Insert Data Sukese<br>";
	}else{
		echo "Insert Data Gagal<br>";
	}
	mysqli_close($cnn);
}