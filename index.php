<?php
	//1. konek ke database
		$hostname = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "phpdb";
		$koneksi = mysqli_connect($hostname, $dbuser, $dbpass, $dbname);
		
		if(mysqli_connect_errno()){
			die("Koneksi Gagal: ".mysqli_connect_error());
		} 
		else {
		   echo "Koneksi Berhasil";
		 }
		
	 //2. buat query sql
		$sql = "SELECT * FROM mahasiswa";
		$hasil = mysqli_query($koneksi, $sql);
		 
	?>
	
<!DOCTYPE html>
<html>
<head>
	<title>DB select</title>
</head>
<body>
<table border=1>
	<tr><td> id</td>
		<td> nama </td>
		<td> jurusan </td>
	</tr>
	<?php 
		//3. tampil hasil
		while($baris = mysqli_fetch_assoc($hasil)){
			echo "<tr>";
			echo "<td>" . $baris['id'] . "</td>";
			echo "<td>" . $baris['nama'] . "</td>";
			echo "<td>" . $baris['jurusan'] . "</td>";
			echo "</tr>";
		}
	?>
</table>
	<?
		mysqli_close($koneksi);
	?>

</body>
</html>