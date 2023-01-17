<?php
date_default_timezone_set('Asia/Jayapura');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="content">
		<div class="menu">
			<a href="index.php">Home</a>
			<a href="index.php?page=about">About</a>
			<a href="index.php?page=galeri">Galeri</a>
			<a href="index.php?page=kontak">Kontak</a>
		</div>
		<!-- start konten -->
		<?php
		$dir = "content";
		$page = @$_GET['page'];

		if (empty($page)) {
			include 'content/home.php';
		} else {
			include "content/$page.php";
		}
		?>
		<!-- end konten -->
	</div>
</body>

</html>