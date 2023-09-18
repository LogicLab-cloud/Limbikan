<?php

require '../common/connfig.php';
require '../common/function.php';
require '../common/conn.php';

if (!empty($_POST["HQ"])) {
	$HQ = $_POST["HQ"];

$sq1 = "UPDATE orgprofile SET HQ = '$HQ' WHERE id=1";
if ($conn->query($sq1) === TRUE) {
    echo "successfully";
} else {
    echo "error";
}
header("Location: ../../admin/index.html");
}
if (!empty($_POST["address1"])) {
	$address1 = $_POST["address1"];

$sq1 = "UPDATE orgprofile SET address1 = '$address1' WHERE id=1";
if ($conn->query($sq1) === TRUE) {
    echo "successfully";
} else {
    echo "error";
}
header("Location: ../../admin/index.html");
}
if (!empty($_POST["address2"])) {
	$address2 = $_POST["address2"];

$sq1 = "UPDATE orgprofile SET address2 = '$address2' WHERE id=1";
if ($conn->query($sq1) === TRUE) {
    echo "successfully";
} else {
    echo "error";
}
header("Location: ../../admin/index.html");
}