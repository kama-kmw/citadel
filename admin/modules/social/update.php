<?php 
include "../../connect.php";

$phone = $_POST['phone'];
$phone2 = $_POST['phone2'];
$wa = $_POST['wa'];
$insta = $_POST['insta'];
$phoneValide = $_POST['phoneValide'];
$phone2Valide = $_POST['phone2Valide'];
$waValide = $_POST['waValide'];
$mail = $_POST['mail'];

if($connection) {
   mysqli_query($connection, "UPDATE `social` SET `phone` = '$phone', `phone2` = '$phone2', `wa` = '$wa', `insta` = '$insta', `phoneValide` = '$phoneValide', `phone2Valide` = '$phone2Valide', `waValide` = '$waValide', `mail` = '$mail' WHERE `social`.`id` = 1;");
}

mysqli_close($connection);
// echo '<script>location.replace("/admin/pages/setting/");</script>';
// header('Location: http://admindjalgan.ru/admin/');
exit('test');
?>
