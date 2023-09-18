<?php include "include/menu.php";
?>

<style type="text/css">
  body {
    font-family: Arial, sans-serif;
  }

  #content9 {
    margin-bottom: 10px;
  }

  .button9 {

    border: none;

    color: blue;
    cursor: pointer;
    background-color: transparent !important;
  }

  #moreButton9 {
    margin-right: 10px;
  }

  #lessButton9 {
    display: none;
  }
</style>

<style type="text/css">
  body {
    font-family: Arial, sans-serif;
  }

  #content8 {
    margin-bottom: 10px;
  }

  .button8 {

    border: none;

    color: blue;
    cursor: pointer;
    background-color: transparent !important;
  }

  #moreButton8 {
    margin-right: 10px;
  }

  #lessButton8 {
    display: none;
  }
</style>

<style type="text/css">
  body {
    font-family: Arial, sans-serif;
  }

  #content7 {
    margin-bottom: 10px;
  }

  .button7 {

    border: none;

    color: blue;
    cursor: pointer;
    background-color: transparent !important;
  }

  #moreButton7 {
    margin-right: 10px;
  }

  #lessButton7 {
    display: none;
  }
</style>

<style type="text/css">
  body {
    font-family: Arial, sans-serif;
  }

  #content6 {
    margin-bottom: 10px;
  }

  .button6 {

    border: none;

    color: blue;
    cursor: pointer;
    background-color: transparent !important;
  }

  #moreButton6 {
    margin-right: 10px;
  }

  #lessButton6 {
    display: none;
  }
</style>


<div class="hero-wrap" style="background-image: url('images/e.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Events and News</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Events & News</h1>
      </div>
    </div>
  </div>
</div>

<br><br>



<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4" id="events">Events & News</h2>
      </div>
    </div>
    <div class='row'>


      <?php



      //required files
      require './backend/common/connfig.php';

      $id = "";
      $title = " ";
      $description = "";
      $image = " ";
      $logoUrl = "image";

      $sponser = "";
      $duration = " ";

      $sql = "SELECT * FROM limbikani_events";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $results = $stmt->fetchAll();

      $res = array();

      foreach ($results as $row) {
        $res[] = $row;

        $id = $row["id"];
        $title = $row["title"];
        $description = $row["description"];
        $image = $row["image"];
        $sponser = $row["sponser"];
        $duration = $row["duration"];

        $folderN = str_replace(' ', '_', $title);

        $logoUrl = "./backend/setters/$folderN/" . $image;




        echo " 
      <div class='col-md-4 d-flex ftco-animate'>
        <div class='blog-entry align-self-stretch'>
          <a href='#' class='block-20' style='background-image: url(" . $logoUrl . ")'>
           </a>
          <div class='text p-4 d-block'>
            <div class='meta mb-3'>
              <!--<div><a href='#''>Started on Date</a></div>
              <div><a href='#''>Location</a></div>-->
            </div> ";









        echo "<h3 class='heading mb-4'><a href='#'>$title</a></h3>";

        $paragraph9 = $description;

        $words_limit9 = 50;
        $words9 = explode(' ', $paragraph9);
        $display_text9 = implode(' ', array_slice($words9, 0, $words_limit9));
        $remaining_text9 = implode(' ', array_slice($words9, $words_limit9));

        echo "
    <p id='content9'> $display_text9 </p>

    <button id='moreButton9' class='button9'>More</button>
    <button id='lessButton9' class='button9' style='display: none;''>Less</button>

    ";



        echo "
    <script>
        const content9 = document.getElementById('content9');
        const moreButton9 = document.getElementById('moreButton9');
        const lessButton9 = document.getElementById('lessButton9');

        moreButton9.addEventListener('click', () => {
            content9.innerHTML = $paragraph9; 
            moreButton9.style.display = 'none';
            lessButton9.style.display = 'inline';
        });

        lessButton9.addEventListener('click', () => {
            content9.innerHTML =  $display_text9; ;
            moreButton9.style.display = 'inline';
            lessButton9.style.display = 'none';
        });
    </script>";











        echo "<p><a href='#'> Do not miss <i class='ion-ios-arrow-forward'></i></a></p>
          </div></div></div>";
      }
      ?>






      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="#" class="block-20" style="background-image: url('images/1.jpg');">
          </a>

        </div>
      </div>


    </div>
  </div>
</section>


<?php include "include/footer.php";
?>