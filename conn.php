<?php

	//membuat variable yang bernilai atau bervalue sebagai properti yang digunakan untuk menghubungkan file pada database
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "wisata";
	
	// membuat variable koneksi dan menghubungkan properti properti yang sudah dibuat sebelummnya
	$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
?>