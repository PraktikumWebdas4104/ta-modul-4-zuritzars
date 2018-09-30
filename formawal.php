<!DOCTYPE html>
<html>
<head>
	<title>FORM LOGIN</title>
</head>
<body>
<form action="#" method="POST">
	<table border="0">
		<tr>
			<td> Nama Pengguna </td>
			<td> : </td>
			<td><input type="text" name="namapengguna"></td>
		</tr>
		<tr>
			<td> Kata Sandi</td>
			<td> : </td>
			<td><input type="password" name="katasandi"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="masuk" value="Masuk"></td>
		</tr>
	</table>
</form>
</body>
</html>
	<?php
if (isset($_POST['masuk'])){
	$namapengguna = $_POST['namapengguna'];
	$katasandi = $_POST['katasandi'];

	if ($namapengguna=="zuritza"&&$katasandi=="4056"){
		echo "Berhasil Masuk! ". "klik"."<a href='proses.php' target='_blank'> lanjutkan</a>"." untuk halaman berikutnya! ";
	}
else {
      echo "Gagal Masuk"; 
  }
}
?>
