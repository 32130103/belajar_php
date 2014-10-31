<?php
	$r404 = "Hello World\n";
	echo $r404;
	//1. konek ke database
		$hostname = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "phpdb";
		$koneksi = "mysqli_connect($hostname, $dbuser, $dbpass, $dbname)";
		
		if(mysqli_connect_errno()){
			die("Koneksi Gagal: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
		} else {
		   echo "Koneksi Berhasil";
		 }
		
	 //2. buat query sql
		$sql = "SELECT * FROM mahasiswa";
		$hasil  = mysqli_query($koneksi, $sql);
	
	 //3. 
	?>
	
<!DOCTYPE html>
<html>
<head>
	<title>DB select</title>
</head>
<body>

</body>
</html>