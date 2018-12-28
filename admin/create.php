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