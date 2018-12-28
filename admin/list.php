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
	$query = "select * from content";
	$eksekusi = mysqli_query($conn, $query);
	?>
	<table border="1">
		<thead>
			<tr>
				<th>Title</th>
				<th>Body</th>
				<th>Created at</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while ($data = mysqli_fetch_array($eksekusi)) {
			?>
				<tr>

					<td><?=$data['title'];?></td>
					<!-- This below, i only show first 8 characters -->
					<td><?=substr($data['body'], 0, 8). '...';?></td>
					<td><?=$data['tanggal'];?></td>
					<td><a href="edit.php?id=<?=$data['id']?>">Edit</a></td>
					<td><a href="delete.php?id=<?=$data['id']?>">Delete</a></td>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</body>
</html>