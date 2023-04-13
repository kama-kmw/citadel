<?php

include '../../connect.php';

$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];

if($connection) {
   mysqli_query($connection, "INSERT INTO `price` (`id`, `title`, `price`,`description`) VALUES (NULL, '$title', '$price', '$description');"); 
}

mysqli_close($connection);
echo '<script>location.replace("/admin/pages/price/");</script>';
// header('Location: http://admindjalgan.ru/admin/');
exit;
