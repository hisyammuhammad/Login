<?php
session_start();
require 'functions.php';

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Halaman Admin</title>
</head>

<body>
	

	<?php
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id='$_SESSION[login]'");
	$data = mysqli_fetch_array($query);
	?>

	<h1>Selamat Datang <?= $_SESSION["username"]; ?></h1>

	<a href="logout.php">Logout</a>

	<h1>Halaman Admin Setelah Login</h1>
</body>

</html>
