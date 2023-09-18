<?php
require '../backend/common/conn.php';


$sql = "SELECT id, name,phoneNumber08, phoneNumber09,email,address1, address2,HQ, vision,mission,logo FROM orgprofile";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
  
  while($row = $res->fetch_assoc()) {


$name          = $row['name'];
$phoneNumber08 = $row['phoneNumber08'];
$phoneNumber09 = $row['phoneNumber09'];
$email         = $row['email'];
$address1      = $row['address1'];
$address2      = $row['address2'];
$HQ            = $row['HQ'];
$vision        = $row['vision'];
$mission       = $row['mission'];
$logoUrl       = $row['logo'];

	
  	echo $vision."<br>".$mission;

}

}


?>