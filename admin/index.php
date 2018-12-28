<?php
session_start();
if (!isset($_SESSION['username'])) {
	header("location: ../login");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		<li><a href="create.php">Add data</a></li>
		<li><a href="list.php">Show data</a></li>
	</ul>
</body>
</html>