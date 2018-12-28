<?php
require_once('../connect.php');
// Get input value from url parameter
// Ex localhost/edit.php?id=2
// It will get value 2
$id = $_GET['id'];

// Query to delete a row or a data from table content
$query = "delete from content where id='$id'";
// Execution
$eksekusi = mysqli_query($conn, $query);
// Get image name
$img = mysqli_fetch_array($eksekusi);
$deletePict = unlink('../images/'.$img['image']); // delete image file

// If success delete
if ($eksekusi && $deletePict) {
	// Redirect to list page
	header("location: list.php");
}