<?php

//required files
require '../common/connfig.php';
require '../common/function.php';
// valiables from about form of admin panel

$name = $_POST["name"];
$description = $_POST["description"];

$sponsor = $_POST["sponsor"];
$duration = $_POST["duration"];


//url of images

 $imageUrl = uploadPortfolioImages($_FILES['logo'],$name);



//prepare a query to insert organisation of profile data
  $sql = "INSERT INTO `portfolio`(name, description, images, sponsor, duration) VALUES (:name, :description, :image, :sponsor, :duration)";

// data to be inserted
  $data = [
    'name' => $name,
    'description' => $description,
    'image' => $imageUrl,
       'sponsor' => $sponsor,
          'duration' => $duration
    
];


$stmt = $pdo->prepare($sql);
$stmt->execute($data);

if ($stmt->rowCount() == 1) {
    echo "data successfully inserted";
} else {
    echo "Error inserting data";
}

header("Location: ../../admin/index.html");

?>