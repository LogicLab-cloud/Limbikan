<?php

//required files
require '../common/connfig.php';
require '../common/function.php';

// valiables from about form of admin panel

$title = $_POST['title'];
$description = $_POST['description'];
$duration = $_POST['duration'];
$sponser = $_POST['sponser'];

//url of images

$imageUrl = uploadProgramImages($_FILES['image'], $title);



//prepare a query to insert organisation of profile data
$sql = "INSERT INTO `programs`( title, sponser,description, image) VALUES (:title,:sponser, :description, :image)";

// data to be inserted
$data = [
  'title' => $title,
  'sponser'  => $sponser,
  'description' => $description,
  'image' => $imageUrl

];


$stmt = $pdo->prepare($sql);
$stmt->execute($data);

if ($stmt->rowCount() == 1) {
  echo "data successfully inserted";
} else {
  echo "Error inserting data";
}

header("Location: ../../admin/index.php");
