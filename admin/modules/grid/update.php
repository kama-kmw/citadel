<?php 
include "../../connect.php";

$id = $_POST['id'];
$count = $_POST['count'];
$description = $_POST['description'];

if($connection) {
   mysqli_query($connection, "UPDATE `grid` SET `count` = '$count', `description` = '$description'  WHERE `grid`.`id` = '$id';"); 
}

mysqli_close($connection);
echo '<script>location.replace("/admin/pages/main/#grid");</script>';
// header('Location: http://admindjalgan.ru/admin/');
exit;
