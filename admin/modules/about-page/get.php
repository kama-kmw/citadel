<?php 
$result_about_main = mysqli_query($connection, 'SELECT * FROM `about_main-page`');
$r1_about_main = mysqli_fetch_assoc($result_about_main);

$photo_about_main = $r1_about_main["photo"];
$desc_about_main = $r1_about_main["description"];

?>