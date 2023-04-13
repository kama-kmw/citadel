<?php
include "../../connect.php";

$id = $_POST['id'];

if($connection) mysqli_query($connection, "DELETE FROM `portfolio` WHERE id = '$id'");
mysqli_close($connection);
exit('Слово с id - '. $id . ' удалено');
