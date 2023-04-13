<?php
include "../../connect.php";

$id = $_POST['id'];
$question = $_POST['question'];
$answer = trim($_POST['answer']);

if ($connection) {
	mysqli_query($connection, "UPDATE `faq` SET `question` = '$question', `answer` = '$answer'  WHERE `faq`.`id` = '$id';");
}

mysqli_close($connection);
echo '<script>location.replace("/admin/pages/main/#faq");</script>';
// header('Location: http://admindjalgan.ru/admin/');
exit;
