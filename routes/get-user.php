<?php 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  require_once '../auth-middleware.php';
  require_once "config.php";
  require_once 'database.php';

  $credentials = [
      'host'      => $HOST,
      'user'      => $USER,
      'password'  => $PASSWORD,
      'db'        =>  $DB
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