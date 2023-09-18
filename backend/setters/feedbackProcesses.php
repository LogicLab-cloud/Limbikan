<?php

//required files
require '../common/conn.php';
require '../common/function.php';

// valiables from about form of admin panel

$name = $_POST['name'];
$content = $_POST['content'];
$email = $_POST['email'];

$phoneNumber = $_POST['phoneNumber'];



//prepare a query to insert feedback
  $sql = "INSERT INTO `partners`(name, content, email, phoneNumber) VALUES (:name, :content, :email, :phoneNumber)";

// data to be inserted
  $data = [
    'name' => '$name',
    'content' => '$content',
    'email' => '$email',
    'phoneNumber' => '$phoneNumber'
    
];


$stmt = $pdo->prepare($sql);
$stmt->execute($data);

if ($stmt->rowCount() == 1) {
    echo "data successfully inserted";
} else {
    echo "Error inserting data";
}

header("Location: ../../");
