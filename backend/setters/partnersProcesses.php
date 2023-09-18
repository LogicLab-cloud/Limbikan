<?php

//required files
require '../common/connfig.php';
require '../common/function.php';


// valiables from about form of admin panel

$name = $_POST["name"];
$description = $_POST["description"];




//url of images

 $logoUrl = uploadPartnersImages($_FILES["logo"],$name);



//prepare a query to insert organisation of profile data
  $sql = "INSERT INTO `partners`(name, description, logo) VALUES (:name, :description, :logo)";

// data to be inserted
  $data = [
    'name' => $name,
    'description' => $description,
    'logo' => $logoUrl
    
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