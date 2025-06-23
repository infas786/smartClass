<?php
session_start();
$username = 'root';
$servername = 'localhost';
$password = '';
$db = 'smartrecord';

$mysqli = new mysqli($servername, $username, $password, $db);
if ($mysqli) {
    echo "";
} else {
    echo "Connection Failed" . mysqli_connect_error();
}

$btn = $_POST['btn'];

if ($btn == 'signinBtn') {
    $userName = $_POST['username'];
    $password = $_POST['password'];

    $sql_user = $mysqli->query("SELECT ID FROM system_user WHERE username = '$userName' AND password = '$password'");
    if ($sql_user->num_rows > 0) {
        $user = $sql_user->Fetch_array();
        $_SESSION['user_id'] = $user['ID'];
        $res['status'] = 'success';
    } else {
        $res['message'] = 'Invalid username and password';
    }
    echo json_encode($res);
}
