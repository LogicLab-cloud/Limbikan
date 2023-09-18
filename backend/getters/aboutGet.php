<?php

//required files

require '../common/connfig.php';



$sql = "SELECT * FROM orgprofile";


$stmt = $pdo->prepare($sql);



$stmt->execute();
$results = $stmt->fetchAll();

$res = array();

foreach ($results as $row) {
    $res[] = $row;
}

echo json_encode($res);

?>