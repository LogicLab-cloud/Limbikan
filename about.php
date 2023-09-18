<?php
include "include/menu.php";
require './backend/common/connfig.php';
require './backend/common/function.php';



$sq = "SELECT * FROM orgprofile";


$stmt = $pdo->prepare($sq);
$stmt->execute();
$results = $stmt->fetchAll();



foreach ($results as $row) {

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

  $logoUrl = "../backend/setters/img/logo" . $image;
}

?>
<!-- END nav -->




<style>
  body {
    font-family: Arial, sans-serif;
  }

  #content1 {
    margin-bottom: 10px;
  }

  .button1 {

    border: none;

    color: blue;
    cursor: pointer;
    background-color: transparent !important;
  }

  #moreButton1 {
    margin-right: 10px;
  }

  #lessButton1 {
    display: none;
  }
</style>

<style>
  body {
    font-family: Arial, sans-serif;
  }

  #content2 {
    margin-bottom: 10px;
  }

  .button2 {

    border: none;

    color: blue;
    cursor: pointer;
    background-color: transparent !important;
  }

  #moreButton2 {
    margin-right: 10px;
  }

  *+/ #lessButton2 {
    display: none;
  }
</style>

<style>
  body {
    font-family: Arial, sans-serif;
  }

  #content3 {
    margin-bottom: 10px;
  }

  .button3 {

    border: none;

    color: blue;
    cursor: pointer;
    background-color: transparent !important;
  }

  #moreButton3 {
    margin-right: 10px;
  }

  #lessButton3 {
    display: none;
  }
</style>

<style>
  body {
    font-family: Arial, sans-serif;
  }

  #content4 {
    margin-bottom: 10px;
  }

  .button4 {

    border: none;

    color: blue;
    cursor: pointer;
    background-color: transparent !important;
  }

  #moreButton4 {
    margin-right: 10px;
  }

  #lessButton4 {
    display: none;
  }
</style>

<div class="hero-wrap" style="background-image: url('images/d.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>About</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
      </div>
    </div>
  </div>
</div><br><br>


<section class="ftco-sVection">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 d-flex ftco-animate">
        <div class="img img-about align-self-stretch" style="background-image: url(images/1.jpg); width: 100%;"></div>
      </div>
      <div class="col-md-6 pl-md-5 ftco-animate">
        <h2 class="mb-4">Get to know us</h2>
        <p>
          Limbikani Community Based Organization (CBO) is a non-profit organization dedicated to improving the lives of vulnerable children and youth in the northern part of Malawi. We believe that all children have the right to a safe, healthy, and nurturing environment where they can reach their full potential. Our vision is a better future for all vulnerable children. Our mission is to facilitate the promotion and realization of all enshrined rights and vulnerable groups of northern part of Malawi for their personal and community development
        </p>
      </div>
    </div>
  </div><br>
  <hr>
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Our Mission</h2>
        <p><?php
            echo "$mission";
            ?></p>
      </div>
    </div>
  </div>
  <hr>
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Our Vision</h2>
        <p><?php
            echo "$vision";
            ?></p>
      </div>
    </div>
  </div>
</section>




<!-- About Section -->
<div class="w3-container w3-padding-32" id="about">

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="images/mzumara.jpeg" alt="Dickson Mzumara" style="width:100%">
      <h4>Dickson Mzumara</h4>
      <p class="w3-opacity">Board Chair</p>

      <?php
      $paragraph1 = "Commissioner, Malawi Electoral Commission, 2008 to 2012.Between 1978 and 2002, held various senior positions with the United Nations Economic Commission for Africa (UNECA) in Addis Ababa), including as Deputy Chief of Administration and Conference Services, Advisor to the Executive Secretary of the UNECA. Other positions held included Chief, Evaluation Unit of the UNECA, Senior Policy and Programme Coordination Officer, Senior Statistician, Team Leader for a project on Statistical Development in Africa, and served as Officer-in-Charge of the UNECA Multinational Programming Office in Lusaka. Contributed to several technical manuals and publications including representing UNECA at the UN Statistical Commission, inter-agency meetings and at SADC summits. Between 1968 and 1976 Worked at the National Statistical Office in Zomba, Malawi.";

      $words_limit1 = 15;
      $words1 = explode(' ', $paragraph1);
      $display_text1 = implode(' ', array_slice($words1, 0, $words_limit1));
      $remaining_text1 = implode(' ', array_slice($words1, $words_limit1));
      ?>

      <p id="content1"><?php echo $display_text1; ?></p>

      <button id="moreButton1" class="button1">More</button>
      <button id="lessButton1" class="button1" style="display: none;">Less</button>

      <script>
        const content1 = document.getElementById('content1');
        const moreButton1 = document.getElementById('moreButton1');
        const lessButton1 = document.getElementById('lessButton1');

        moreButton1.addEventListener('click', () => {
          content1.innerHTML = "<?php echo $paragraph1; ?>";
          moreButton1.style.display = 'none';
          lessButton1.style.display = 'inline';
        });

        lessButton1.addEventListener('click', () => {
          content1.innerHTML = "<?php echo $display_text1; ?>";
          moreButton1.style.display = 'inline';
          lessButton1.style.display = 'none';
        });
      </script>
      <!--<p><button class="w3-button w3-light-grey w3-block">Contact</button></p>-->
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="images/towera.jpeg" alt="Towera" style="width:100%">
      <h4>Laurencia Towera Banda</h4>
      <p class="w3-opacity">Board Secretary </p>

      <?php
      $paragraph2 = "Laurencia Towera Banda Has a Bachelor degree in Education Language. She is a secondary school teacher for the ministry of education at Zolozolo community Day Secondary school, Mzuzu. She also have a teaching Certificate obtained at karonga Teachers Training College and have worked for nine Years as a primary school teacher for the Ministry of Education. Through her carrier she has demonstrated strong planning and organisational skills, profound Management and leadership skills. She is able to lead teams on projects where the highest standard are routinely demanded, ensuring that projects are delivered to the highest quality to determine the relevance and fofulmemt of objectives,  missions and visions.";

      $words_limit2 = 15;
      $words2 = explode(' ', $paragraph2);
      $display_text2 = implode(' ', array_slice($words2, 0, $words_limit2));
      $remaining_text2 = implode(' ', array_slice($words2, $words_limit2));
      ?>

      <p id="content2"><?php echo $display_text2; ?></p>

      <button id="moreButton2" class="button2">More</button>
      <button id="lessButton2" class="button2" style="display: none;">Less</button>

      <script>
        const content2 = document.getElementById('content2');
        const moreButton2 = document.getElementById('moreButton2');
        const lessButton2 = document.getElementById('lessButton2');

        moreButton2.addEventListener('click', () => {
          content2.innerHTML = "<?php echo $paragraph2; ?>";
          moreButton2.style.display = 'none';
          lessButton2.style.display = 'inline';
        });

        lessButton2.addEventListener('click', () => {
          content2.innerHTML = "<?php echo $display_text2; ?>";
          moreButton2.style.display = 'inline';
          lessButton2.style.display = 'none';
        });
      </script>
      <!--<p><button class="w3-button w3-light-grey w3-block">Contact</button></p>-->
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="images/wilton.jpeg" alt="Wilton Chizotera Mkandawire" style="width:100%">
      <h4>Wilton Chizotera Mkandawire</h4>
      <p class="w3-opacity">Board Treasure</p>

      <?php
      $paragraph3 = "Wilton Chizotera Mkandawire is retired civil servant, he has worked with the ministry of Education for over 20 years in the account*s Department. Throughout his carrier he has demonstrated strong understanding of accoun+/ting principles, practices and procedures for both public and Private sector.";

      $words_limit3 = 15;
      $words3 = explode(' ', $paragraph3);
      $display_text3 = implode(' ', array_slice($words3, 0, $words_limit3));
      $remaining_text3 = implode(' ', array_slice($words3, $words_limit3));
      ?>

      <p id="content3"><?php echo $display_text3; ?></p>

      <button id="moreButton3" class="button3">More</button>
      <button id="lessButton3" class="button3" style="display: none;">Less</button>

      <script>
        const content3 = document.getElementById('content3');
        const moreButton3 = document.getElementById('moreButton3');
        const lessButton3 = document.getElementById('lessButton3');

        moreButton3.addEventListener('click', () => {
          content3.innerHTML = "<?php echo $paragraph3; ?>";
          moreButton3.style.display = 'none';
          lessButton3.style.display = 'inline';
        });

        lessButton3.addEventListener('click', () => {
          content3.innerHTML = "<?php echo $display_text3; ?>";
          moreButton3.style.display = 'inline';
          lessButton3.style.display = 'none';
        });
      </script>
      <!--<p><button class="w3-button w3-light-grey w3-block">Contact</button></p>-->
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="images/eliza.jpeg" alt="Elizabeth Mtonga " style="width:100%">
      <h4>Elizabeth Mtonga </h4>
      <p class="w3-opacity">Board Member</p>

      <?php
      $paragraph4 = "Elizabeth Mtonga is a former employee of Malawi Revenue Authority (MRA). She has also served as president of Rotary Club of Mzuzu in the Year 2020/2021. Throughout her career she demonstrated great passion, commitment and understanding of Community service.";

      $words_limit4 = 15;
      $words4 = explode(' ', $paragraph4);
      $display_text4 = implode(' ', array_slice($words4, 0, $words_limit4));
      $remaining_text4 = implode(' ', array_slice($words4, $words_limit4));
      ?>

      <p id="content4"><?php echo $display_text4; ?></p>

      <button id="moreButton4" class="button4">More</button>
      <button id="lessButton4" class="button4" style="display: none;">Less</button>

      <script>
        const content4 = document.getElementById('content4');
        const moreButton4 = document.getElementById('moreButton4');
        const lessButton4 = document.getElementById('lessButton4');

        moreButton4.addEventListener('click', () => {
          content4.innerHTML = "<?php echo $paragraph4; ?>";
          moreButton4.style.display = 'none';
          lessButton4.style.display = 'inline';
        });

        lessButton4.addEventListener('click', () => {
          content4.innerHTML = "<?php echo $display_text4; ?>";
          moreButton4.style.display = 'inline';
          lessButton4.style.display = 'none';
        });
      </script>
      <!--<p><button class="w3-button w3-light-grey w3-block">Contact</button></p>-->
    </div>
  </div>





  <hr>

  <section class="ftco-sBection contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h4">Contact Information</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-3">
          <p><span>Headquarters:</span> <?php
                                        echo "$HQ";
                                        ?></p>
        </div>
        <div class="col-md-3">
          <p><span>Phone:</span> <a href="tel://  <?php
                                                  echo "$phoneNumber08" ?> "><?php
                                                                              echo "$phoneNumber08";
                                                                              ?></a></p>
        </div>
        <div class="col-md-3">
          <p><span>phone:</span> <a href="tel://  <?php
                                                  echo "$phoneNumber09" ?> "><?php
                                                                              echo "$phoneNumber09";
                                                                              ?></a></< /p>
        </div>
        <div class="col-md-3">
          <p><span>Email:</span> <a href="mailto:<?php
                                                  echo "$email" ?> "><?php
                                                                      echo "$email";
                                                                      ?></a></< /p>
        </div>
      </div>
      <hr>

      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          <h4 class="mb-4"><?php
                            echo "$address1";
                            ?></h4>

        </div><!--
      <div class="col-md-6 pr-md-5">
        <h4 class="mb-4">Post Office/ Private Pag</h4>
        <p>C/O Mzuzu City Council, P.O Box 1, Mzuzu</p>
      </div>-->
      </div><br><br>
      <hr>

      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          <h4 class="mb-4">Do you have any questions?</h4>
          <form action="#" method="POST">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
        </div>

        <div class="col-md-6"><br><br>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </div>
      </div>
    </div>
    </form>
  </section>
  <hr>
  <!--
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Latest Donations</h2>
        <p>Expression from donations.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        <div class="staff">
          <div class="d-flex mb-4">
            <div class="img" style="background-image: url(images/person_1.jpg);"></div>
            <div class="info ml-4">
              <h3><a href="teacher-single.html">Name of the Donator</a></h3>
              <span class="position">Date donated</span>
              <div class="text">
                <p>Donated <span>in MwK</span> for <a href="#">Program/Project</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        <div class="staff">
          <div class="d-flex mb-4">
            <div class="img" style="background-image: url(images/person_1.jpg);"></div>
            <div class="info ml-4">
              <h3><a href="teacher-single.html">Name of the Donator</a></h3>
              <span class="position">Date donated</span>
              <div class="text">
                <p>Donated <span>in MwK</span> for <a href="#">Program/Project</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        <div class="staff">
          <div class="d-flex mb-4">
            <div class="img" style="background-image: url(images/person_1.jpg);"></div>
            <div class="info ml-4">
              <h3><a href="teacher-single.html">Name of the Donator</a></h3>
              <span class="position">Date donated</span>
              <div class="text">
                <p>Donated <span>in MwK</span> for <a href="#">Program/Project</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->


  <?php
  include "include/footer.php";
  ?>