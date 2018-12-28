<?php
// Import file koneksi agar bisa konek ke database dan mysql nya
require_once('../connect.php');
// Memulai session
session_start();

// Kalo udah di klik login
if (isset($_POST['login'])) {

	// Ambil data dari input dari user di form
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Setup untuk ambil data dari database
	$query = "select * from user where username='$username' and password='$password'";
	$eksekusi = mysqli_query($conn, $query);

	// Disini di cek, apakah data nya atau tidak, jika data lebih dari 0 kan berarti ada
	if (mysqli_num_rows($eksekusi) > 0) {
		// Buat session bernama username yang berisi username dari user yang datanya ada di database
		$_SESSION['username'] = $username;
		// Jika data ada, maka halaman langsung di redirect ke admin page di folder admin
		header("location: ../admin");
	}
	// Kalo datanya gada atau login salah username atau password
	else{
		// Dilempar atau di redirect ke halaman login lagi
		header("location: index.php");
	}
}