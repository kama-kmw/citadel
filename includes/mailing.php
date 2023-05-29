<?php

$room = $_POST['room'];
$date_in = $_POST['date_in'];
$date_out = $_POST['rodate_outom'];
$fio = $_POST['fio'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
// Сообщение
$message = 'Номер - '.$room.'
Дата въезда - '.$date_in.'
Дата выезда - '.$date_out.'
Имя - '.$fio.'
Телефон - '.$phone.'
Почта - '.$mail;

$user_message = 'Регистрация прошла успешно';

// Отправляем если кнопка нажата
mail('surha_dag@mail.ru', 'Бронирование  на сайте Hotel-citadel', $message);
mail('kvartira89659287777@mail.ru', 'Бронирование  на сайте Hotel-citadel', $message);
mail($mail, 'Бронирование  на сайте Hotel-citadel', $user_message);

?>