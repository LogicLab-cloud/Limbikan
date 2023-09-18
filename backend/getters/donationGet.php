<?php

//required files

require '../common/connfig.php';
$sql = "SELECT SUM(amount) as donat FROM donation";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

$res = array();

foreach ($results as $row) {
    $res[] = $row;
}
echo $res[0]['donat'];

//$don = json_encode($res);
//echo $don;
