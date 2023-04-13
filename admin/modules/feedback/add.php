<?php

include '../../connect.php';

$name = $_POST['name'];
$feedback = trim($_POST['feedback']);
$link = $_POST['link'];
$network = $_POST['network'];

if ($connection) {
	mysqli_query($connection, "INSERT INTO `feedback` (`id`, `name`, `feedback`, `link`, `network`) VALUES (NULL, '$name', '$feedback', '$link', '$network');");
}

mysqli_close($connection);
echo '<script>location.replace("/admin/pages/main/#feedback");</script>';
// header('Location: http://admindjalgan.ru/admin/');
exit;
