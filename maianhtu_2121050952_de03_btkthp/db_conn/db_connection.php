<?php
$hostname = "localhost";
$username = "maianhtu";
$password = "nWJRIIbEY-JcBObB";

$dbname = "qldsv";

$conn =  new mysqli($hostname, $username, $password,$dbname);
if ($conn->connect_error) {
    echo 'Kết Nối Thất Bại!' . $conn->connect_error;
}
?>