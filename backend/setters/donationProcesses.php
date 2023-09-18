<?php

//required files
//require '../common/conn.php';
require '../common/function.php';
require '../common/connfig.php';




// valiables from about form of admin panel

if (isset($_POST["name"])) {
  $name = $_POST["name"];
}

if (isset($_POST["email"])) {
  $email = $_POST["email"];
}
if (isset($_POST["description"])) {
  $description = $_POST["description"];
}
if (isset($_POST["amount"])) {
  $amount = $_POST["amount"];
}

$dateDonation = date("Y/m/d");


//url of images

$imageUrl = uploadDonationImages($_FILES['logo'], $name);



//prepare a query to insert organisation of profile data
$sql = "INSERT INTO `donation`(name, email, description, amount, dateDonation, logo) VALUES (:name, :email, :description,:amount, :dateDonation, :logo)";

// data to be inserted
$data = [
  'name' => $name,
  'email' => $email,
  'description' => $description,
  'amount' => $amount,
  'dateDonation' => $dateDonation,
  'logo' => $imageUrl

];


$stmt = $pdo->prepare($sql);
$stmt->execute($data);

if ($stmt->rowCount() == 1) {
  echo "data successfully inserted";
} else {
  echo "Error inserting data";
}

header("Location: ../../admin/index.html");
