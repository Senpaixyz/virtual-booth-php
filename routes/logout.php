<?php 
require_once '../operation.php';

if (isset($_COOKIE['token'])) {
  unset($_COOKIE['token']);
  setcookie('token', '', time() - 3600, '/'); // empty value and old timestamp
}

// header('Location: '.getParentUrl(1));   // get the parent + parent folder;
exit;

?>