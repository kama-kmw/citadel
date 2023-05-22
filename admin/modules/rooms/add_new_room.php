<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
<?php

include '../../connect.php';

// $photo = $_POST['photo'];
echo '<pre>';
print_r($_FILES['photo']);
echo '</pre>';
$total_files = count($_FILES['photo']['name']);
echo '<br/>';
echo $total_files;
echo '<br/>';
// for($key = 0; $key < count($_FILES['photo']); $key++) {
//    echo $_FILES['photo']['name'];
//    echo '<br/>';
// }
//  echo $_FILES['photo'];
// if(isset($_FILES['photo_stuff'])) {
// 	$total_files = count($_FILES['photo_stuff']['name']);
// 	for($key = 0; $key < $total_files; $key++) {
// 		// проверяем, можно ли загружать изображение
// 		$check = can_upload($_FILES['photo_stuff'], $key);
		
// 		if($check === true){
// 			// загружаем изображение на сервер
// 			make_upload($_FILES['photo_stuff'], $key);
// 			echo "<strong>Файл успешно загружен!</strong><br>";
// 		}
// 		else{
// 			// выводим сообщение об ошибке
// 			echo "<strong>$check</strong>";  
// 		}
// 	}
// }

exit;
?>
</body>