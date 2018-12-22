<?php  
	//echo $_POST['Nama'];
	//echo "<br />";
	//echo $_POST['E-mail'];
	//echo "<br />";
	// echo $_POST['Website'];
	// echo "<br />";
	// echo $_POST['Kelas'];
	// echo "<br />";
	// echo $_POST['Alamat'];
	// echo "<br />";

?>

<?php  
	include 'config.php';

	$b = $_POST['Nama'];
	$c = $_POST['E-mail'];
	$d = $_POST['Website'];
	$e = $_POST['Kelas'];
	$f = $_POST['Alamat'];

	$d = mysqli_query($db, "INSERT INTO tugas(nama, email, website, kelas, alamat) VALUES('$b','$c', '$d', '$e', '$f');");

	if($d){ 
		echo "<script>alert('Data Berhasil di Simpan');
		window.location='data.php'</script>";
	}?>