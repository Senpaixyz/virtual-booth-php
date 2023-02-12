<?php 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  require_once '../auth-middleware.php';
  require_once 'database.php';

  $credentials = [
      'host'      => "localhost",
      'user'      => "bernardpaulo",
      'password'  => "GrpEh4QkCggJTDc",
      'db'        => "virtual-booth"
  ];

  // $credentials = [
  //     'host'      => "localhost",
  //     'user'      => "root",
  //     'password'  => "",
  //     'db'        => "virtual-booth"
  // ];

  $records = get_records("users",$credentials,$email);

  echo json_encode([
    'status'    => 'success',
    'message'   => 'Records',
    'records'      => $records
  ]);


}

?>