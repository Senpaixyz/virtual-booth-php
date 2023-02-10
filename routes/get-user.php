<?php 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  require_once '../auth-middleware.php';

  require_once 'database.php';

  $userEmailExists = get_record_by_email("users",$email)[0];

  echo json_encode([
    'status'    => 'success',
    'message'   => 'User Data',
    'info'      => $userEmailExists
  ]);


  update_record(
      "users",
      $email,
      ["first_logged" => 0],
  );


}

?>