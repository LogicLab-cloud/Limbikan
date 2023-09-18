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
            background-color: transparent!important;
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
            background-color: transparent!important;
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
            background-color: transparent!important;
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
            background-color: transparent!important;
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
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Our Programs</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Programs</h1>
      </div>
    </div>
  </div>
</div>

<br><br>



<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4" id="programs">Our Programs</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/1.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <!--<div><a href="#">Started on Date</a></div>
              <div><a href="#">Location</a></div>-->
            </div>









            <h3 class="heading mb-4"><a href="#"> EARLY CHILDHOOD DEVELOPMENT</a></h3>
            <!--<p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> time and days of the program</span> <span><i class="icon-map-o"></i> Venue of Program</span></p>-->
            
             
                        <?php
    $paragraph6 = "Limbikani Community Based Child Care Centre (CBCC) was established to offer early childhood development for children of ages between three years to five years. The CBCC was formed as one way of shaping children’s future through early lessons, play, care and support. These children are either drawn from vulnerable families or those identified as orphans and those with disabilities. The CBCC enrolls over 200 children for ECD program every year to help children.";

    $words_limit6 = 15;
    $words6 = explode(' ', $paragraph6);
    $display_text6 = implode(' ', array_slice($words6, 0, $words_limit6));
    $remaining_text6 = implode(' ', array_slice($words6, $words_limit6));
    ?>

    <p id="content6"><?php echo $display_text6; ?></p>

    <button id="moreButton6" class="button6">More</button>
    <button id="lessButton6" class="button6" style="display: none;">Less</button>

    <script>
        const content6 = document.getElementById('content6');
        const moreButton6 = document.getElementById('moreButton6');
        const lessButton6 = document.getElementById('lessButton6');

        moreButton6.addEventListener('click', () => {
            content6.innerHTML = "<?php echo $paragraph6; ?>";
            moreButton6.style.display = 'none';
            lessButton6.style.display = 'inline';
        });

        lessButton6.addEventListener('click', () => {
            content6.innerHTML = "<?php echo $display_text6; ?>";
            moreButton6.style.display = 'inline';
            lessButton6.style.display = 'none';
        });
    </script>  
                
            
            <p><a href="#">Do not miss <i class="ion-ios-arrow-forward"></i></a></p>
          </div>
        </div>
      </div>
     

     

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