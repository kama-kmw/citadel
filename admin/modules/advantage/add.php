<?php

include '../../connect.php';

$title = $_POST['title'];
$icon = $_POST['icon'];

if($connection) {
   mysqli_query($connection, "INSERT INTO `advantage` (`id`, `title`, `icon`) VALUES (NULL, '$title', '$icon');"); 
}

mysqli_close($connection);
echo '<script>location.replace("/admin/pages/main/#advantage");</script>';
// header('Location: http://');
exit;
?>
