<?php
include "../../connect.php";

$id = $_POST['id'];
$props = $_POST['props'];
$price = $_POST['price'];
$title = $_POST['title'];
$slider = $_POST['slider'];
$description = $_POST['description'];
$photo = '';
$add_slider = '';

// если была произведена отправка формы
if (isset($_FILES['photo'])) {
	// проверяем, можно ли загружать изображение
	$check = can_upload($_FILES['photo']);
	if ($check === true) {
		// загружаем изображение на сервер
		make_upload($_FILES['photo']);
		echo "<strong>Файл успешно загружен!</strong><br>";
	} else {
		// выводим сообщение об ошибке
		echo "<strong>$check</strong>";
	}
}
// если была произведена отправка формы
if (isset($_FILES['add_slider'])) {
	// проверяем, можно ли загружать изображение
	$check = can_upload($_FILES['add_slider']);
	if ($check === true) {
		// загружаем изображение на сервер
		make_upload_slider($_FILES['add_slider']);
		echo "<strong>Файл успешно загружен!</strong><br>";
	} else {
		// выводим сообщение об ошибке
		echo "<strong>$check</strong>";
	}
}
if($add_slider && $slider) $slider = $slider.'|'.$add_slider;
else if ($add_slider) $slider = $add_slider;
else $slider = '';


if ($connection) {
	mysqli_query($connection, "UPDATE `room` SET `title` = '$title', `price` = '$price', `props` = '$props', `description` = '$description', `slider` = '$slider'  WHERE `room`.`id` = '$id';");
}
if ($photo) {
	mysqli_query($connection, "UPDATE `room` SET `photo` = '$photo'  WHERE `room`.`id` = '$id';");
}
// if ($slider) {
// 	mysqli_query($connection, "UPDATE `room` SET `slider` = '$slider'  WHERE `room`.`id` = '$id';");
// }

function can_upload($file)
{
	// если имя пустое, значит файл не выбран
	if ($file['name'] == '')
		return 'Вы не выбрали файл.<br>';
	/* если размер файла 0, значит его не пропустили настройки 
	сервера из-за того, что он слишком большой */
	if ($file['size'] == 0)
		return 'Файл слишком большой.<br>';
	// разбиваем имя файла по точке и получаем массив
	$getMime = explode('.', $file['name']);
	// нас интересует последний элемент массива - расширение
	$mime = strtolower(end($getMime));
	// объявим массив допустимых расширений
	$types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');
	// если расширение не входит в список допустимых - return
	if (!in_array($mime, $types))
		return 'Недопустимый тип файла.<br>';
	return true;
}

function make_upload($file)
{
	// формируем уникальное имя картинки: name и случайное число
	$name = 'r-' . mt_rand(0, 10000) . $file['name'];
	// формируем путь к папке загрузки
	$uploaddir = '../../../img/room/';
	$uploadfile = $uploaddir . basename($name);
	// переносим файл в папку
	move_uploaded_file($file['tmp_name'], $uploadfile);

	$GLOBALS['photo'] = $name;
}
function make_upload_slider($file)
{
	// формируем уникальное имя картинки: name и случайное число
	$name = 'r-' . mt_rand(0, 10000) . $file['name'];
	// формируем путь к папке загрузки
	$uploaddir = '../../../img/slider/';
	$uploadfile = $uploaddir . basename($name);
	// переносим файл в папку
	move_uploaded_file($file['tmp_name'], $uploadfile);

	$GLOBALS['add_slider'] = $name;
}
mysqli_close($connection);
// echo '<script>location.replace("/admin/pages/main/#portfolio");</script>';
// header('Location: http://admindjalgan.ru/admin/');
exit($description);
