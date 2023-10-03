<?php
include('./cors.php');
try {
    $conn = new PDO("mysql:host=localhost;dbname=exam", "root", "");
} catch (PDOException $e) {
    var_dump($e);
}
