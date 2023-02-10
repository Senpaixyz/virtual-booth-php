<?php

$HOST = "localhost";
$USER = "root";
$PASSWORD = "";
$DB = "virtual-booth";

function get_records($table) {
    global $HOST ;
    global $USER ;
    global $PASSWORD ;
    global $DB ;


    $conn = mysqli_connect($HOST, $USER,$PASSWORD,$DB);
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function get_record_by_email($table, $email) {
    global $HOST ;
    global $USER ;
    global $PASSWORD ;
    global $DB ;

    $conn = mysqli_connect($HOST, $USER,$PASSWORD,$DB);
    $query = "SELECT * FROM $table WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function create_record($table, $data) {
    global $HOST ;
    global $USER ;
    global $PASSWORD ;
    global $DB ;

    $conn = mysqli_connect($HOST, $USER, $PASSWORD, $DB);
    $fields = array_keys($data);
    $values = array_map(function($value) use ($conn) {
        return mysqli_real_escape_string($conn, $value);
    }, array_values($data));
    $query = "INSERT INTO $table (".implode(',', $fields).") VALUES ('".implode("','", $values)."')";
    return mysqli_query($conn, $query);
}

function update_record($table, $email, $data) {
    global $HOST ;
    global $USER ;
    global $PASSWORD ;
    global $DB ;


    $conn = mysqli_connect($HOST, $USER, $PASSWORD, $DB);
    $sets = [];
    foreach ($data as $field => $value) {
        $sets[] = "$field='".mysqli_real_escape_string($conn, $value)."'";
    }
    $query = "UPDATE $table SET ".implode(',', $sets)." WHERE email='$email'";
    return mysqli_query($conn, $query);
}

function delete_record($table, $id) {
    global $HOST ;
    global $USER ;
    global $PASSWORD ;
    global $DB ;

    
    $conn = mysqli_connect($HOST, $USER, $PASSWORD, $DB);
    $query = "DELETE FROM $table WHERE id='$id'";
    return mysqli_query($conn, $query);
}
?>

