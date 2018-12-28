<h1>Home</h1>
<?php
require_once('connect.php');

$query = "select * from content";
$eksekusi = mysqli_query($conn, $query);

while ($data = mysqli_fetch_array($eksekusi)) {
	?>
		<h3><?=$data['title']?></h3>
		<span>Ditulis pada: <?=$data['tanggal']?></span>
		<p><?=substr($data['body'], 0, 200). '...';?><a href="page.php?id=<?=$data['id'];?>">Read more</a></p>
<?php
}