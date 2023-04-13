<?php

$server_name;
$server_password;
if($connection) {
  $result_login = mysqli_query($connection, 'SELECT * FROM `login`');
  $r1_login = mysqli_fetch_assoc($result_login);
  $server_name = $r1_login["login"];
  $server_password = $r1_login["password"];
}

?>