<?php
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='dbsekolah';

	$con= new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	if ($con->connect_error){
		die('Server Tidak Terhubung!'.$con->connect_error);
	}
?>