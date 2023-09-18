
<?php


//Define the database connection details
$servername = "localhost";
$username = "u953672825_prince";
$password = "!pRINCE1347";
$dbname = "u953672825_limbikani";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "limbikani";



// Create a new PDO object
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);




// Set the error mode to exceptions
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Check if the connection was successful
// if ($pdo->connect_error()) {
// 	die("Connection failed: " . $pdo->connect_error());
// }

if ($pdo) {
	// echo "Ckkkd successfully";
}




?>