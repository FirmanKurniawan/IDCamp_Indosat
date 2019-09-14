<!DOCTYPE html>
<html>
	<head>
		<title>Biodata - Dicoding</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/foto.css">
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<link rel="stylesheet" type="text/css" href="css/biodata.css">
		<link rel="stylesheet" type="text/css" href="css/contact.css">
	</head>
	<body>
		<nav>
			<ul>
				<li><a href="index.php?page=home">Home</a></li>
				<li><a href="index.php?page=biodata">Biodata</a>
				<ul>
					<li><a href="assets/cv/Buku_Panduan.pdf" onClick="return confirm ('Download CV?')">Download CV</a></li>
				</ul>
			</li>
			<li><a href="index.php?page=foto">Foto</a>
		</li>
		<li><a href="#" onClick="return confirm ('Yakin?')">Logout</a></li>
	</ul>
</nav>
<?php
	if(isset($_GET['page'])){
	$page = $_GET['page'];
	switch ($page) {
		case 'home':
			include "home.php";
			break;
		case 'biodata':
			include "biodata.php";
			break;
		case 'foto':
			include "foto.php";
			break;
		default:
			echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
			break;
	}
	}else{
	include "home.php";
}
?>
</body>
</html>