<?php
// import connect
require_once('../connect.php');
// start session
session_start();

// check if not login
if (!isset($_SESSION['username'])) {
	// will be redirect to login page
	header("location: ../login");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="store.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="title" placeholder="Write title"><br><br>
		<textarea name="body" placeholder="Write article"></textarea><br><br>
		<input type="file" name="img_content"><br><br>
		<input type="submit" name="add" value="Post">
	</form>
</body>
</html>