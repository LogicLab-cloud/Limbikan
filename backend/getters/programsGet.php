<?php

//required files
require '../common/connfig.php';

$id = "";
$title = " ";
$description = "";
$image = " ";
$logoUrl = "image";

$sponser = "";
$duration = " ";

$sql = "SELECT * FROM limbikani_events";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();

$res = array();

foreach ($results as $row) {
    $res[] = $row;

$id = $row["id"];
$title = $row["title"];
 $description =$row["description"];
  $image = $row["image"];
   $sponser = $row["sponser"];
    $duration = $row["duration"];
     
$logoUrl = "$title/".$image;
}


echo $title;
//echo json_encode($res);
?>







