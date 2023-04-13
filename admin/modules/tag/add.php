<?php

include '../../connect.php';

$name = $_POST['name'];

if ($connection) {
	mysqli_query($connection, "INSERT INTO `tag` (`id`, `name`) VALUES (NULL, '$name');");
}

mysqli_close($connection);
echo '<script>location.replace("/admin/pages/galery/");</script>';
// header('Location: http://admindjalgan.ru/admin/');
exit;
