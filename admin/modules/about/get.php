<?php 
$result_about = mysqli_query($connection, 'SELECT * FROM `about`');
$r1_about = mysqli_fetch_assoc($result_about);

$photo_about = $r1_about["photo"];
$desc_about = $r1_about["description"];
$title_about = $r1_about["title"];

?>