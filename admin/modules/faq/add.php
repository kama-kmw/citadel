<?php

include '../../connect.php';

$question = $_POST['question'];
$answer = trim($_POST['answer']);

if ($connection) {
	mysqli_query($connection, "INSERT INTO `faq` (`id`, `question`, `answer`) VALUES (NULL, '$question', '$answer');");
}

mysqli_close($connection);
echo '<script>location.replace("/admin/pages/main/#faq");</script>';
// header('Location: http://admindjalgan.ru/admin/');
exit;
