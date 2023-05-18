<?php
include "../../connect.php";

$id = $_POST['id'];
$props = $_POST['props'];
$price = $_POST['price'];
$title = $_POST['title'];
$description = $_POST['description'];


if ($connection) {
	mysqli_query($connection, "UPDATE `room` SET `title` = '$title', `price` = '$price', `props` = '$props', `description` = '$description'  WHERE `room`.`id` = '$id';");
}

mysqli_close($connection);
// echo '<script>location.replace("/admin/pages/main/#portfolio");</script>';
// header('Location: http://admindjalgan.ru/admin/');
exit($description);
