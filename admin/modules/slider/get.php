<?php 

$result_banner = mysqli_query($connection, 'SELECT * FROM `banner`');
$banner = mysqli_fetch_assoc($result_banner);

?>