<?php

function get_records($table,$cred) {
    $credentials = (object)$cred;



    $conn = mysqli_connect(
        $credentials->host,
        $credentials->user,
        $credentials->password,
        $credentials->db
    );
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_GET['date'])){
        $date = $_GET['date'];
        $query = "SELECT * FROM $table WHERE DATE(created_at) = '$date' ORDER BY created_at DESC";
    }
    else{
        $query = "SELECT * FROM $table ORDER BY created_at DESC";
    }


    $result = mysqli_query($conn, $query);
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    return $data;
    // return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function get_record_by_email($table,$cred, $email) {
    $credentials = (object)$cred;

    $conn = mysqli_connect(
        $credentials->host,
        $credentials->user,
        $credentials->password,
        $credentials->db
    );
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $query = "SELECT * FROM $table WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    return $data;

    // return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function create_record($table,$cred, $data) {
    $credentials = (object)$cred;
   
    $conn = mysqli_connect(
        $credentials->host,
        $credentials->user,
        $credentials->password,
        $credentials->db
    );
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $fields = array_keys($data);
    array_push($fields,'created_at');

    $values = array_map(function($value) use ($conn) {
        return mysqli_real_escape_string($conn, $value);
    }, array_values($data));

    date_default_timezone_set('Asia/Manila');
    array_push($values,date("Y-m-d H:i:s"));


    $query = "INSERT INTO $table (".implode(',', $fields).") VALUES ('".implode("','", $values)."')";
    return mysqli_query($conn, $query);
}

function update_record($table,$cred, $email, $data) {
    $credentials = (object)$cred;

    $conn = mysqli_connect(
        $credentials->host,
        $credentials->user,
        $credentials->password,
        $credentials->db
    );
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sets = [];
    foreach ($data as $field => $value) {
        $sets[] = "$field='".mysqli_real_escape_string($conn, $value)."'";
    }
    $query = "UPDATE $table SET ".implode(',', $sets)." WHERE email='$email'";
    return mysqli_query($conn, $query);
}


?>

