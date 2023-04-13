<?php 
include "../../connect.php";

$tel = $_POST['tel'];
$wa = $_POST['wa'];
$mail = $_POST['mail'];

if($connection) {
   mysqli_query($connection, "UPDATE `social` SET `tel` = '$tel', `wa` = '$wa', `mail` = '$mail' WHERE `social`.`id` = 1;");
}

mysqli_close($connection);
echo '<script>location.replace("/admin/pages/setting/");</script>';
// header('Location: http://admindjalgan.ru/admin/');
exit;
