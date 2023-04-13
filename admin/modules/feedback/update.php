<?php
include "../../connect.php";

$id = $_POST['id'];
$name = $_POST['name'];
$feedback = trim($_POST['feedback']);
$link = $_POST['link'];
$network = $_POST['network'];

if ($connection) {
	mysqli_query($connection, "UPDATE `feedback` SET `name` = '$name', `feedback` = '$feedback', `link` = '$link', `network` = '$network'  WHERE `feedback`.`id` = '$id';");
}

mysqli_close($connection);
echo '<script>location.replace("/admin/pages/main/#feedback");</script>';
// header('Location: http://admindjalgan.ru/admin/');
exit;
