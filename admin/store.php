<?php
require_once('../connect.php');
// Check if clicked or submited
if (isset($_POST['add'])) {
	// Get data from input
    // mysqli_real_escape_string() for escape petik
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$body = mysqli_real_escape_string($conn, $_POST['body']);
	// Get file/image data
    $fileSize = $_FILES['img_content']['size'];
    $fileTmpName  = $_FILES['img_content']['tmp_name'];
    $fileType = $_FILES['img_content']['type'];
    // Creating file name for image file
    $fileName = time().".jpg";

    // Locating directory to save image
    $currentDir = getcwd();
    $uploadDir = "/../images/";
    $uploadPath = $currentDir . $uploadDir . $fileName;

    // Insert data to database, query
    $query = "insert into content(title, body, image, tanggal) values('$title', '$body', '$fileName', now())";
    $eksekusi = mysqli_query($conn, $query) or die(mysqli_error($conn));
    // Moving or put file to the path(images)
    $didUpload = move_uploaded_file($fileTmpName, $uploadPath) or die($_FILES['img_content']['error']);

    if ($eksekusi && $didUpload) {
    	// die("Berhasil");
    	// Redirect to list page
    	header("location: list.php");
    }
    else{
    	die("err");
    }
}