<?php
include "../../connect.php";

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];

if ($connection) {
   mysqli_query($connection, "UPDATE `service` SET `title` = '$title', `description` = '$description'  WHERE `service`.`id` = '$id';");
}

mysqli_close($connection);
echo '<script>location.replace("/admin/pages/main/#service");</script>';
// header('Location: http://admindjalgan.ru/admin/');
exit;
