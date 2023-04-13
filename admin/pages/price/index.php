<?php
session_start();
if (!$_SESSION['auth']) {
   echo '<script>location.replace("/admin/");</script>';
   exit();
}
include "../../connect.php";
if (!$connection) {
   echo '<h1 class="h1 m0">Не удалось соединиться с сервером</h1>';
   exit();
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  	<link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  	<link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

	<link rel="stylesheet" href="/admin/css/standart.css">
	<link rel="stylesheet" href="/admin/css/admin.css">
	<link rel="stylesheet" href="/admin/css/popup.css">
	<link rel="stylesheet" href="/admin/css/tag.css">

	<title>Административная панель Art-Home</title>

	<!-- <script src="/js/jquery-3.3.1.min.js"></script> -->
</head>

<body>

<main class="admin-main">
	<?php 
	$nav_active = 'Цены';
	include '../../modules/nav/nav.php'; 
	?>
	<section class="admin-content">
		<h1 class="h1 m0">Цены</h1>
		<?php
		include '../../modules/price/admin_section.php';
		?>
	</section>
</main>

<script src="/admin/js/close_popup.js"></script>

</body>
</html>