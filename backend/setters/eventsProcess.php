<?php

require '../common/connfig.php';
require '../common/function.php';

$title = $_POST["title"];
$description = $_POST["description"];
$duration = $_POST["duration"];
$sponser = $_POST["sponser"];


try{

$folderNa = str_replace(' ', '_', $title);
create_folder($folderNa);


$image = uploadProgramImages($_FILES["image"], "$title", "$folderNa");


$sq1 = "INSERT INTO limbikani_events(title, description, image, duration, sponser) VALUES (:title,:description,:image, :duration, :sponser)";

  $data = [
    'title' => $title,
    'description' => $description,
    'image' => $image,
    'duration' => $duration,
    'sponser' => $sponser,
    
];


$stmt = $pdo->prepare($sq1);
$stmt->execute($data);

}
catch (PDOException $e) {
  echo "The row could not be added.<br>".$e->getMessage();
}

if ($stmt->rowCount() == 1) {
    echo "data successfully inserted";
} else {
    echo "Error inserting data";
}
header("Location: ../../admin/index.php");