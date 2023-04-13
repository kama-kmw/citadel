<?php

include '../../connect.php';

$count = $_POST['count'];
$icon = $_POST['icon'];
$description = $_POST['description'];

if($connection) {
   mysqli_query($connection, "INSERT INTO `grid` (`id`, `count`, `icon`,`description`) VALUES (NULL, '$count', '$icon', '$description');"); 
}

mysqli_close($connection);
echo '<script>location.replace("/admin/pages/main/#grid");</script>';
// header('Location: http://admindjalgan.ru/admin/');
exit;
