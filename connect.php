<?php
$servername = "localhost";
$usernamedb = "root";
$passworddb ="root";
$dbname ="ryudo";

$conn = mysqli_connect($servername, $usernamedb, $passworddb, $dbname);
if (!$conn){
	die("connection failed:".mysqli_connect_error());
}
// echo "connected successfully";
?>