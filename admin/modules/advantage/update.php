<?php
include "../../connect.php";

$id = $_POST['id'];
$title = $_POST['title'];

if ($connection) {
   mysqli_query($connection, "UPDATE `advantage` SET `title` = '$title'  WHERE `advantage`.`id` = '$id';");
}

mysqli_close($connection);
echo '<script>location.replace("/admin/pages/main/#advantage");</script>';
// header('Location: http://');
exit;
