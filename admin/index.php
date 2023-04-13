<?php
session_start();
include "connect.php";
include "get_login.php";

$data = $_POST;

if (isset($data['do_login'])) {
	$notify = array();
	if (trim($data['login']) == '') {
		$notify[] = 'Введите логин';
	}
	if (trim($data['password']) == '') {
		$notify[] = 'Введите пароль';
	}
	if (empty($notify)) {
		$login = $data['login'];
		$password = md5($data['password']);
		if ($login != $server_name or $password != $server_password) {
			$notify[] = 'Вы ввели неверный логин или пароль';
		}
		if ($login == $server_name and $password == $server_password) {
			$_SESSION['auth'] = true;
		}
	}
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name=”robots” content=”noindex, nofollow”>

	<link rel="stylesheet" href="/admin/css/standart.css">
	<link rel="stylesheet" href="/admin/css/admin.css">
	<!-- <link rel="stylesheet" href="/admin/css/popup.css"> -->
	<!-- <link rel="stylesheet" href="/admin/css/tag.css"> -->

	<title>Административная панель ARD-Klinik</title>

	<!-- <script src="/js/jquery-3.3.1.min.js"></script> -->
</head>

<body>
	<?php
	if ($_SESSION['auth']) {
		echo '<script>location.replace("/admin/pages/main/");</script>';
	} else {
		include "login.php";
	}
	mysqli_close($connection);
	?>
</body>
</html>