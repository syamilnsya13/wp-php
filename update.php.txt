<?php
	
	require "koneksi.php";
	$id = $_GET['id'];
	$sql_read = "SELECT * FROM table_crud WHERE id= '$id'";
	$exe_read = mysqli_query($koneksi, $sql_read);
	$res_read = mysqli_fetch_assoc($exe_read);


	if(isset($_POST['update'])){
		$val_nama = $_POST['input_nama'];
		$val_kelas = $_POST['input_kelas'];

		$sql = "UPDATE table_crud SET nama='$val_nama', kelas= '$val_kelas' WHERE id='$id'";
		$execute = mysqli_query($koneksi, $sql);

		if ($execute){
			header('Location:read.php');
		} else {
			echo "FAILED TO UPDATE THE DATA !";
			
		}

	}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Update PHP</title>
</head>
<body>
	<style type="text/css">
		label{
			font-family: calibri;
			color: red; 
		}
		body{
			background-color: lightgreen;
		}
	</style>
	<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">

		<h3 class=".h3">Update data dengan id=<?=$id?></h3>
		<hr>

		<label>nama</label>
		<input type="text" name="input_nama" value="<?=$res_read['nama']?>">

		<br>
		<br>

		<label>kelas</label>
		<input type="text" name="input_kelas" value="<?=$res_read['kelas']?>">

		<br>
		<br>
		<input type="submit" name="update" value="Update">
	</form>
</body>
</html>