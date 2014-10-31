<?php
//1. buat koneksi ke database
//1a. siapkan argument koneksi
$host="localhost";
$user="root";
$pass="";
$name="phpdb";

//1b. buat koneksi 
$koneksi=mysqli_connect($host,$user,$pass,$name);
//1c. periksa koneksi apakah berhasil

if(mysqli_connect_errno())
{
	die("koneksi DB gagal: ".mysqli_connect_error());
}
else{
echo "Koneksi DB berhasil";
}

//2.buat query SQL
//2a. siapkan SQL statement nya
$sql= "SELECT * FROM mahasiswa";

//2b. lakukan query SQL
$hasil= mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>DB SELECT</title>
	
</head>
<body>
<?php
//3.Tampilkan hasil query (jika ada)
$baris1=mysqli_fetch_assoc($hasil);
$baris2=mysqli_fetch_assoc($hasil);   /*execute query*/

echo "<br/>";
echo $baris1['nama'];
echo "<br/>";
echo $baris2['nama'];
echo "<br/>";
?>
</body>
</html>
	