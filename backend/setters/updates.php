<?php

//required files
require '../common/conn.php';
require '../common/function.php';

$name = " ";
$phoneNumber08 = "";
$phoneNumber09 = " ";
$email = " ";
$address1 = " ";
$address2 = " ";
$HQ = " ";
$vision = " ";
$mission = " ";
$logo = " ";


$updatefield = " ";




// valiables from about form of admin panel

if (isset($_POST['name'])) {
    $updatefield  = $_POST['name'];
}
if (isset($_POST['mission'])) {
  $updatefield  = $_POST['mission'];
}
if (isset($_POST['vision'])) {
    $updatefield  = $_POST['vision'];
}
if (isset($_POST['HQ'])) {
   $updatefield =    $_POST['HQ'];
}
if (isset($_POST['address2'])) {
   
$updatefield  = $_POST['address2'];
}
if (isset($_POST['address1'])) {
   $updatefield = $_POST['address1'];
}
if (isset($_POST['email'])) {
  $updatefield  = $_POST['email'];
}
if (isset($_POST['phoneNumber09'])) {
   $updatefield  = $_POST['phoneNumber09'];
}
if (isset($_POST['phoneNumber08'])) {
  $updatefield  = $_POST['phoneNumber08'];
}
if (isset($_POST['logo'])) {
  $updatefield  = $_POST['logo'];
}


$sql = "UPDATE orgprofile SET '$field' = :$updatefield WHERE id = 1";
$stmt =$conn->prepare($sql);
$stmt->bindParam(':$field', $data['$updatefield']);

$stmt->execute();



if ($stmt->rowCount() == 1) {
    echo "data successfully inserted";
} else {
    echo "Error inserting data";
}

header("Location: ../../admin/index.html");

?>