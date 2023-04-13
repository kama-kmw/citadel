<?php 
include "../../connect.php";

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];

if($connection) {
   mysqli_query($connection, "UPDATE `service_block` SET `title` = '$title', `description` = '$description'  WHERE `service_block`.`id` = '$id';"); 
}

mysqli_close($connection);
echo '<script>location.replace("/admin/pages/main/#service-block");</script>';
// header('Location: http://admindjalgan.ru/admin/');
exit;
