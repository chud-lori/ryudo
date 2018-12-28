<?php
session_start();
if (isset($_SESSION['username'])) {
	header("location: ../admin");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="login.php" method="POST">
		<label>Username</label><br>
		<input type="text" name="username"><br><br>
		<label>Password</label><br>
		<input type="password" name="password"><br><br>
		<input type="submit" name="login" value="Login">
	</form>
</body>
</html>