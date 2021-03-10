<?php
require "koneksi.php";

if(isset($_POST['Add'])){
	$val_nama = $_POST['input_nama'];
	$val_kelas= $_POST['input_kelas'];

	$sql = "INSERT INTO table_crud (nama,kelas) VALUES ('$val_nama', '$val_kelas')";
	$execute = mysqli_query($koneksi, $sql);

	if($execute){
		header('Location:read.php');
	} else {
		echo "GAGAL CREATE DATA!";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Create PHP</title>
</head>
<body>
	<style type="text/css">
		h3{
			font-family: calibri;

		}
		label{
			color: blue
		}

		body{
			background-color: pink;
			
		}

	</style>
<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
	<h3>Add/Create data</h3>
	<label>Nama</label>
	<input type="text" name="input_nama">

	<br>
	<br>

	<label>Kelas</label>
	<input type="text" name="input_kelas">

	<br>
	<br>
	<input type="submit" name="Add" value="Add">
</form>
</body>
</html>