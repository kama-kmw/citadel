<?php 
include "../../connect.php";

$id = $_POST['id'];
$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];

if($connection) {
   mysqli_query($connection, "UPDATE `price` SET `title` = '$title', `price` = '$price', `description` = '$description'  WHERE `price`.`id` = '$id';"); 
}

mysqli_close($connection);
echo '<script>location.replace("/admin/pages/price/");</script>';
// header('Location: http://admindjalgan.ru/admin/');
exit;
