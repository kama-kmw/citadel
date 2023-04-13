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
	$nav_active = 'Настройки';
	include '../../modules/nav/nav.php'; 
	?>
	<section class="admin-content">
		<h1 class="h1 m0">Настройки</h1>
		<?php
		include '../../modules/social/admin_section.php';
		include '../../modules/setting/admin_section.php';
		?>
	</section>
</main>

<script src="/js/close_popup.js"></script>

</body>
</html>