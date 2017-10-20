<?php

	//memulai session
	session_start();
	
	//memanggil koneksi
	
include "../lib/conn.php";

//variabel user name dengan value dari form login

$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);

//membuat querry memilih data username dan password yang ada di databse

$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
// membuat var dari hasil pemilihan data sebelumnya
$hasil = $conn->query($query);

//menghitung rows yang tersedia pada tabel apakah data tersebut tersedia atau tidak

$hitung = $hasil->num_rows;

// jika data lehih dari - maka

if($hitung) {
	//membuat var untuk menampilkan data yang sudah di pilih sebelumnya
	$cetak = $hasil->fetch_assoc();
	extract($cetak);
	//mengirim id user menggunakan session
	//berfungsi untuk menyimpan id user pada halaman berikutnya
	$_SESSION['$id_user'] =$id_user;
	//membuat level user sebagai tingkatan login pada halaman admin
	$_SESSION['level_user'] =$lv_user;
	echo '<script>windows.alert("Selamat anda berhasil login"); windows.location=("../view/admin.php");</script>';
}
// jika data kurang dari 1 atau 2
else{
	echo '<script>windows.alert("Maaf, username dan password anda salah!"); windows.location=("../view/login.php");</script>';
}


?>