<?php 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  require_once '../auth-middleware.php';
  require_once "config.php";
  require_once 'database.php';

  $credentials = [
      'host'      => "localhost",
      'user'      => "bernard",
      'password'  => "n#janb85zxG0",
      'db'        => "virtual-booth"
  ];


  $userEmailExists = get_record_by_email("users",$credentials,$email)[0];

  echo json_encode([
    'status'    => 'success',
    'message'   => 'User Data',
    'info'      => $userEmailExists
  ]);


  update_record(
      "users",
      $credentials,
      $email,
      ["first_logged" => 0],
  );


}

?>