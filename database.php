<?php
require_once 'config.php';

$hostName = 'localhost';
$userName = 'root';
$password = '';
$database = 'codingstatus';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
