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
    
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    $values = array_map(function($value) use ($conn) {
        return mysqli_real_escape_string($conn, $value);
    }, array_values($data));
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

function delete_record($table,$cred, $id) {
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
    $query = "DELETE FROM $table WHERE id='$id'";
    return mysqli_query($conn, $query);
}
?>

