<?php

include '../../connect.php';

$title = $_POST['title'];
$description = $_POST['description'];

if($connection) {
	mysqli_query($connection, "UPDATE `banner` SET `title` = '$title', `description` = '$description'  WHERE `banner`.`id` = '1';");
}

mysqli_close($connection);
echo '<script>location.replace("/admin/pages/main/");</script>';
// header('Location: http://admindjalgan.ru/admin/');
exit;
