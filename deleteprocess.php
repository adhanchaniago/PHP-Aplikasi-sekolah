<?php
	include 'koneksi.php';
	$nomor_daftar=$_GET['nomor_daftar'];
	
	//Memasukkan variabel ke dalam tabel
	$sql="DELETE FROM daftar WHERE nomor_daftar='$nomor_daftar'";
	$con->query($sql);
	header("location:tabel.php");

?>