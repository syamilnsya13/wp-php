<?php
require "koneksi.php";
$sql = "SELECT * FROM table_crud";
$execute = mysqli_query($koneksi, $sql);



?>


<!DOCTYPE html>
<html>
<head>
	<title>Read PHP</title>

	
</head>
<body>
	<style type="text/css">
	
	table{
		background-color: lightyellow;
		color: black;
		font-family: calibri;
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}
body{
	background-color: yellow;
}

	</style>
	<button><a href="create.php" >Add Data</a></button>
	<table border="1" width="50%" class="1t">
		<thead>
			<th>id</th>
			<th>nama</th>
			<th>kelas</th>
			<th>tindakan</th>
		</thead>
		<?php while($result = mysqli_fetch_assoc($execute)){?>
		<tr>
			<td><?= $result['id']?></td>
			<td><?= $result['nama']?></td>
			<td><?= $result['kelas']?></td>
			<td><button><a href="update.php? id=<?= $result['id']?>">update</a></button> 

				<button><a href="delete.php? id=<?= $result['id']?>">delete</a></button>
			 </td>
		</tr>
	<?php }?>
	</table>

</body>
</html>