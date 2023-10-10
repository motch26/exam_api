<?php
include("./conn.php");
$sql = "SELECT id, firstName, lastName, email, address, department, type FROM employee";
$stmt = $conn->prepare($sql);
if ($stmt->execute()) {
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode(["status" => 200, "data" => $data]);
} else {
    echo json_encode(["status" => 400, "data" => []]);
}
