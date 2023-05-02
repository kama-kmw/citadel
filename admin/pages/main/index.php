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
	<meta name=”robots” content=”noindex, nofollow”>

	<link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  	<link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  	<link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/flaticon.css" type="text/css">

	<link rel="stylesheet" href="/admin/css/standart.css">
	<link rel="stylesheet" href="/admin/css/admin.css">
	<link rel="stylesheet" href="/admin/css/popup.css">
	<link rel="stylesheet" href="/admin/css/tag.css">


	<title>Административная панель Hotel-Citadel</title>

	<!-- <script src="/js/jquery-3.3.1.min.js"></script> -->
</head>

<body>

<main class="admin-main">
	<?php 
	$nav_active = 'Главная';
	include '../../modules/nav/nav.php'; 
	?>
	<section class="admin-content">
		<h1 class="h1 m0">Главная страница</h1>
		<?php
		include '../../modules/slider/admin_section.php';
		include '../../modules/service/admin_section.php';
		include '../../modules/feedback/admin_section.php';
		include '../../modules/attraction/admin_section.php';


		// include '../../modules/service-block/admin_section.php';
		// include '../../modules/about/admin_section.php';
		// include '../../modules/grid/admin_section.php';
		// include '../../modules/advantage/admin_section.php';
		
		// include '../../modules/specialization/admin_section.php';
		
		// include '../../modules/doctor/admin_section.php';
		// include '../../modules/galery/admin_section.php';
		// include '../../modules/faq/admin_section.php';
		?>
	</section>
</main>

<script src="/admin/js/close_popup.js"></script>

</body>
</html>