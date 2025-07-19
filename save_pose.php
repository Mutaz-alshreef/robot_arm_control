<?php
include 'db.php';
$data = json_decode(file_get_contents("php://input"), true);
$motors = $data['motors'];

$stmt = $conn->prepare("INSERT INTO poses (motor1, motor2, motor3, motor4, motor5, motor6) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("iiiiii", ...$motors);
$stmt->execute();
$conn->close();
?>