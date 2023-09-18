<?php

require '../common/connfig.php';
require '../common/function.php';

$name = "logo";


$logoUrl = uploadLogo($_FILES["logo"], "prince");


$sq1 = "UPDATE orgprofile SET logo = '$logoUrl' WHERE id=:id";

$data = [
    'id' => 1
];

$stmt = $pdo->prepare($sq1);
$stmt->execute($data);
// if ($conn->query($sq1) === TRUE) {
//     echo "successfully";
// } else {
//     echo "error";
// }
header("Location: ../../admin/index.php");
