<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h3>Tambah Data Mhasiswa</h3>
	<form action="dbinsertdatabase.php" method="POST">
		NIM
		<div>
			<input type="text" name="txNIM">
		</div>
		NAMA
		<div>
			<input type="text" name="txNAMA">
		</div>
		JENIS KELAMIN
		<div>
			<select name="txJK">
				<option value="L">Laki-Laki</option>
				<option value="P">Perempuan</option>
			</select>
		</div>
		TGL Lahir
		<div>
			<input type="date" name="txTALAG">
		</div>
		JURUSAN 
		<div>
			<select name="txJUR">
				<option value="MTI">MTI</option>
				<option value="KAB">KAB</option>
			</select>
		</div>
		PASSCODE
		<div>
			<input type="password" name="txPASS">
		</div>

		<div>
			<button type="submit">Simpan Data</button>
		</div>

		
	</form>
</body>
</html>