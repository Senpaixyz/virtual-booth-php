<?php

require_once 'auth.php';
require_once 'routes/database.php';


$jwtAuth = new JwtAuth();
$redirect = false;


$user = "";
$email = "";


if(isset($_COOKIE['token'])) {
  $token = $_COOKIE['token'];

  $decoded = $jwtAuth->decode($token);
  if ($decoded) {
      $data = (object)json_decode(json_encode($decoded));

      $user = $data->name;
      $email = $data->email;

      global $user;
      global $email;


      // $user = get_record_by_email("users",)


  }
  else{
    $redirect = true;
  }
}
else{
  $redirect = true;
}


if($redirect){
  header('Location: /');  
  exit;
}


?>