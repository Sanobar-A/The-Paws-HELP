<?php

$host = "localhost";
$username = "root"; 
$password = ""; 
$database = "project"; 
$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM hospitals";
$result = $conn->query($sql);


$hospitals = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $hospitals[] = $row;
    }
}


$json_hospitals = json_encode($hospitals);


header('Content-Type: application/json');
echo $json_hospitals;


$conn->close();
?>