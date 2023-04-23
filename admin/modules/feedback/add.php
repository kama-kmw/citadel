<?php

include "../../connect.php";

$name = $_POST['name'];
$town = $_POST['town'];
// $estimation = $_POST['estimation'];
$feedback = $_POST['feedback'];
$date = $_POST['date'];
$moder = $_POST['moder'];

$message = 'Вам пришел отзыв с сайта от пользователя - '.$name;

if($connection) {
    mysqli_query($connection, "INSERT INTO `feedback` (`id`, `name`, `town`,  `feedback`, `date`, `moder`) VALUES (NULL, '$name', '$town', '$feedback', '$date', '$moder');"); 
   //  mail('surha_dag@mail.ru', 'Отзыв с сайта Hotel-Citadel.ru', $message);
   //  mail('art.hotel.essentuki@mail.ru', 'Отзыв с сайта Hotel-Citadel.ru.ru', $message);
}


mysqli_close($connection);
// echo '<script>location.replace("/admin/#about");</script>';
// header('Location: ../../../admin/#galery');
exit;

?>