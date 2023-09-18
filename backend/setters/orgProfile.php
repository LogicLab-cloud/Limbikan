<?php

require '../common/connfig.php';
require '../common/function.php';
require '../common/conn.php';

if (!empty($_POST["name"])) {
    $name = $_POST["name"];

    $sq1 = "UPDATE orgprofile SET name = '$name' WHERE id=1";
    if ($conn->query($sq1) === TRUE) {
        echo "successfully";
    } else {
        echo "error";
    }
    header("Location: ../../admin/index.php");
}
if (!empty($_POST["email"])) {
    $email = $_POST["email"];

    $sq1 = "UPDATE orgprofile SET email = '$email' WHERE id=1";
    if ($conn->query($sq1) === TRUE) {
        echo "successfully";
    } else {
        echo "error";
    }
    header("Location: ../../admin/index.php");
}
if (!empty($_POST["phoneNumber09"])) {
    $phone09 = $_POST["phoneNumber09"];

    $sq1 = "UPDATE orgprofile SET phoneNumber09 = '$phone09' WHERE id=1";
    if ($conn->query($sq1) === TRUE) {
        echo "successfully";
    } else {
        echo "error";
    }
    header("Location: ../../admin/index.php");
}
if (!empty($_POST["phoneNumber08"])) {
    $phone08 = $_POST["phoneNumber08"];

    $sq1 = "UPDATE orgprofile SET phoneNumber08 = '$phone08' WHERE id=1";
    if ($conn->query($sq1) === TRUE) {
        echo "successfully";
    } else {
        echo "error";
    }
    header("Location: ../../admin/index.php");
}
