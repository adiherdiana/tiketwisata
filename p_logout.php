<?php
	//memulai session
	session_start();
	
	//meng unset session id_user pada session saat ini (disable)
	unset($_SESSION['id_user']);
	unset($_SESSION['lv_user']);
	
	//menghancurkan session saat ini
	session_destroy();
	
	//mengembalikan pada halaman login.php
	header("location: ../view/login.php");
?>