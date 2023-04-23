<?php
include "../../connect.php";

$id = $_POST['id'];
$name = $_POST['name'];
$feedback = trim($_POST['feedback']);
$date = $_POST['date'];
// $estimation = $_POST['estimation'];
$town = $_POST['town'];

if ($connection) {
	mysqli_query($connection, "UPDATE `feedback` SET `name` = '$name', `feedback` = '$feedback', `date` = '$date', `town` = '$town', `moder` = '1'  WHERE `feedback`.`id` = '$id';");
}

mysqli_close($connection);
echo '<script>location.replace("/admin/pages/main/#feedback");</script>';
// header('Location: http://admindjalgan.ru/admin/');
exit;
