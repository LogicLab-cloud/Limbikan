<?php

//required files
require '../common/conn.php';

$sql = "SELECT * FROM portfolio";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

$res = array();

foreach ($results as $row) {
    $res[] = $row;
}

echo json_encode($res);
?>