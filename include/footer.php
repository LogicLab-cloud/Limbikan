<footer class="ftco-footer ftco-section img">
  <div class="overlay"></div><br><br>
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-3">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">About Us</h2>
          <p>Limbikani Community Based Organization (CBO) is a non-profit organization dedicated to improving the lives of vulnerable children and youth in the northern part of Malawi.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">

            <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=100092274821145"><span class="icon-facebook"></span></a></li>
            </ul>
        </div>
      </div>
       <?php

require './backend/common/connfig.php';




$sq = "SELECT * FROM orgprofile";
//$result = $conn -> query($sq);

$stmt = $pdo->prepare($sq);
$stmt->execute();
$results = $stmt->fetchAll();

$res = array();

foreach ($results as $row) {

// Associative array
//$row = $result -> fetch_assoc();
$name= $row["name"];
 $phoneNumber08=$row["phoneNumber08"];
  $phoneNumber09 = $row["phoneNumber09"];
   $email = $row["email"];
    $address1 = $row["address1"];
     $address2 = $row["address2"];
      $HQ = $row["HQ"];
       $mission =$row["mission"];
        $vision = $row["vision"];
         $image = $row["logo"];

$logoUrl = $image;
}

?>
      <div class="col-md-4">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Recent Posts</h2>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/b.jpg);"></a>
            <div class="text">
              <h3 class="heading"><span href="#">Youth Program</span></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span>01 August 2023</a></div>
                <div><a href="#"><span class="icon-person"></span> posted by Admin</a></div>
              </div>
            </div>
          </div>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/1.jpg);"></a>
            <div class="text">
              <h3 class="heading"><span href="#">Capacity Development Project</span></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> 26 July 2023</a></div>
                <div><a href="#"><span class="icon-person"></span> posted by Admin</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">Quick Links</h2>
          <ul class="list-unstyled">
            <li><a href="index.php" class="py-2 d-block">Home</a></li>
            <li><a href="about.php" class="py-2 d-block">About</a></li>
            <li><a href="programs.php" class="py-2 d-block">Programs</a></li>
            <li><a href="donate.php" class="py-2 d-block">Donate</a></li>
            <li><a href="partners.php" class="py-2 d-block">Partners</a></li>
            <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Have a Questions?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon icon-map-marker"></span><span class="text">
                <?php echo $HQ; ?></span></li>
              <li><a href="#"><span class="icon icon-phone"></span><span class="text"> <?php echo $phoneNumber08; ?></span></a></li>
              <li><a href="#"><span class="icon icon-phone"></span><span class="text"> <?php echo $phoneNumber09; ?></span></a></li>
              <li><a href="#"><span class="icon icon-envelope"></span><span class="text"> <?php echo $email; ?></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div> <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#ebebeb" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F86D00" />
      </svg></div>
  </div>
</footer>






<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>

</html>