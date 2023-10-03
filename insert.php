<?php
include('./conn.php');
extract($_POST);
$sql = "INSERT INTO employee (firstName, middleName, lastName, address, email, department, type)
        VALUES (?, ?, ?, ?, ? ,? ,?)";

$stmt = $conn->prepare($sql);
if ($stmt->execute([$firstName, $middleName, $lastName, $address, $email, $department, $type])) {
    echo json_encode(["status" => 200]);
} else {
    echo json_encode(["status" => 400]);
}
