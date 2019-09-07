<?php 
 
	$server = "localhost"; 
	$user = "root"; 
	$pass = "";  
	$dbase = "company";
 
	$koneksi = mysqli_connect($server, $user, $pass, $dbase);
 
	//Mengecek koneksi 
	if(!$koneksi) {
	 die("Koneksi Gagal : ".mysqli_connect_error());
	}
 
	echo "";
 
?>