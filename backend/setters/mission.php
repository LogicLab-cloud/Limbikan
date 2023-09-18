<?php

require '../common/connfig.php';
require '../common/function.php';
require '../common/conn.php';

if (!empty($_POST["mission"])) {
	$mission = $_POST["mission"];

$sq1 = "UPDATE orgprofile SET mission = '$mission' WHERE id=1";
if ($conn->query($sq1) === TRUE) {
    echo "successfully";
} else {
    echo "error";
}
header("Location: ../../admin/index.html");
}