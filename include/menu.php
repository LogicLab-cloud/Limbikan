<!DOCTYPE html>
<html lang="en">

<head>
  <title>LIMBIKANI COMMUNITY BASED ORGANISATION</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/w3colors.css">
  <link rel="stylesheet" href="css/w3pro.css">


</head>

<body>


  <?php


  require './backend/common/connfig.php';






  $sql = "SELECT * FROM orgprofile";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $results = $stmt->fetchAll();

  $res = array();

  foreach ($results as $row) {


    // Associative array
    //$row = $result -> fetch_assoc();
    $name = $row["name"];
    $phoneNumber08 = $row["phoneNumber08"];
    $phoneNumber09 = $row["phoneNumber09"];
    $email = $row["email"];
    $address1 = $row["address1"];
    $address2 = $row["address2"];
    $HQ = $row["HQ"];
    $mission = $row["mission"];
    $vision = $row["vision"];
    $image = $row["logo"];
  }

  $logoUrl = "./backend/setters/img/logo/" . $image;



  ?>


  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img style="width: 50px; height: 50px;" class="border rounded-circle img-profile" src='<?php echo $logoUrl; ?>'></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
      </button>


      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="events.php" class="nav-link">Events</a></li>
          <li class="nav-item"><a href="programs.php" class="nav-link">Programs</a></li>
          <li class="nav-item"><a href="donate.php" class="nav-link">Donate</a></li>
          <li class="nav-item"><a href="partners.php" class="nav-link">Partners</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>