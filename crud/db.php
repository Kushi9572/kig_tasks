<?php
$severname = "db";
$username = "capp1";
$password = "Kushi@9572";
$dbname = "capp1";

// creating connection

$conn = new mysqli ($severname,$username,$password,$dbname);


//check the connection
if ($conn->connect_error) {
    die("connection faild:" . $conn->connect_error);
}
?>