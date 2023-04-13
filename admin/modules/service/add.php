<?php

include '../../connect.php';

$title = $_POST['title'];
$icon = $_POST['icon'];
$description = $_POST['description'];

if ($connection) {
   mysqli_query($connection, "INSERT INTO `service` (`id`, `title`, `icon`,`description`) VALUES (NULL, '$title', '$icon', '$description');");
}

mysqli_close($connection);
echo '<script>location.replace("/admin/pages/main/#service");</script>';
// header('Location: http://');
exit;
