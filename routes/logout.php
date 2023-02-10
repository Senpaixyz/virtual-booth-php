<?php 


if (isset($_COOKIE['token'])) {
  unset($_COOKIE['token']);
  setcookie('token', '', time() - 3600, '/'); // empty value and old timestamp

  header('Location: /php-virtual-booth/');  
  exit;
}


?>