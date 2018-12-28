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
	<?php
	$id = $_GET['id'];
	$query = "select * from content where id='$id'";
	$eksekusi = mysqli_query($conn, $query);
	$data = mysqli_fetch_array($eksekusi);
	?>
	<form action="edit.php?id=<?=$data['id'];?>" method="POST" enctype="multipart/form-data">
		<input type="text" name="title" value="<?=$data['title'];?>"><br><br>
		<textarea name="body"><?=$data['title'];?></textarea><br><br>
		<!-- <input type="file" name="img_content"><br><br> -->
		<input type="submit" name="edit" value="Update">
	</form>
</body>
<?php
if (isset($_POST['edit'])) {
	// Get data from input
	// mysqli_real_escape_string() for escape petik
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$body = mysqli_real_escape_string($conn, $_POST['body']);

    // Update or edit data from database, query
    $query = "update content set title='$title', body='$body', tanggal=now() where id='$id'";
    $eksekusi = mysqli_query($conn, $query) or die(mysqli_error($conn));

    if ($eksekusi) {
    	// die("Berhasil");
    	// Redirect to list page
    	header("location: list.php");
    }
    else{
    	die("err");
    }
}
?>
</html>