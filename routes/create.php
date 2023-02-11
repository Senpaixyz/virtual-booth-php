<?php
require_once "config.php";
require_once 'database.php';
require_once '../auth.php';

$credentials = [
    'host'      => "localhost",
    'user'      => "bernard",
    'password'  => "n#janb85zxG0",
    'db'        => "virtual-booth"
];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $request_body = file_get_contents('php://input');
    $request_data = json_decode($request_body, true);
    if (isset( $request_data['data'])) {
        $data =  $request_data['data'];

        $dataObject = (object)$data;


        $userEmailExists = get_record_by_email("users",$credentials,$dataObject->email);

        if(!empty($userEmailExists)){

            echo json_encode([
                'status'    => 'failed',
                'message'   => 'Email Already Exists',
            ]);
        }
        else{
            $result = create_record("users",$credentials, $data);



            $payload = [
                "name" => $dataObject->first_name . ' ' . $dataObject->last_name, // first_name and last_name
                "email" => $dataObject->email, // email
                "iat" => time()
            ];
    
            $keyManager = new KeyManager('secret');
            $jwtAuth = new JwtAuth($keyManager);

            
    
            $token = $jwtAuth->encode($payload);


            echo json_encode([
                'status'    => 'success',
                'message'   => 'Data Inserted',
                'token'     => $token
            ]);
        }


    }

}

?>