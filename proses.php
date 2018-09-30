<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1> Form Biodata</h1>
<form action="#" method="POST" enctype="multipart/form-data">
	<table>
		<tr> 
			<td>Hobby</td>
			<td> : </td>
			<td><input type="checkbox" name="hobby[]" value="Menonton Bioskop">Menonton Bioskop
				<input type="checkbox" name="hobby[]" value="Memasak">Memasak<br/>
				<input type="checkbox" name="hobby[]" value="Menyanyi">Menyanyi
				<input type="checkbox" name="hobby[]" value="Menjahit">Menjahit<br/>
				<input type="checkbox" name="hobby[]" value="Ngegame">Ngegame<br/>
			</td>
		</tr>
		<tr>
			<td> Genre Film </td>
			<td> : </td>
			<td><input type="checkbox" name="genrefilm[]" value="Horror">Horror
				<input type="checkbox" name="genrefilm[]" value="Triller">Triller<br/>
				<input type="checkbox" name="genrefilm[]" value="Animasi">Animasi
				<input type="checkbox" name="genrefilm[]" value="Anime">Anime<br/>
				<input type="checkbox" name="genrefilm[]" value="Action">Action<br/>
			</td>
		</tr>
		<tr> 
			<td> Tujuan Travelling</td>
			<td> : </td>
			<td><input type="checkbox" name="tujuantravelling[]" value="Bali">Bali
				<input type="checkbox" name="tujuantravelling[]" value="Raja Ampat">Raja Ampat<br/>
				<input type="checkbox" name="tujuantravelling[]" value="Pulau Derawan">Pulau dermawan
				<input type="checkbox" name="tujuantravelling[]" value="Bangka Balitung">Bangka Belitung<br/>
				<input type="checkbox" name="tujuantravelling[]" value="Labuan Bajo">Labuan Bajo<br/>
				<input type="submit" name="submit" value="Submit">
			</td>
		</tr>
	</table>
</form>
<hr/>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
	$hobby = $_POST['hobby'];
	foreach ($hobby as $nilaihobby) {
		echo "Hobby : ".$nilaihobby."<br>";
		$genrefilm = $_POST['genrefilm'];
	}
	$genrefilm = $_POST['genrefilm'];
	foreach ($genrefilm as $nilaigenrefilm) {
		echo "Genre Film : ".$nilaigenrefilm."<br>";
	}
	$tujuantravelling = $_POST['tujuantravelling'];
	foreach ($tujuantravelling as $nilaitujuantravelling) {
		echo "Genre Film : ".$nilaitujuantravelling."<br>";
	}
}
else{
	echo "Pilih Data!!!";
}
?>
