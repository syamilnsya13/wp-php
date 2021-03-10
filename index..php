<?php
require "cobaan.php";
$sql = "SELECT * FROM table_cobaan";
$execute = mysqli_query($cobaan, $sql) //$cobaan berasal dari cobaan.php 
$result = mysqli_query ($execute);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Read PHP</table>
</head>
<body>
	<table border="1" width="50%">
		<thead>
			<th>id</th>
			<th>nama</th>
			<th>kelas</th>
			<th>Aksi</th>
		</thead>
		<?php while ($result = mysql_fetch_assoc($execute)) {?>
			# code...
		
		<tr>
			<td><?= $result['id']?></td>
			<td><?= $result['nama']?></td>
			<td><?= $result['kelas']?></td>
			<td>
				<a href="#">Edit</a>

				<a href="#">Hapus</a>
				</td>
		</tr>
		<?php }?>
	</table>

</body>
</html>