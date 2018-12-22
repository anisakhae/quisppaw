<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/all.css">
</head>
<body style="background-image: url('assets/img/bg1.jpg');">

	<h1>DATA MAHASISWA</h1>
	<br><br>
	<table class="data-table">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>EMAIL</th>
				<th style="width: 150px;">WEBSITE</th>
				<th>KELAS</th>
				<th style="width: 250px;">ALAMAT</th>
				<th>ACTION</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no 	= 1;
			include 'config.php';
			$query = mysqli_query($db, "SELECT * FROM tugas");
			while ($row = mysqli_fetch_array($query))
			{
				echo '<tr>
				<td><center>'.$no.'</center></td>
				<td>'.$row['nama'].'</td>
				<td>'.$row['email'].'</td>
				<td> <a href="'.$row['website'].'" target="_blank" >'.$row['website'].'</a> </td>
				<td><center>'.$row['kelas'].'</center></td>
				<td>'.$row['alamat'].'</td>
				<td><a href="edit-form.php?id='.$row['id'].'" title="EDIT"><i class="far fa-edit"></i></a> / <a href="hapus.php?id='.$row['id'].'" onclick="return confirm(\'Yakin?\')" " title="HAPUS"</a><i class="fas fa-trash-alt"></i></td>
			</tr>';
			$no++;
		}?>
		<b>
	</tbody>
</table>
<center>

<br> <button class="btn"> <a href="form.html"> input data kembali </a> </button>
	
</center>

</body>
</html>
