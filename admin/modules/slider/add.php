<?php

include '../../connect.php';

$title = $_POST['title'];
$btn_text = $_POST['btn-text'];
$description = $_POST['description'];
$photo;

// если была произведена отправка формы
if(isset($_FILES['photo'])) {
   // проверяем, можно ли загружать изображение
	$check = can_upload($_FILES['photo']);
   if($check === true){
      // загружаем изображение на сервер
      make_upload($_FILES['photo']);
      echo "<strong>Файл успешно загружен!</strong><br>";
   } else {
      // выводим сообщение об ошибке
      echo "<strong>$check</strong>";  
   }
}

if($connection) {
   mysqli_query($connection, "INSERT INTO `slider` (`id`, `title`, `btn-text`,`description`, `photo`) VALUES (NULL, '$title', '$btn_text', '$description', '$photo');"); 
}

function can_upload($file){
	// если имя пустое, значит файл не выбран
   if($file['name'] == '')
	return 'Вы не выбрали файл.<br>';
	/* если размер файла 0, значит его не пропустили настройки 
	сервера из-за того, что он слишком большой */
	if($file['size'] == 0)
	return 'Файл слишком большой.<br>';
	// разбиваем имя файла по точке и получаем массив
	$getMime = explode('.', $file['name']);
	// нас интересует последний элемент массива - расширение
	$mime = strtolower(end($getMime));
	// объявим массив допустимых расширений
	$types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');
	// если расширение не входит в список допустимых - return
	if(!in_array($mime, $types)) 
   return 'Недопустимый тип файла.<br>';
	return true;
}
  
function make_upload($file){
	// формируем уникальное имя картинки: name и случайное число
	$name = 'r-' . mt_rand(0, 10000) . $file['name'];
	// формируем путь к папке загрузки
	$uploaddir = '../../../assets/img/slide/';
   $uploadfile = $uploaddir . basename($name);
	// переносим файл в папку
	move_uploaded_file($file['tmp_name'], $uploadfile);

	$GLOBALS['photo'] = $name;
}

mysqli_close($connection);
echo '<script>location.replace("/admin/pages/main/");</script>';
// header('Location: http://admindjalgan.ru/admin/');
exit;
