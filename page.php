<?php
require_once('connect.php');

$id = $_GET['id'];

$query = "select * from content where id='$id'";
$eksekusi = mysqli_query($conn, $query);
$data = mysqli_fetch_array($eksekusi);
?>

<center><h2><?=$data['title'];?></h2></center>
<span>Created at: <?=$data['tanggal'];?></span>
<img src="images/<?=$data['image'];?>">
<p><?=$data['body'];?></p>