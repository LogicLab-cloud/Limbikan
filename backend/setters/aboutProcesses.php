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

// $sql = "SELECT * FROM orgprofile";
// $res = $conn->query($sql);

// if ($res->num_rows > 0) {
  
//   while($row = $res->fetch_assoc()) {


     

// $name = $row['name'] ;
// $phoneNumber08 = $row['phoneNumber08'] ;
// $phoneNumber09 = $row['phoneNumber09'] ;
// $email = $row['email'] ;
// $address1 = $row['address1'] ;
// $address2 = $row['address2'] ;
// $HQ = $row['HQ'] ;
// $vision = $row['vision'] ;
// $mission = $row['mission'] ;
// $logo = $row['logo'] ;
// $logoUrl=$row['logo'] ;
// }
// }



// valiables from about form of admin panel

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['mission'])) {
   $mission = $_POST['mission'];
}
if (isset($_POST['vision'])) {
    $vision = $_POST['vision'];
}
if (isset($_POST['HQ'])) {
   $HQ =    $_POST['HQ'];
}
if (isset($_POST['address2'])) {
   
$address2 = $_POST['address2'];
}
if (isset($_POST['address1'])) {
   $address1 = $_POST['address1'];
}
if (isset($_POST['email'])) {
  $email = $_POST['email'];
}
if (isset($_POST['phoneNumber09'])) {
   $phoneNumber09 = $_POST['phoneNumber09'];
}
if (isset($_POST['phoneNumber08'])) {
  $phoneNumber08 = $_POST['phoneNumber08'];
}
if (isset($_POST['logo'])) {
  $logo = $_POST['logo'];
}

// valiables from about form of admin pane

if (isset($_FILES['logo'])) {
  $logoUrl = uploadLogo($_FILES['logo'],$name);
}



//prepare a queery to insert organisation of profile data
  $sql1 = "INSERT INTO `orgprofile`(name, phoneNumber08, phoneNumber09, email, address1, address2, HQ, vision, mission, logo) VALUES ('$name', '$phoneNumber08', '$phoneNumber09', '$email', '$address1', '$address2', '$HQ', '$vision', '$mission', '$logo')";
 
 if ($conn->query($sql1) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}






// // data to be inserted
//   $data = [
//     'name' => $name,
//     'phoneNumber08' => $phoneNumber08,
//     'phoneNumber09' => $phoneNumber09,
//     'email' => $email,
//     'address1' => $address1,
//     'address2' => $address2,
//     'HQ' => $HQ,
//     'vision' => $vision,
//     'mission' => $mission,
//     'logo' => $logoUrl,
// ];


// $stmt = $pdo->prepare($sql);
// $stmt->execute($data);

if ($sq2->rowCount() == 1) {
    echo "data successfully inserted";
} else {
    echo "Error inserting data";
}
header("Location: ../../admin/index.html");