<?php
header('Content-Type: application/json');
require 'includes/db_connect.php'; // Your PDO connection setup

$stmt = $pdo->query("SELECT name, image, category FROM courses");
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
