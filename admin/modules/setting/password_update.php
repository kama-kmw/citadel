 
<?php
include "../../connect.php";

$password_current = md5($_POST["password_current"]);
$password_new = $_POST["password_new"];
$password_new_2 = $_POST["password_new_2"];

$server_password;
if($connection) {
  $result_login = mysqli_query($connection, 'SELECT * FROM `login`');
  $r1_login = mysqli_fetch_assoc($result_login);
  $server_password = $r1_login["password"];
}
if($password_current == $server_password && $password_new == $password_new_2) {
  $password_new = md5($password_new);
  mysqli_query($connection, "UPDATE `login` SET `password` = '$password_new' WHERE `login`.`id` = '1';");
}

echo '<script>location.replace("/admin/pages/setting/#password");</script>';
// header('Location: ../../../admin/');
exit;

?>